<?php

namespace Laravel\Nightwatch\Sensors;

use Illuminate\Cache\Events\CacheEvent;
use Illuminate\Cache\Events\CacheHit;
use Illuminate\Cache\Events\CacheMissed;
use Illuminate\Cache\Events\ForgettingKey;
use Illuminate\Cache\Events\KeyForgetFailed;
use Illuminate\Cache\Events\KeyForgotten;
use Illuminate\Cache\Events\KeyWriteFailed;
use Illuminate\Cache\Events\KeyWritten;
use Illuminate\Cache\Events\RetrievingKey;
use Illuminate\Cache\Events\RetrievingManyKeys;
use Illuminate\Cache\Events\WritingKey;
use Illuminate\Cache\Events\WritingManyKeys;
use Laravel\Nightwatch\Clock;
use Laravel\Nightwatch\Compatibility;
use Laravel\Nightwatch\Records\CacheEvent as CacheEventRecord;
use Laravel\Nightwatch\State\CommandState;
use Laravel\Nightwatch\State\RequestState;
use RuntimeException;

use function hash;
use function in_array;
use function round;

/**
 * @internal
 */
final class CacheEventSensor
{
    private ?float $startTime = null;

    private const START_EVENTS = [
        RetrievingKey::class,
        RetrievingManyKeys::class,
        WritingKey::class,
        WritingManyKeys::class,
        ForgettingKey::class,
    ];

    public function __construct(
        private Clock $clock,
        private RequestState|CommandState $executionState,
    ) {
        //
    }

    public function __invoke(CacheEvent $event): void
    {
        $now = $this->clock->microtime();

        if (Compatibility::$cacheDurationCapturable) {
            if (in_array($event::class, self::START_EVENTS, strict: true)) {
                $this->startTime = $now;

                return;
            }

            if ($this->startTime === null) {
                throw new RuntimeException('No start time found for ['.$event::class."] event with key [{$event->key}].");
            }

            $startTime = $this->startTime;
            $duration = (int) round(($now - $this->startTime) * 1_000_000);
        } else {
            $startTime = $now;
            $duration = 0;
        }

        /** @var string */
        $storeName = Compatibility::$cacheStoreNameCapturable
            ? ($event->storeName ?? '')
            : '';

        $this->executionState->cacheEvents++;

        $type = match ($event::class) {
            CacheHit::class => 'hit',
            CacheMissed::class => 'miss',
            KeyWritten::class => 'write',
            KeyWriteFailed::class => 'write-failure',
            KeyForgotten::class => 'delete',
            KeyForgetFailed::class => 'delete-failure',
            default => throw new RuntimeException('Unexpected event type ['.$event::class.']'),
        };

        $this->executionState->records->write(new CacheEventRecord(
            timestamp: $startTime,
            deploy: $this->executionState->deploy,
            server: $this->executionState->server,
            _group: hash('xxh128', "{$storeName},{$event->key}"),
            trace_id: $this->executionState->trace,
            execution_source: $this->executionState->source,
            execution_id: $this->executionState->id(),
            execution_preview: $this->executionState->executionPreview(),
            execution_stage: $this->executionState->stage,
            user: $this->executionState->user->id(),
            store: $storeName,
            key: $event->key,
            type: $type,
            duration: $duration,
            ttl: in_array($event::class, [KeyWritten::class, KeyWriteFailed::class], true) ? ($event->seconds ?? 0) : 0,
        ));
    }
}

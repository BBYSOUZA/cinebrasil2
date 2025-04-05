@extends('layouts.app')

@section('content')
<livewire:header />

<section class="bg-blue-950 text-white py-12 px-6 md:px-20">
  <div class="max-w-[1440px] mx-full">
    <h1 class="text-3xl font-bold text-cineYellow mb-6">Impressum</h1>

    <p class="mb-4">
      Angaben gemäß § 5 TMG:<br>
      CineBrasil Martins<br>
      Schönhauser Allee 32, 10435 Berlin<br>
      10115 Berlin
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-4">Kontakt</h2>
    <p class="mb-4">
      Telefon: +49 (0)162 5430335<br>
      E-Mail: <a href="mailto:info@cinemanegro.de" class="underline hover:text-yellow-400">info@cinemanegro.de</a>
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-4">Verantwortlich für den Inhalt</h2>
    <p class="mb-4">
      Sidney Martins<br>
      Musterstraße 123<br>
      10115 Berlin
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-4">Urheberrecht</h2>
    <p class="mb-4">
    Alle auf dieser Webseite erschienenen Beiträge sind urheberrechtlich geschützt.<br> 
    Alle Rechte, auch für Übersetzungen, vorbehalten. Reproduktionen, gleich welcher Art,<br> 
    ob Fotokopie, Microfilm oder Erfassung in Datenverarbeitungsanlagen, nur mit schriftlicher<br> 
    Genehmigung der cinema negro-Filmproduktion GmbH Berlin.
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-4">Datenschutz</h2>
    <p class="mb-4">
    Die Verarbeitung personenbezogener Daten erfolgt ausschließlich auf Grundlage der gesetzlichen <br> 
    Bestimmungen (DSGVO), in dieser Datenschutzerklärung informieren wir über die wichtigsten Aspekte <br> 
    der Datenverarbeitung auf dieser Website. Die Aktualisierung der Datenschutzerklärung wird regelmäßig<br> 
    gemäß dem Inhalt der Website aktualisiert.
    </p>

    <p class="text-sm">
    <link rel="stylesheet" href="www.cinemanegro.de">
    <link rel="stylesheet" href="www.cinebrasil.info">
    Weitere rechtliche Hinweise werden nach Maßgabe der gesetzlichen Bestimmungen ergänzt.<br>
    Bei Fragen zum Datenschutz können Sie sich jederzeit an uns wenden.
    </p>
  </div>
</section>
@endsection
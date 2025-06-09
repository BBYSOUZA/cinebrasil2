@extends('layouts.app')

@section('content')
<livewire:header />

<section class="bg-blue-950 text-white py-12 px-6 md:px-20">
  <div class="max-w-[1440px] mx-full">
    <h1 class="text-3xl font-bold text-cineYellow mb-6">Legal Notice</h1>

    <p class="mb-4">
      Information according to § 5 TMG:<br>
      CineBrasil Martins<br>
      Schönhauser Allee 32, 10435 Berlin<br>
      Germany
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-4">Contact</h2>
    <p class="mb-4">
      Phone: +49 (0)162 5430335<br>
      E-mail: <a href="mailto:info@cinemanegro.de" class="underline hover:text-yellow-400">info@cinemanegro.de</a>
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-4">Content Responsibility</h2>
    <p class="mb-4">
      Sidney Martins<br>
      Musterstraße 123<br>
      10115 Berlin<br>
      Germany
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-4">Copyright</h2>
    <p class="mb-4">
      All contributions published on this website are protected by copyright.<br>
      All rights reserved, including translations. Reproduction in any form,<br>
      whether photocopying, microfilm, or data processing, only with written<br>
      permission from cinema negro-Filmproduktion GmbH Berlin.
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-4">Data Protection</h2>
    <p class="mb-4">
      The processing of personal data is carried out solely on the basis of legal<br>
      provisions (GDPR). This privacy policy provides information on the most<br>
      important aspects of data processing on this website. The privacy policy is<br>
      updated regularly in line with changes to the site content.
    </p>

    <p class="text-sm">
      <link rel="stylesheet" href="https://www.cinemanegro.de">
      <link rel="stylesheet" href="https://www.cinebrasil.info">
      Further legal notes will be added in accordance with statutory requirements.<br>
      If you have any questions regarding data protection, you may contact us at any time.
    </p>
  </div>
</section>
@endsection
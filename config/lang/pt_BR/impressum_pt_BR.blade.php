@extends('layouts.app')

@section('content')
<livewire:header />

<section class="bg-blue-950 text-white py-12 px-6 md:px-20">
  <div class="max-w-[1440px] mx-full">
    <h1 class="text-3xl font-bold text-cineYellow mb-6">Aviso Legal</h1>

    <p class="mb-4">
      Informações conforme § 5 TMG:<br>
      CineBrasil Martins<br>
      Schönhauser Allee 32, 10435 Berlim<br>
      Alemanha
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-4">Contato</h2>
    <p class="mb-4">
      Telefone: +49 (0)162 5430335<br>
      E-mail: <a href="mailto:info@cinemanegro.de" class="underline hover:text-yellow-400">info@cinemanegro.de</a>
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-4">Responsável pelo Conteúdo</h2>
    <p class="mb-4">
      Sidney Martins<br>
      Musterstraße 123<br>
      10115 Berlim<br>
      Alemanha
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-4">Direitos Autorais</h2>
    <p class="mb-4">
      Todas as contribuições publicadas neste site estão protegidas por direitos autorais.<br>
      Todos os direitos reservados, incluindo traduções. Reprodução de qualquer forma,<br>
      seja fotocópia, microfilme ou processamento de dados, somente com autorização<br>
      escrita da cinema negro-Filmproduktion GmbH Berlin.
    </p>

    <h2 class="text-2xl font-bold text-cineYellow mb-4">Proteção de Dados</h2>
    <p class="mb-4">
      O tratamento de dados pessoais ocorre exclusivamente com base em disposições<br>
      legais (RGPD). Esta política de privacidade informa sobre os aspectos mais<br>
      importantes do processamento de dados neste site. A política de privacidade é<br>
      atualizada regularmente conforme o conteúdo do site evolui.
    </p>

    <p class="text-sm">
      <link rel="stylesheet" href="https://www.cinemanegro.de">
      <link rel="stylesheet" href="https://www.cinebrasil.info">
      Outras observações legais serão adicionadas conforme exigido por lei.<br>
      Se tiver dúvidas sobre proteção de dados, entre em contato conosco a qualquer momento.
    </p>
  </div>
</section>
@endsection
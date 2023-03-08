<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gaming blog</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']);
  
  </head>
  <body>
    {{-- Navbar --}}
    <x-navbar />
    @if (session('gameCreated'))
    <div class="alert alert-success">
        {{ session('gameCreated') }}
    </div>
@endif
    {{-- Pagina con contenuto dinamico --}}
    <main class="min-vh-100">
        {{$slot}}
    </main>
    {{-- Footer --}}
    <x-footer />
  </body>
</html>
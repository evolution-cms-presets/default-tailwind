<!doctype html>
<html lang="{{ evo()->getLocale() ?: evo()->getConfig('lang', 'en') }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', evo()->getConfig('site_name', 'Evolution CMS'))</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="/themes/{{ env('EVO_PRESET_NAME', 'default-tailwind') }}/css/app.css">
  </head>
  <body class="min-h-screen bg-slate-50 text-slate-950 antialiased">
    <div class="grid min-h-screen grid-rows-[auto_1fr]">
      @include('partials.header')

      <main class="mx-auto w-full max-w-5xl px-4 py-12 sm:px-6 lg:px-8">
        @yield('content')
      </main>
    </div>
  </body>
</html>

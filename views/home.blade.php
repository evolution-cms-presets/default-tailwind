@extends('layouts.base')

@section('title', $documentObject['longtitle'] ?? $documentObject['pagetitle'] ?? evo()->getConfig('site_name'))

@section('content')
  <article class="mx-auto max-w-3xl">
    @if(!empty($documentObject['content']))
      <div class="content-flow">
        {!! $documentObject['content'] !!}
      </div>
    @else
      <section class="space-y-8">
        <div class="space-y-4">
          <p class="text-sm font-semibold uppercase tracking-normal text-teal-700">Evolution CMS + Tailwind</p>
          <h1 class="max-w-2xl text-4xl font-semibold tracking-normal text-slate-950 sm:text-5xl">
            {{ evo()->getConfig('site_name') ?: 'Evolution CMS' }}
          </h1>
          <p class="max-w-2xl text-lg leading-8 text-slate-600">
            Clean controllers, Blade views, and a Tailwind-ready theme layer for a fresh Evolution CMS project.
          </p>
        </div>

        <div class="grid gap-4 sm:grid-cols-3">
          <div class="rounded-lg border border-slate-200 bg-white p-5">
            <p class="text-sm font-semibold text-slate-950">Controllers</p>
            <p class="mt-2 text-sm leading-6 text-slate-600">A small PHP layer keeps page logic close to the project.</p>
          </div>
          <div class="rounded-lg border border-slate-200 bg-white p-5">
            <p class="text-sm font-semibold text-slate-950">Views</p>
            <p class="mt-2 text-sm leading-6 text-slate-600">Blade templates stay compact and easy to replace.</p>
          </div>
          <div class="rounded-lg border border-slate-200 bg-white p-5">
            <p class="text-sm font-semibold text-slate-950">Theme</p>
            <p class="mt-2 text-sm leading-6 text-slate-600">Tailwind classes are ready from the first page load.</p>
          </div>
        </div>
      </section>
    @endif
  </article>
@endsection

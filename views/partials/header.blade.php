<header class="border-b border-slate-200 bg-white/90 backdrop-blur">
  <div class="mx-auto flex w-full max-w-5xl flex-col gap-4 px-4 py-4 sm:min-h-16 sm:flex-row sm:items-center sm:justify-between sm:px-6 lg:px-8">
    <a class="text-base font-semibold tracking-normal text-slate-950 no-underline" href="{{ evo()->makeUrl((int) evo()->getConfig('site_start')) }}">
      {{ evo()->getConfig('site_name') ?: 'Evolution CMS' }}
    </a>

    @if(!empty($menu))
      <nav class="flex flex-wrap items-center gap-x-5 gap-y-2 text-sm" aria-label="Primary navigation">
        @foreach($menu as $item)
          <a
            class="font-medium text-slate-500 no-underline transition hover:text-slate-950 aria-[current=page]:text-teal-700"
            href="{{ evo()->makeUrl((int) $item['id']) }}"
            @if(in_array((int) $item['id'], $parentIds ?? [], true)) aria-current="page" @endif
          >
            {{ $item['menutitle'] ?: $item['pagetitle'] }}
          </a>
        @endforeach
      </nav>
    @endif
  </div>
</header>

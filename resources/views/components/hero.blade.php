<section {{ $attributes->merge(['class' => 'relative isolate overflow-hidden']) }}>
    @php
        $backgroundUrl = $background ?? null; // e.g. asset('/storage/image/learn_artesanos.webp')
    @endphp

    @if ($backgroundUrl)
        <div class="absolute inset-0 -z-10">
            <img src="{{ $backgroundUrl }}" alt="Hero background" class="h-full w-full object-cover" />
            <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-black/40 to-black/60"></div>
        </div>
    @else
        <div class="absolute inset-0 -z-10 bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900"></div>
        <div class="absolute -z-10 inset-y-0 right-1/2 -mr-64 w-[200%] rotate-12 opacity-20 bg-white/5 blur-3xl"></div>
    @endif

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-20 sm:py-28">
        <div class="mx-auto max-w-3xl text-center">
            @isset($eyebrow)
                <p class="text-sm uppercase tracking-[0.2em] text-white/70 mb-3">{{ $eyebrow }}</p>
            @endisset
            <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight text-white">
                {{ $title ?? '' }}
            </h1>
            @isset($subtitle)
                <p class="mt-6 text-lg sm:text-xl text-white/80">
                    {{ $subtitle }}
                </p>
            @endisset
            @isset($cta)
                <div class="mt-10 flex items-center justify-center gap-x-4">
                    {{ $cta }}
                </div>
            @endisset
        </div>
    </div>

    @isset($below)
        <div class="relative">
            {{ $below }}
        </div>
    @endisset
</section>


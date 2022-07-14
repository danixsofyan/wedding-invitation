@if (filled($brand = config('filament.brand')))
    <div @class([
        'text-xl font-bold tracking-tight filament-brand',
        'dark:text-white' => config('filament.dark_mode'),
    ])>
        <img src="{{ asset('/undangan/logo-undangan.svg') }}" alt="Logo" class="h-5">
    </div>
@endif

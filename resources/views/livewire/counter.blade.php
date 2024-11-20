<div class="counter">
    <h1>Contador: {{ $count }}</h1>

    @if($errorMessage)
        <div class="error" style="color: red;">
            {{ $errorMessage }}
        </div>
    @endif

    {{-- <button wire:click='increment'>+</button> --}}
    {{-- <button wire:click.throttle.1000ms='increment'>+</button> --}}
    {{-- <button wire:click.window='increment'>+</button> --}}
    <button wire:click='increment(2)'>+</button>
    <button wire:click='decrement'>-</button>
</div>

@push('styles')
    <link rel="stylesheet" href="/css/counter.css">
@endpush


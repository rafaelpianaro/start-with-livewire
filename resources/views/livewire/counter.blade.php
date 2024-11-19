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
    
    <style>
        .counter {
            text-align: center;
            margin-top: 20px;
        }
    
        .counter button {
            margin: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    
        .error {
            margin-top: 10px;
        }
    </style>
</div>


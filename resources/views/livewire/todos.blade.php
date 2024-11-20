<div class="todos-container">
    <form wire:submit='add'>
        {{-- <input type="text" wire:model="todo"> --}}
        {{-- <input type="text" wire:model.live.debounce="todo"> --}}
        {{-- <input type="text" wire:model.live.throttle.500ms="todo"> --}}
        <input type="text" wire:model.live.debounce.500ms="todo">
        {{-- <input type="text" wire:model.change="todo"> --}}
        {{-- <input type="text" wire:model.blur="todo"> --}}
        
        {{-- <span>Current todo: {{ $todo }}</span> --}}
        
        <button type="submit">Add</button>
    </form>
    
    
    <ul>
        @foreach($todos as $todo)
        <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>

@push('styles')
    <link rel="stylesheet" href="/css/todos.css">
@endpush


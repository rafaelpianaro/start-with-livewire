<div>
    <h2>New Post</h2>

    <!-- Exibe mensagem de sucesso -->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit="save">
    {{-- <form wire:submit.prevent="save"> --}}
        <label>
            <span>Title</span>
            <input type="text" wire:model="title">
            @error('title') <span>{{ $message }}</span>@enderror
        </label>

        <label>
            <span>Content</span>
            <textarea wire:model="content"></textarea>
            @error('content') <span>{{ $message }}</span>@enderror
        </label>

        <label>
            <span>Published</span>
            <input type="checkbox" wire:model="published">
        </label>

        <button type="submit">Save</button>
    </form>
</div>

@push('styles')
    {{-- <link rel="stylesheet" href="/css/post-create.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/post-create.css') }}">
@endpush
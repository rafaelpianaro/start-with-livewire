<div>
    <h2>Posts:</h2>

    <button wire:click="create">New Post</button>
    {{-- <button wire:click="redirectToCreate">New Post</button> --}}

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                {{-- <livewire:post-row wire:key="{{$post->id}}" :post="$post"> --}}
                <livewire:post-row :key="$post->id" :$post>
            @endforeach
        </tbody>
    </table>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/post-index.css') }}">
@endpush

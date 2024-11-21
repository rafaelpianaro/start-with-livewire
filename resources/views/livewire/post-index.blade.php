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
                <tr wire:key="{{$post->id}}">
                    <td>{{ $post->title }}</td>
                    <td>{{ str($post->content)->words(8) }}</td>
                    <td>
                        <button 
                        type="button" 
                        wire:click="delete({{ $post->id }})"
                        wire:confirm="Are you sure you want to delete this post with title: {{ $post->title }}?"
                        >
                        Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/post-index.css') }}">
@endpush

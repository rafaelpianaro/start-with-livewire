{{-- <tr @class(['archived', => $post->is_archived])> --}}
{{-- <tr {{ $post->is_archived }} > --}}
    <tr @class(['archived' => $post->is_archived])>
    <td>{{ $post->title }}</td>
    <td>{{ str($post->content)->words(8) }}</td>
    <td>
        {{-- @unless($post->is_archived)
            <button 
            type="button" 
            wire:click="archive"
            wire:confirm="Are you sure you want to arquive this post with title: {{ $post->title }}?"
            @class([
                'btn',
                'btn-archive' => !$post->is_archived
            ])
            >
                Arquive
            </button>
        @endunless --}}
        <button 
            type="button" 
            wire:click="archive"
            wire:confirm="Are you sure you want to archive this post with title: {{ $post->title }}?"
            @class([
                'btn',
                'btn-archive' => !$post->is_archived,
                'btn-unarchive' => $post->is_archived
            ])
        >
            {{ $post->is_archived ? 'Unarchive' : 'Archive' }}
        </button>

        <button 
            type="button" 
            wire:click="$parent.delete({{ $post->id }})"
            wire:confirm="Are you sure you want to delete this post with title: {{ $post->title }}?"
        >
            Delete
        </button>
    </td>
</tr>

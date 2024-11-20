<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]
class PostCrud extends Component
{

    public function delete(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        $posts = Post::latest()->get();
        // Log::info('postId', [
        //     'postId' => $posts[0]->id
        // ]);
        // dd($posts[0]->title);
        return view('livewire.post-crud', [
            'posts' => $posts,
        ]);
        // return view('livewire.post-crud', [
        //     'posts' => Post::latest()->get(),
        //     // 'posts' => Post::all(),
        // ]);
    }
}

<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Posts')]
class PostIndex extends Component
{

    public function delete(Post $post)
    {
        $post->delete();
    }

    public function create()
    {
        // return redirect()->route('posts.create');
        $this->redirect('/posts/create', navigate: true);
    }

    public function render()
    {
        $posts = Post::latest()->get();
        // Log::info('postId', [
        //     'postId' => $posts[0]->id
        // ]);
        // dd($posts[0]->title);
        return view('livewire.post-index', [
            'posts' => $posts,
        ]);
        // return view('livewire.post-crud', [
        //     'posts' => Post::latest()->get(),
        //     // 'posts' => Post::all(),
        // ]);
    }
}

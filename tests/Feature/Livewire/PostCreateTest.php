<?php

namespace Tests\Feature\Livewire;

use App\Livewire\PostCreate;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class PostCreateTest extends TestCase
{
    // use RefreshDatabase;

    /** @test */
    public function renders_successfully()
    {
        Livewire::test(PostCreate::class)
            // ->assertStatus(200);
            ->assertViewIs('livewire.post-create');
    }

    /** @test */
    public function can_create_new_post_and_delete_it()
    {
        // Criar um post
        Livewire::test(PostCreate::class)
            ->set('title', 'Some title')
            ->set('content', 'Some content')
            ->set('published', false)
            ->call('save');
            
            // Verifique que foi salvo
            $this->assertDatabaseHas('posts', [
                'title' => 'Some title',
                'content' => 'Some content',
                'published' => false,
        ]);

        // Apagar o post
        Post::whereTitle('Some title')->delete();
        // Post::where('title', 'Some title')->delete();

        // Verifique que foi apagado
        $this->assertDatabaseMissing('posts', [
            'title' => 'Some title',
        ]);
    }

    /** @test */
    public function title_is_required_and_minimum_length_is_six()
    {
        Livewire::test(PostCreate::class)
            ->set('title', '')
            ->call('save')
            ->assertHasErrors(['title' => 'required']);

        Livewire::test(PostCreate::class)
            ->set('title', 'short')
            ->call('save')
            ->assertHasErrors(['title' => 'min']);
    }
}

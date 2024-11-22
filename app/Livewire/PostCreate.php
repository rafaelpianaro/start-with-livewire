<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Posts Create')]
class PostCreate extends Component
{
    // #[Rule('required|string|max:255')]
    #[Rule('required', message: 'opss, esqueceu de adicionar o título')]
    #[Rule('min:6', message: 'opss, título muito curto')]
    public $title = '';
    
    // #[Rule('required')]
    public $content = '';
    
    public $published = false;
    public $archive = false;

    /**
     * Define as regras de validação.
     *
     * @return array
     */
    // protected function rules()
    // {
    //     return [
    //         'title' => 'required|string|max:255',
    //         'content' => 'required|string',
    //         'published' => 'boolean',
    //     ];
    // }

    /**
     * Mensagens personalizadas para validação.
     *
     * @return array
     */
    // protected function messages()
    // {
    //     return [
    //         'title.required' => 'O campo título é obrigatório.',
    //         'title.string' => 'O título deve ser um texto.',
    //         'title.max' => 'O título não pode ter mais de 255 caracteres.',
    //         'content.required' => 'O campo conteúdo é obrigatório.',
    //         'content.string' => 'O conteúdo deve ser um texto válido.',
    //     ];
    // }

    public function save()
    {
        // dd('saved');
        // Validação dos campos
        // $this->validate([
        //     'title' => 'required|string|max:25',
        //     'content' => 'required|string',
        // ]);
        // dd($this->validate());
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'is_published' => $this->published,
            'is_archive' => $this->archive,
        ]);

        session()->flash('message', 'Post created successfully.');
        $this->redirect('/posts', navigate: true);
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}

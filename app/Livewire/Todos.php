<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]
class Todos extends Component
{

    public $todo = '';

    public $todos = ['who cares'];

    public function updatedTodo($value)
    {
        $this->todo = strtoupper($value);
    }

    // public function updated($property, $value)
    // {
    //     // dd($property, $value);
    //     $this->$property = strtoupper($value);
    // }

    // public function mount()
    // {
    //     $this->todos = [
    //         'Take out trash',
    //         'Do dishes'
    //     ];

    //     $this->todo = 'Type todo here...';
    // }

    public function add()
    {
        $this->todos[] = $this->todo;

        // $this->todo = '';
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}

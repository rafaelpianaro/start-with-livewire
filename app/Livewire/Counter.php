<?php
 
namespace App\Livewire;
 
use Livewire\Component;
 
class Counter extends Component
{
    public $count = 0;
    public $errorMessage = '';
 
    public function increment()
    {
        $this->errorMessage = ''; // Limpa a mensagem de erro
        $this->count++;
    }
 
    public function decrement()
    {
        if ($this->count <= 0) {
            $this->errorMessage = 'Não é possível decrementar abaixo de zero.';
            return;
        }

        $this->errorMessage = ''; // Limpa a mensagem de erro
        $this->count--;
    }
 
    public function render()
    {
        return view('livewire.counter');
    }
}

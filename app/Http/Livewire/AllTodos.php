<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class AllTodos extends Component
{
    public $todos;

    public $listeners = ['todoAdded'];

    public function mount() {
        $this->todos = Todo::latest()->get();
    }

    public function todoAdded() {
        $this->todos = Todo::latest()->get();
    }

    public function render() {
        return view('livewire.all-todos');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AddTaskForm extends Component
{

    public $name;

    //  Validatie regels
 

    public function submitForm()
    {

        Task::create([
            'name' => $this->name,
        ]);

        $this->emit('refreshToDoList');
        
    }

    public function render()
    {
        return view('livewire.add-task-form');
    }

}

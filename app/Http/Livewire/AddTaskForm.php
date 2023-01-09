<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class AddTaskForm extends Component
{

    public $name;

    public function addTask()
    {

        $this->validate([
            'name' => 'required|string|min:3|max:36',
        ]);

        Task::create([
            'name' => $this->name,
        ]);

        $count = Task::count();
        
        // Bij alleen de eerste task wordt de pagina herverst, vanwege dat taskId alleen na het maken van de eerste task niet defined is na het herversen van de component.
        if ($count < 2)
        {
            return redirect()->to('/');
        }
        else
        {
            $this->emit('refreshToDoList');
        }
    }

    public function render()
    {
        return view('livewire.add-task-form');
    }

}

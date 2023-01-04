<?php

namespace App\Http\Livewire;
use App\Models\Task;

use Livewire\Component;

class TaskListToDo extends Component
{
    public function render()
    {
        return view('livewire.task-list-to-do', [
            'tasks' => Task::all()
        ]);
    }
}

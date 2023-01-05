<?php

namespace App\Http\Livewire;
use App\Models\Task;

use Livewire\Component;

class TaskListToDo extends Component
{
    public $showToDoTasks = true;

    public function render()
    {
        return view('livewire.task-list-to-do', [
            // Haalt alle To Do taken op
            'tasks' => Task::where('isDone', '=', 0)->get()
        ]);
    }
}

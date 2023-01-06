<?php

namespace App\Http\Livewire;
use App\Models\Task;
use Illuminate\Contracts\View\View;

use Livewire\Component;

class TaskListToDo extends Component
{
    protected $listeners = ['refreshToDoList' => '$refresh'];

    public $showToDoTasks = true;

    public function render(): View
    {
        return view('livewire.task-list-to-do', [
            // Haalt alle To Do taken op
            'tasks' => Task::where('isDone', '=', 0)->get()
        ]);
    }
}

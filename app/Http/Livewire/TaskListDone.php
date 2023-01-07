<?php

namespace App\Http\Livewire;
use App\Models\Task;

use Livewire\Component;

class TaskListDone extends Component
{
    protected $listeners = ['refreshDoneList' => '$refresh'];

    public function render()
    {
        return view('livewire.task-list-done', [
            // Haalt alle Done taken op
            'tasks' => Task::where('isDone', '=', 1)->get()
        ]);
    }
}


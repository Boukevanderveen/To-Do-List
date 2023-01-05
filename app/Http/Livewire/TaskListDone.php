<?php

namespace App\Http\Livewire;
use App\Models\Task;

use Livewire\Component;

class TaskListDone extends Component
{
    public function switch2()
    {
        $showToDoTasks = 1;

        $this->emit('refreshBase');

    }

    public function render()
    {
        return view('livewire.task-list-done', [
            // Haalt alle Done taken op
            'tasks' => Task::where('isDone', '=', 1)->get()
        ]);
    }
}


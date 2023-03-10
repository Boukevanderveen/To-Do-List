<?php

namespace App\Http\Livewire;
use App\Models\Task;
use Illuminate\Contracts\View\View;

use Livewire\Component;

class TaskListToDo extends Component
{
    public $show = false;
    public $selectedTask = 0;


    protected $listeners = ['refreshToDoList' => '$refresh'];
    

    public function render(): View
    {
    $selectedTask = 0;

        return view('livewire.task-list-to-do', [
            // Haalt alle To Do taken op
            'tasks' => Task::where('isDone', '=', 0)->get(),
        ]);
    }
    public function mount()
    {
    }

    public function setTaskDone($taskId)
    {
   
        Task::where('id', $taskId)->update(['isDone'=> '1']);

        $this->emit('refreshToDoList');

        $this->emit('refreshDoneList');

    }

    public function showDetails($taskId)
    {
        $this->emit('rerender', $taskId);
        $show = true;
    }

    public function hideDetails()
    {
        $selectedTask = 0;
    }

}

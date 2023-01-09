<?php

namespace App\Http\Livewire;
use App\Models\Task;
use App\Models\Photo;

use Livewire\Component;

class TaskListDone extends Component
{
    protected $listeners = ['refreshDoneList' => '$refresh'];

    public $selectedTask = 0;

    public $taskId;

    public function render()
    {
        return view('livewire.task-list-done', [
            // Haalt alle Done taken op
            'tasks' => Task::where('isDone', '=', 1)->get()
        ]);
    }

    public function setTaskToDo($taskId)
    {
        Task::where('id', $taskId)->update(['isDone'=> '0']);

        $this->emit('refreshToDoList');

        $this->emit('refreshDoneList');
        
    }

    public function deleteTask($taskId)
    {
        $task = Task::find($taskId);
        $task->delete();

        // Controleerd of de task een foto heeft en verwijderd de foto in dat geval

        if (Photo::where('id','=',$taskId)->exists())
        {
            $photo = Photo::find($taskId);
            $photo->delete();
        }

    
        $this->emit('refreshToDoList');

        $this->emit('refreshDoneList');

    }

}


<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use App\Models\Photo;
use Livewire\WithFileUploads;


use Illuminate\Contracts\View\View;

class TaskDetails extends Component
{
    protected $listeners = ['refreshDetailScreen' => '$refresh'];

    public $taskId;

    public $name;

    public $photo;

    use WithFileUploads; 
 
    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
 
        $this->photo->store('photos');
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

        // Herverst pagina om undefined variables error van de TaskDetails component te voorkomen
        return redirect()->to('/');

    }
    
    public function editTask($taskId, $name)
    {
        $this->validate([
            'name' => 'required|string|min:3|max:36',
        ]);

        Task::where('id', $taskId)->update(['name'=> $name]);

    }

    public function render()
    {
        return view('livewire.task-details', [
            'task' => Task::find($this->taskId),
            'image' => Photo::find($this->taskId),
        ]);
    }

    public function addPhoto($photo, $image)
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        //Verwijderd eventuele bestaande foto van de task

        if (Photo::where('id', '=', $this->taskId)->exists()) 
        {
            $targetPhoto = Photo::find($this->taskId);
            $targetPhoto->delete();
        }

        $url = $this->photo->store('images', 'public');

        Photo::create([
            'id' => $this->taskId,
            'filename' => $url
        ]);
    }
}



<div id="toDoTasksContainer">
    <table class="table" id="toDoTasksTable">

    @foreach($tasks as $task)
    <tbody style="background-color:rgb(255, 255, 157)">
        <tr>
          <td>
            {{$task->name}}
            <p style="display: none"> {{$taskId = $task->id}} </p>

            <button type="submit" class="taskPlusButton">+</button>
            
            <button wire:click="setTaskDone('{{$taskId}}')" class="taskCheckmarkButton">✓</button>
          </td>
        </tr>
      </tbody>
    @endforeach
</table>
</div>

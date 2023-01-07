<div id="doneTasksContainer">
    <table class="table" id="doneTasksTable">

    @foreach($tasks as $task)
    <tbody style="background-color:rgb(255, 255, 157)">
        <tr>
          <td class="doneTasksRow">
            {{$task->name}}
            <p style="display: none"> {{$taskId = $task->id}} </p>
            <button wire:click="setTaskToDo('{{$taskId}}')" class="taskBackArrowButton">←</button>
            <i class="taskPlusButton">+</i>
        </td>
        </tr>
      </tbody>
    @endforeach
</table>
</div>

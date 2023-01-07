<div id="doneTasksContainer">
    <table class="table" id="doneTasksTable">

    @foreach($tasks as $task)
    <tbody style="background-color:rgb(255, 255, 157)">
        <tr>
          <td class="doneTasksRow">
            {{$task->name}}
         
            <i class="taskPlusButton">+</i>
            <i class="taskBackArrowButton">←</i>
        </td>
        </tr>
      </tbody>
    @endforeach
</table>
</div>

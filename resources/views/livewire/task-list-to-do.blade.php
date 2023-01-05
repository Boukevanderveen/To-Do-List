<div id="toDoTasksContainer">
    <table class="table" id="toDoTasksTable">

    @foreach($tasks as $task)
    <tbody style="background-color:rgb(255, 255, 157)">
        <tr>
          <td>
            {{$task->name}}
         
            <i class="taskPlusClass">+</i>
            <i class="taskCheckmarkClass">✓</i>
        </td>
        </tr>
      </tbody>
    @endforeach
</table>
</div>

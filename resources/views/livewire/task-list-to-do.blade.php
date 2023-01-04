<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link rel="stylesheet" href="styling/style.css">

<div id="toDoTasksContainer">
    <table class="table" id="toDoTasksTable">

    @foreach($tasks as $task)
    <tbody style="background-color:rgb(255, 255, 157)">
        <tr>
          <td style = "position: relative;   text-decoration: line-through;">
            {{$task->name}}
         
            <i class="taskPlusClass">+</i>
            <i class="taskCheckmarkClass">✓</i>

        </td>
          

        </tr>
      
      </tbody>
    @endforeach
</table>
  
</div>

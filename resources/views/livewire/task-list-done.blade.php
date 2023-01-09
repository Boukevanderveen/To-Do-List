<div id="doneTasksContainer">
    <table class="table" id="doneTasksTable">

        @foreach ($tasks as $task)
            <tbody style="background-color:rgb(255, 255, 157)">
                <tr>
                    <td class="doneTasksRow">
                        {{ $task->name }}

                        <p style="display: none"> {{ $taskId = $task->id }} </p>
                        <button wire:click="setTaskToDo('{{ $taskId }}')" class="taskBackArrowButton">←</button>
                        <button wire:click="deleteTask('{{ $taskId }}')" class="taskPlusButton">x</button>

                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>
</div>

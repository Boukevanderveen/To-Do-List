<div id="toDoTasksContainer">
    <table class="table" id="toDoTasksTable">
        <button wire:click="$set('selectedTask', 0)" id="closeTaskDetailsButton">(Verberg details)</button>

        @foreach ($tasks as $task)
            <tbody style="background-color:rgb(255, 255, 157)">
                <tr>
                    <td id="{{ $task->id }}">
                        {{ $task->name }}

                        <p style="display: none"> {{ $taskId = $task->id }} </p>
                        <script>
                            taskId = {{ $taskId }}
                        </script>
                        <!-- Opent component task-details door selectedTask hoger dan 0 te maken -->
                        <button wire:click="$set('selectedTask', {{ $taskId }})" class="taskPlusButton">+</button>

                        <button wire:click="setTaskDone('{{ $taskId }}')" class="taskCheckmarkButton">✓</button>

                    </td>
                </tr>
            </tbody>
        @endforeach

        <!-- Wanneer selectedTask gelijk wordt gesteld aan taskId, betekent het ook gelijk dat selectedTask > 0 is en wordt de component gerendered.-->
        @if ($selectedTask > 0)
            @livewire('task-details', ['taskId' => $selectedTask])
        @else
            <!-- In de task-details component zijn de onderste elemented onzichtbaar gemaakt. Nu de component niet meer gerenderd is zijn ze weer nodig. -->
            <script>
                document.getElementById("toggleListButtons").style.display = "block";
            </script>
            <script>
                document.getElementById("addTaskFormButton").style.display = "block";
            </script>
        @endif

    </table>
    <script></script>
</div>

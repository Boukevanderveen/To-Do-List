<div id="detailScreenDiv">

    <!--Javascript code om specifieke elementen te verbergen/tonen voor het task detail scherm -->
    <script>
        document.getElementById("closeTaskDetailsButton").style.display = "block";
        document.getElementById("toggleListButtons").style.display = "none";
        document.getElementById("addTaskFormButton").style.display = "none";
        document.getElementById("addTaskFormDiv").style.display = "none";
    </script>
    <!-- Styling voor bepaalde elementen in hetzelfde bestand omdat met id's werken niet lukte -->

    <!-- (Her)upload voor fotos van de task-->
    <!-- De input type file zorgt ervoor dat de left position niet toegepast wordt -->
    <div style="position: absolute; top: 65%; left 30%">
        <input type="file" wire:model="photo">
        <button wire:click="addPhoto('{{ $photo }}', '{{ $image }}')">Bevestig</button>
        @error('photo')
            <span class="error">{{ $message }}</span>
        @enderror
    </div>

    <!-- Input en knop om tasknaam te bewerken -->
    <div style=" position: absolute; top: 75%; left: 40%;">
        <input type="text" wire:model="name">
        <button wire:click="editTask('{{ $taskId }}', '{{ $name }}')">Bevestig</button>
    </div>

    <!-- Display voor de tasknaam -->
    <p id="taskname" onclick="showEditTaskInput()">{{ $task->name }}</p>

    <!-- Display van de taskfoto -->
    <div id="taskPhotoDiv">

        <!-- Voorkomt undefined error door code niet te runnen als er geen afbeelding voor de task is -->
        @if (is_null($image))
            Nog geen foto!
        @else
            <img style="height: 100%; width: 100%" src=" {{ asset('/storage/' . $image->filename) }}"
                alt="Italian Trulli">
        @endif
    </div>

    <!-- Knop om de task te verwijderen -->
    <button class="fa fa-trash-o"
        style="position: absolute; right: 5%; top: 90%; font-size: 30px; padding: 0; border: none; background: none;"
        wire:click="deleteTask('{{ $taskId }}')"></button>
</div>
</div>

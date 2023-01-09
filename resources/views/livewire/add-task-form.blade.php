<div id="addTaskFormDiv">

    <button onclick="hideAddTaskForm()" id="closeAddTaskForm">x</button>
    
    <!-- Formulier voor task aanmaken -->
    <h1 id="addTaskFormTitle"> Voeg taak toe </h1>
    <form wire:submit.prevent="addTask">
        <input wire:model.lazy="name" type="text">
        @error('name')
            <span class="text-sm text-red-500">{{ $message }}</span>
        @enderror
        <button type="submit">Toevoegen</button>
    </form>
</div>

<div id="addTaskFormDiv">
    <button onclick="hideAddTaskForm()" id="closeAddTaskForm">x</button>
    <h1 id="addTaskFormTitle"> Voeg taak toe </h1>
    <form wire:submit.prevent="submitForm">
        <input wire:model.lazy="name" type="text" value="frfrf">
        @error('name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        <button type="submit">Toevoegen</button>
    </form>
</div>
<div id="addTaskFormDiv">
    <button onclick="hideAddTaskForm()" id="closeAddTaskForm">x</button>
    <h1 id="addTaskFormTitle"> Voeg taak toe </h1>
    <form wire:submit.prevent="submitForm">
        <input wire:model.lazy="name" type="text">
        <button type="submit">Toevoegen</button>
    </form>
</div>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styling/style.css">
    <script src="scriptfile.js"></script>

    <title>{{ config('app.name', '') }}</title>

    @livewireStyles


    @livewireScripts
</head>
</body>
<!-- Knop om het task toevoeg formulier te openen -->
<button id="addTaskFormButton" onclick="showAddTaskForm()">+</button>
<!-- Div met knoppen om tussen de 2 lijsten te wisselen -->
<div id="toggleListButtons">
    <button id="showToDoListButton" onclick="toggleListToDo()">To Do </button>
    <button id="showDoneListButton" onclick="toggleListDone()">Done </button>
</div>

</html>
@livewire('task-list-to-do')
@livewire('task-list-done')
@livewire('add-task-form')

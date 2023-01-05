<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styling/style.css">

    <title>{{ config('app.name', '') }}</title>

    @livewireStyles

@livewire('base')

@livewireScripts
</body>
    <button id="showToDoListButton" onclick="toggleListToDo()">To Do </button>
    <button id="showDoneListButton" onclick="toggleListDone()">Done </button>
</html>
@livewire('task-list-to-do')
@livewire('task-list-done')

<script>


function toggleListToDo()
{
    var toDoList = document.getElementById("toDoTasksContainer");
    var doneList = document.getElementById("doneTasksContainer");
    toDoList.style.display = "block";
    doneList.style.display = "none";
}

function toggleListDone()
{
    var toDoList = document.getElementById("toDoTasksContainer");
    var doneList = document.getElementById("doneTasksContainer");
    toDoList.style.display = "none";
    doneList.style.display = "block";
}

</script>
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

function showAddTaskForm()
{
    addTaskFormDiv.style.display = "block";
}

function hideAddTaskForm()
{
    addTaskFormDiv.style.display = "none";
}
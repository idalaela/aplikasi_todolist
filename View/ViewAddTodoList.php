<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "ADD TODO" . PHP_EOL;
    $todo = input("Todo  (x untuk batal)");

    if ($todo == "x"){
        echo "Batal menambah todolist" . PHP_EOL;
    } else {
        addTodoList($todo); 
        echo "TODO berhasil ditambahkan" . PHP_EOL;

    }


}

?>
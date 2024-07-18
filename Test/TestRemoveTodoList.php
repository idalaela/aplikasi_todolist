<?php
require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

addTodoList("ida");
addTodoList("Laela");
addTodoList("idut");
addTodoList("ndutt");

showTodoList();

removeTodoList(3);

showTodoList();

$success = removeTodoList(4);
var_dump($success);

showTodoList();
?>
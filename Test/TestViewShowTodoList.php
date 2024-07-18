<?php
require_once "View/ViewShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("Ida");
addTodoList("laela");
addTodoList("Programmer");
addTodoList("Pemula");

viewShowTodoList();
?>
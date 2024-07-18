<?php
/**
 * Menghapus todo di list
 */
function removeTodoList(int $number): bool
{
    global $todoList;

    if ($number > sizeof($todoList) || $number < 1) {
        return false;
    }
    
    for ($i = $number - 1; $i < sizeof($todoList) - 1; $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }
    
    unset($todoList[sizeof($todoList) - 1]);

    return true;
}
?>

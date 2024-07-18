<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $number = input("Nomor (x untuk batal)");

    if ($number == "x") {
        echo "Batal menghapus TODOLIST" . PHP_EOL;
    } else {
        $success = removeTodoList((int) $number);

        if ($success) {
            echo "Sukses menghapus TODOLIST nomor $number" . PHP_EOL;
        } else {
            echo "Gagal menghapus TODOLIST nomor $number" . PHP_EOL;
        }
    }
}
?>

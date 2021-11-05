<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO KE LIST" . PHP_EOL;

    $todo = input("Todo (3 untuk batal)");

    if ($todo == "3") {
        echo "Batal Menambah Todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}

<?php

/**
 * menampilkan todo ke list
 */

function showTodoList()
{
    global $todoList;

    echo "TODO LIST : " . PHP_EOL;

    if (is_null($todoList)) {
        echo "Tidak ada todo di list" . PHP_EOL;
    } else {
        foreach ($todoList as $number => $value) {
            echo "$number. $value";
        }
    }
}

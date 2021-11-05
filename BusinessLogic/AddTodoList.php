<?php

/**
 * Menambah Todo Ke List
 */
function addTodoList(string $todo)
{
    global $todoList;
    
    $number = is_null($todoList) ? 1 : sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}

<?php 

require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
require_once __DIR__ . "/../Model/TodoList.php";

addTodoList("belajar java");
addTodoList("belajar php");
addTodoList("belajar c++");

var_dump($todoList);

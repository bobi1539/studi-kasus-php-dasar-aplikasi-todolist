<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

function viewShowTodoList()
{

    while (true) {
        showTodoList();
        echo PHP_EOL;
        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "3. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");
        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "3") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "Sampai jumpa lagi" . PHP_EOL;
}

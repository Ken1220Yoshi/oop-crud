<?php
include '../classes/Books.php';
$book = new Book;
$id = $_GET['id'];

$book->updateBook($_POST,$id);
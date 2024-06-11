<?php
include '../classes/Books.php';
$book = new Book;
$id = $_GET['id'];

$book->deleteBook($id);
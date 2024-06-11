<?php

        include 'Connection.php';

            // inheretance
                // inherit
        class Book extends Connection{
            public function addBook($request){
                $name =$request['name'];
                $author = $request['author'];
                $genre = $request['genre'];

                $sql = "INSERT INTO books (name, author, genre) VALUES ('$name', '$author','$genre')";

                if($this->conn->query($sql)){
                    header('location: ../views/display.php');
                    exit;
                }else{
                    die('Error adding book'. $this->conn->error);
                }
            }

            public function  displaybooks(){

                $sql = "SELECT * FROM books";
    
                if($result = $this->conn->query($sql)){
                    return $result;
                }else{
                    die("Error retrieving book". $this->conn->error);
                }
            }

            public function getBook($id){
                $sql = "SELECT * FROM books WHERE id = '$id'";

                if($result = $this->conn->query($sql)){
                    $item = $result->fetch_assoc();
                    return $item;
                }else{
                    die("Error selecting book". $this->conn->error);
                }
               
            }

            public function updateBook($request,$id){
                $name =$request['name'];
                $author = $request['author'];
                $genre = $request['genre'];

                $sql = "UPDATE  books SET `name` = '$name', author = '$author', genre = '$genre'
                        WHERE id = '$id'";

                if($this->conn->query($sql)){
                    header('location: ../views/display.php');
                    exit;
                }else{
                    die('Error updating book'. $this->conn->error);
                }
            }

            public function deleteBook($id){
                $sql = "DELETE FROM books WHERE id = '$id' ";

                if($this->conn->query($sql)){
                    header("location: ../views/display.php");
                }else{
                    die("Error deleting book". $this->conn->error);
                }
            }
        }

        





?>
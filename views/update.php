<?php include 'layout/header.html' ;
    include '../classes/Books.php';

    $id = $_GET['id'];

    $books = new Book;
    $book = $books->getBook($id) ;
    // print_r($book);
?>

    <div class="card w-50 mx-auto mt-5 shadow">
        <div class="card-header">
            <p class="font-monospace">New Book</p>
        </div>
        <div class="card-body">
            <form action="../actions/update.php?id=<?= $book['id'];?>" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Title</label>
                    <input type="text" name="name" id="name" value="<?=$book['name'];?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label fw-bold">Author</label>
                    <input type="text" name="author" id="author" value="<?= $book['author'];?>" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label fw-bold">Genre</label>
                    <input type="text" name="genre" id="genre" value="<?= $book['genre'];?>" class="form-control">
                </div>

                
                <button type="submit" class="btn btn-primary px-5">Update</button>
                
            </form>
        </div>
    </div>





<?php include 'layout/footer.html' ?>
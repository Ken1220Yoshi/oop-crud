<?php
    
    include '../classes/Books.php';

   

    $books = new Book;
    

    




?>

<!doctype html>
<html lang="en">
    <head>
        <title>Display</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div
                class="table-responsive"
            >
                <table
                    class="table table-primary"
                >
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">author</th>
                            <th scope="col">Genre</th>
                            <th></th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($books->displaybooks() as $book):

                        ?>
                        <tr class="">
                            <td scope="row"><?= $book['id'];?></td>
                            <td><?= $book['name'];?></td>
                            <td><?= $book['author'];?></td>
                            <td><?= $book['genre'];?></td>
                            <td><a href="update.php?id=<?=$book['id']?>" class="btn btn-primary">UPDATE</a></td>
                            <td>
                                <form action="../actions/delete.php?id=<?=$book['id'];?>" method="post">
                                <button type="submit" class="btn btn-danger px-5">DELETE</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                            endforeach;
                        ?>
                        
                    </tbody>
                </table>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

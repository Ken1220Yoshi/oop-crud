<?php include 'layout/header.html' ?>

    <div class="card w-50 mx-auto mt-5 shadow">
        <div class="card-header">
            <p class="font-monospace">New Book</p>
        </div>
        <div class="card-body">
            <form action="../actions/create.php" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Title</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label fw-bold">Author</label>
                    <input type="text" name="author" id="author" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label fw-bold">Genre</label>
                    <input type="text" name="genre" id="genre" class="form-control">
                </div>

                
                <button type="submit" class="btn btn-primary px-5">Add</button>
            </form>
        </div>
    </div>





<?php include 'layout/footer.html' ?>
<?php

require 'function.php';

if(isset($_POST['todo_submit']))
{
  createTodo($_POST);
}

?>
<!doctype html>
<html lang="">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

    <title>Todo List</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="card">
            <div class="card-header">
              <h2>My Todo List</h2>
            </div>
            <div class="card-body">
              <form action="index.php" method="post">
                <div class="mb-3">
                  <label for="exampleInputEmail1">Todo</label>
                  <input type="text" class="form-control" name="todo" id="exampleInputEmail1" placeholder="Enter your todo">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Todo Time</label>
                  <input type="date" class="form-control" id="exampleInputPassword1" name="todo_time">
                </div>
                <button type="submit" name="todo_submit" class="btn btn-primary">OK</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
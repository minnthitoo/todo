<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="card">
    <h2>TODO Home Page</h2>
    <div>
      <a href="add.php" class="btn btn-success">Create New</a>
    </div>
    <br>
    <div class="card-body">
      <table class="table table-striped">
        <thead>
          <th>ID</th>
          <th>Title</th>
          <th>Description</th>
          <th>Created At</th>
          <th>Action</th>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Hello</td>
            <td>Description</td>
            <td>created</td>
            <td>
              <a class="btn btn-warning" href="edit.php">Edit</a>
              <a class="btn btn-danger" href="#">Delete</a>
          </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>
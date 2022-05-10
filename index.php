<?php
  require 'config.php';
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
  <?php
    $stagement = $pdo->prepare('select * from todo order by id desc;');
    $stagement->execute();
    $result = $stagement->fetchAll();
  ?>
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
            <?php
            $i = 1;
              if($result){
                foreach($result as $value){
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $value['title']; ?></td>
                  <td><?php echo $value['description']; ?></td>
                  <td><?php echo $value['created_at'] ?></td>
                  <td>
                    <a href="edit.php?id=<?php echo $value['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php
                $i++;
                }
              }
            ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

</html>
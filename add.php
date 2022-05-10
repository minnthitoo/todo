<?php

  require 'config.php';

  if($_POST){
    $title = $_POST['title'];
    $description = $_POST['description'];

    $sql = "insert into todo(title, description) values (:title, :description);";
    $statement = $pdo->prepare($sql);
    $result = $statement->execute(
      array(
        ':title'=> $title,
        ':description'=>$description
      )
    );
    if($result){
      echo "<script>alert('insert successfully'); window.location.href='index.php';</script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Add New</title>
</head>

<body>
  <div class="card">
    <h2>Create New TODO</h2>
    <div class="card-body">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="" class="form-control">
        </div>
        <div class="form-group mt-3">
          <label for="description">Description</label>
          <textarea name="description" rows="10" class="form-control"></textarea>
        </div>
        <div class="mt-3">
          <input type="submit" class="btn btn-primary" value="Submit">
          <a href="index.php" class="btn btn-default">Back</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
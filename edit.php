<?php

require 'config.php';

if ($_POST) {

  $id = $_POST['id'];
  $title = $_POST['title'];
  $description = $_POST['description'];

  $sql = "update todo set title = :title, description = :description where id = :id;";
  $stmt = $pdo->prepare($sql);
  $res = $stmt->execute(
    array(
      ':id' => $id,
      ':title' => $title,
      ':description' => $description
    )
  );
  if($res){
    echo("<script>alert('Success'); window.location.href='index.php';</script>");
  }

} else {
  $statement = $pdo->prepare('select * from todo where id = ' . $_GET["id"]);
  $statement->execute();
  $result = $statement->fetchAll();
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
    <h2>Edit TODO</h2>
    <div class="card-body">
      <form action="<?php ?>" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" id="" value="<?php echo $result[0]['title']; ?>" class="form-control">
        </div>
        <div class="form-group mt-3">
          <label for="description">Description</label>
          <textarea name="description" rows="10" class="form-control"><?php echo $result[0]['description']; ?></textarea>
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
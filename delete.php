<?php

  require 'config.php';

  $statement = $pdo->prepare('delete from todo where id='.$_GET['id']);
  $result = $statement->execute();
  if($result){
    echo("<script>alert('Success'); window.location.href='index.php';</script>");
  }

?>
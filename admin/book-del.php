<?php
  include("confs/config.php");

  $id = $_GET['id'];
  $sql = "DELETE FROM books WHERE id = $id";
  mysql_query($sql);

  header("location: book-list.php");
?>

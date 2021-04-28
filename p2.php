<?php include_once "navBar.php";
session_start();
if (isset($_POST["back"]) && $_POST["back"]=="back") {
    header("Location: ". $_SESSION["PriorPage"] ."");
    $_POST["back"]=="";
}else {
  $_SESSION["PriorPage"] = $_SESSION["CurrentPage"];
  $_SESSION["CurrentPage"] = "p2.php";
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
        <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <p>
      Mr and Mrs Dursley, of number four, Privet Drive, were
proud to say that they were perfectly normal, thank
you very much. They were the last people you’d expect to be
involved in anything strange or mysterious, because they just
didn’t hold with such nonsense.
    </p>
        <?php  include_once "backButton.php"?>
  </body>
</html>

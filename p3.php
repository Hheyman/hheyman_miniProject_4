<?php include_once "navBar.php";
session_start();
if (isset($_POST["back"]) && $_POST["back"]=="back") {
    header("Location: ". $_SESSION["PriorPage"] ."");
    $_POST["back"]=="";
}else {
  $_SESSION["PriorPage"] = $_SESSION["CurrentPage"];
  $_SESSION["CurrentPage"] = "p3.php";
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
      Tell me, Muse, of the man of many ways, who was driven far journeys, after he had sacked Troy's secret citadel. Many were they whose cities he saw, whose minds he learned of, many the pains he suffered on his spirit on the wide sea, struggling for his own life and the homecoming of his companions
    </p>
        <?php  include_once "backButton.php"?>
  </body>
</html>

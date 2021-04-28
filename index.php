<!DOCTYPE html>
<?php include_once "navBar.php";
  session_start();
    if (isset($_POST["back"]) && $_POST["back"]=="back") {
        header("Location: ". $_SESSION["PriorPage"] ."");
        $_POST["back"]=="";
    }else {
      $_SESSION["PriorPage"] = $_SESSION["CurrentPage"];
      $_SESSION["CurrentPage"] = "index.php";
    }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <p>
      It began with the forging of the Great Rings. Three were given to the Elves, immortal, wisest and fairest of all beings. Seven to the Dwarf-Lords, great miners and craftsmen of the mountain halls. And nine, nine rings were gifted to the race of Men, who above all else desire power. For within these rings was bound the strength and the will to govern each race. But they were all of them deceived, for another ring was made. Deep in the land of Mordor, in the Fires of Mount Doom, the Dark Lord Sauron forged a master ring, and into this ring he poured his cruelty, his malice and his will to dominate all life.
    </p>
    <?php  include_once "backButton.php"?>
  </body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Indispensable : Adj, qui est tr&egrave;s n&eacute;cessaire, dont on ne peut se passer
    </title>
    <link rel="stylesheet" href="../../css/part.css">
  </head>

  <body>
    <center>
      <?php
        define('__ROOT__', dirname(dirname(__FILE__)));
        require_once(__ROOT__.'/partoches.php');

        $songs = loadPartList(__ROOT__."/indispensables.csv");
        $songs = array_merge($songs, loadPartList(__ROOT__."/nouveaux.csv"));
        $songId = isset($_POST["song"]) ? $_POST["song"] : FALSE;
        $instru = isset($_POST["instru"]) ? $_POST["instru"] : FALSE;
      ?>
      <form action="download.php" method="post">
      <?php

        songSelection($songs, $songId, $instru);
      ?>
        <input type="submit" value="GO">
      </form>
      <div class=menu>
        <a class=menuEntry href="../index.htm">Le morceau que vous cherchez n'est pas l&agrave;</a>
        <a class=menuEntry href="../nouveaux.php">Les nouveaut&eacute;s</a>
        <a class=menuEntry href="http://krapolyon.free.fr">Aller sur le site public krapo</a>
      </div>
    </center>
  </body>
</html>

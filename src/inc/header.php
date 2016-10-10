<!DOCTYPE html>
<html>

<head>
  <!-- accueil / carou / vid : comment gérer via boot ? superposition z axis ? -->

  <meta http-equiv="Content-type" content="text/html" charset="utf-8" />

  <?php
    include_once 'links.php';
  ?>
  <title><?php echo $pageTitle; ?> </title>

</head>


<body>
  <header>
  <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../public/index.php">Je donne 2 heures</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="../src/jedonne.php">Je donne</a></li>
          <li><a href="../src/jepropose.php">Je propose</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right nav-social">
          <li><a href="../src/aboutus.php">Contactez-nous</a></li>
          <li><a href="https://www.facebook.com/jedonne2H/" onclick="window.open(this.href); return false;"><img src="../public/img/facebook.png" alt=""></a></li>
          <li><a href="https://twitter.com/jedonne2h" onclick="window.open(this.href); return false;"><img  src="../public/img/twitter.png" alt=""></a></li>
          <li><a href="https://fr.linkedin.com/in/jd-2h-45318312b" onclick="window.open(this.href); return false;"><img  src="../public/img/linkedin.png" alt=""></a></li>
        </ul>
      </div>
    </div>
  </nav>
  </header>

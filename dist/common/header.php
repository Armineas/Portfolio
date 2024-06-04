<?php
$pagecourante = 'index';
if (isset($_POST['page'])) {
  switch ($_POST['page']) {
    case 'index':
      $pagecourante = 'index';
      break;
    case 'about':
      $pagecourante = 'about';
      break;
    case 'work':
      $pagecourante = 'work';
      break;
    case 'contact':
      $pagecourante = 'contact';
      break;
  }
}
?>

<html>
<?php
if ($pagecourante == 'index') {
  echo '<header id="header-home">';
} else {
  echo '<header id="header-inner">';
}
?>
<div class="container">
  <nav id="main-nav">
    <img src="img/logo.png" alt="Mon Portfolio" id="logo" />
    <ul>
      <li><a href="index.php" <?php
                              if ($pagecourante == 'index') {
                                echo 'class="current"';
                              }
                              ?>>Accueil</a></li>
      <li><a href="about.php" <?php
                              if ($pagecourante == 'about') {
                                echo 'class="current"';
                              }
                              ?>>À Propos</a></li>
      <li><a href="work.php" <?php
                              if ($pagecourante == 'work') {
                                echo 'class="current"';
                              }
                              ?>>Travaux</a></li>
      <li><a href="contact.php" <?php
                                if ($pagecourante == 'contact') {
                                  echo 'class="current"';
                                }
                                ?>>Contact</a></li>
    </ul>
  </nav>
  <?php
  if ($pagecourante == 'index') {
    echo '<div class="header-content">
      <h1>Kévin, <span class="txt-type" data-wait="3000" data-words=\'["Développeur Web", "Designer UX/UI"]\'></span></h1>
      <p class="lead">Spécialiste dans le développement Web et le design UX/UI</p>
      <a href="work.html" class="btn-light">Voir Mon Travail</a>
    </div>';
  } ?>
</div>
</header>

</html>
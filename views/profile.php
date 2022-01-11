<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../style/profile_style.css">
  <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="stylesheet" type="text/css" href="../style/book_style.css">

  <script src="https://kit.fontawesome.com/95f48b9c6d.js" crossorigin="anonymous"></script>
  <title>Mon profile</title>
</head>

<body>
  <div class="container_profile">
    <div class="informations-bar">
      <ul>
        <li class="active li">Informations</li>
        <li class="li">Mes recettes</li>
        <li class="li">Recettes enregistrées</l>
      </ul>

      <div class="profile">
        <img src="./images/logo/cookie.jpg">
        <p class="name">@Cha</p>
      </div>
    </div>
  </div>

  <div class="content_profile">
    <?php
      include "./includes/book.php";
    ?>
  </div>
</body>
</html>
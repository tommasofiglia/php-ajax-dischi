<?php
  include __DIR__ . '/../database/db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi con php</title>
    <link rel="stylesheet" href="../dist/css/app.css">
  </head>
  <body>

    <!-- Start Navbar -->
    <nav>
      <div class="container">
        <img src="../dist/img/spotify-logo.png" alt="">
      </div>
    </nav>
    <!-- End navbar -->

    <!-- Start main -->
    <main>
      <div class="container padding-top-20">

        <?php foreach ($database_songs as $song){ ?>
        <div class="card margin-left-35 margin-right-35 margin-top-70">

            <img src="<?php echo $song['poster']; ?>" alt="">
            <h4 class="titolo fs-18"> <?php echo $song['title']; ?> </h4>
            <h5 class="autore fs-15 margin-top-10"> <?php echo $song['author']; ?> </h5>
            <h5 class="anno"> <?php echo $song['year']; ?> </h5>

        </div>
        <?php } ?>

      </div>
    </main>
    <!-- End main -->
    
  </body>
</html>

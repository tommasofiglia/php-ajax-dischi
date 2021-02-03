<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi con php</title>
    <link rel="stylesheet" href="../dist/css/app.css">
  </head>
  <body>

    <div id="app">

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

          <div class="card margin-left-35 margin-right-35 margin-top-70" v-for="song in songs">
            <img :src="song.poster" alt="">
            <h4 class="titolo fs-18">{{song.title}}</h4>
            <h5 class="autore fs-15 margin-top-10">{{song.author}}</h5>
            <h5 class="anno">{{song.year}}</h5>
          </div>

        </div>
      </main>
      <!-- End main -->

    </div>


    <!-- Script Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Script vueJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <!-- Script Javascript -->
    <script type="text/javascript" src="../src/app.js"></script>

  </body>
</html>

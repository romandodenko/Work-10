<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Hotel Testa to jeden z największych i najlepszych hoteli.">
  <meta property="og:site_name"
    content="Nowo otwarty Hotel Testa oferuje nowoczesne i stylowe pokoje, w których panuje przytulna i relaksująca atmosfera. W pokojach jest wszystko co potrzebne do komfortowego pobytu">
  <meta name="twitter:title" content="Hotel Testa to jeden z największych i najlepszych hoteli.">
  <meta name="twitter:description"
    content="Nowo otwarty Hotel Testa oferuje nowoczesne i stylowe pokoje, w których panuje przytulna i relaksująca atmosfera. W pokojach jest wszystko co potrzebne do komfortowego pobytu">
  <meta name="description"
    content="Nowo otwarty Hotel Testa oferuje nowoczesne i stylowe pokoje, w których panuje przytulna i relaksująca atmosfera. W pokojach jest wszystko co potrzebne do komfortowego pobytu">
  <title>Hotel Testa to jeden z największych i najlepszych hoteli.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Baskervville-Italic.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Newsreader-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start contacts -->
      <section class="contacts rd-upload">
        <div class="container">
          <div class="contacts__top">
            <div class="head">
              <h1 class="head__title tt-64-40">
                Łączność
              </h1>
              <div class="head__subtitle tx-22">
                Wypełnić formularz
              </div>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Nazwa..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
              </div>
              <button class="form__button but" type="submit">
                Wysłać
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <h2 class="contacts__title tt-53-36">
              Mapa i kontakty
            </h2>
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2320.324430751989!2d18.57411457722067!3d54.43955989236777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd0aecdd93e8ab%3A0x50ad7fe50aad65a7!2sJana%20Kili%C5%84skiego%2011%2C%2081-772%20Sopot%2C%20Poland!5e0!3m2!1sen!2sen!4v1701942779986!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <img src="." data-rd-image="./img/geo.svg" data-rd-image-webp="./img/geo.svg" width="32" height="32"
                    alt="Geo icon">
                  Sopot, Jana Kilińskiego 11
                </li>
                <li class="contacts__info-item tx-17">
                  <img src="." data-rd-image="./img/phone.svg" data-rd-image-webp="./img/phone.svg" width="32"
                    height="32" alt="Phone icon">
                  <a href="tel:+48722221216">
                    +48 722 22 12 16
                  </a>
                </li>
              </ul>
            </address>
          </div>
        </div>
      </section>
      <!-- end contacts -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Hotel Nobu Warsaw jest jednym z najlepszych i zajmuje wysoką pozycję.">
  <meta property="og:site_name"
    content="Hotel ten jest częścią znanej na całym świecie marki restauracji Nobu, która gwarantuje wyjątkową jakość i luksus we wszystkich swoich usługach i udogodnieniach.">
  <meta name="twitter:title" content="Hotel Nobu Warsaw jest jednym z najlepszych i zajmuje wysoką pozycję.">
  <meta name="twitter:description"
    content="Hotel ten jest częścią znanej na całym świecie marki restauracji Nobu, która gwarantuje wyjątkową jakość i luksus we wszystkich swoich usługach i udogodnieniach.">
  <meta name="description"
    content="Hotel ten jest częścią znanej na całym świecie marki restauracji Nobu, która gwarantuje wyjątkową jakość i luksus we wszystkich swoich usługach i udogodnieniach.">
  <title>Hotel Nobu Warsaw jest jednym z najlepszych i zajmuje wysoką pozycję.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/HelveticaNeueCyr-Roman.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Raleway-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./resources/swiper/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <script src="./resources/swiper/swiper.js"></script>
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
            <h1 class="contacts__title tt-53-36">
              Łączność
            </h1>
            <div class="contacts__top-bottom">
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <label class="form__label" for="text">
                    <span class="tx-17">
                      Wpisz swoje imię
                    </span>
                    <input class="form__input input" type="text" name="text" id="text" placeholder="Nazwa..." required>
                  </label>
                  <label class="form__label" for="email">
                    <span class="tx-17">
                      Wprowadź swój email...
                    </span>
                    <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..."
                      required>
                  </label>
                </div>
                <button class="form__button but" type="submit">
                  Wysłać
                </button>
              </form>
              <div class="contacts__texts">
                <p class="contacts__text tx-17">
                  Wypełnij formularz, a my skontaktujemy się z Tobą w celu omówienia wszystkich szczegółów. Nasi
                  menedżerowie są zawsze gotowi odpowiedzieć na wszystkie Twoje pytania
                </p>
              </div>
            </div>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.1147461259266!2d21.00557877712319!3d52.223133058165814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471eccec43b79d47%3A0xc681111e3b6ce705!2sWilcza%2073%2C%2000-670%20Warszawa%2C%20Poland!5e0!3m2!1sen!2sen!4v1701948684438!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <span class="tx-22">
                    Adres
                  </span>
                  Warszawa, ul. Wilcza 73
                </li>
                <li class="contacts__info-item tx-17">
                  <span class="tx-22">
                    Telefon
                  </span>
                  <a href="tel:+48225518888">
                    +48 22 551 88 88
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
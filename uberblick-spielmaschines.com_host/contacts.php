<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Das Fairmont Hotel Vier Jahreszeiten ist der Inbegriff von Luxus und Eleganz.">
  <meta property="og:site_name"
    content="Die Kombination aus bestem Service und erstaunlicher Gastfreundschaft macht es zu einem unvergleichlichen Urlaubsziel. Hier können die Gäste die modernsten Einrichtungen genießen.">
  <meta name="twitter:title" content="Das Fairmont Hotel Vier Jahreszeiten ist der Inbegriff von Luxus und Eleganz.">
  <meta name="twitter:description"
    content="Die Kombination aus bestem Service und erstaunlicher Gastfreundschaft macht es zu einem unvergleichlichen Urlaubsziel. Hier können die Gäste die modernsten Einrichtungen genießen.">
  <meta name="description"
    content="Die Kombination aus bestem Service und erstaunlicher Gastfreundschaft macht es zu einem unvergleichlichen Urlaubsziel. Hier können die Gäste die modernsten Einrichtungen genießen.">
  <title>Das Fairmont Hotel Vier Jahreszeiten ist der Inbegriff von Luxus und Eleganz.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/PlayfairDisplay-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/PlayfairDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <h1 class="contacts__title tt-53-46">
            Kontakte
          </h1>
          <div class="contacts__top">
            <div class="contacts__texts">
              <p class="contacts__text tx-22">
                Füllen Sie das Formular aus und wir werden uns mit Ihnen in Verbindung setzen, um alle Details zu
                besprechen.
              </p>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Email..." required>
              </div>
              <button class="form__button but" type="submit">
                Schicken
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.141736394229!2d9.988720377181338!3d53.55523725907266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b18f1904b06231%3A0x8df405b9078de44e!2sNeuer%20Jungfernstieg%207%2C%2020354%20Hamburg%2C%20Germany!5e0!3m2!1sen!2sen!4v1700724833214!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <img src="." data-rd-image="./img/geo.svg" data-rd-image-webp="./img/geo.svg" width="32" height="32"
                    alt="Icon">
                  Neuer Jungfernstieg, 7, Stadt Hamburg, Hamburg
                </li>
                <li class="contacts__info-item tx-17" >
                  <img src="." data-rd-image="./img/mail.svg" data-rd-image-webp="./img/mail.svg" width="32" height="32"
                    alt="Icon">
                  <a href="mailto:uberblick-spielmaschines@gmail.com">
                    uberblick-spielmaschines@gmail.com
                  </a>
                </li>
                <li class="contacts__info-item tx-17">
                  <img src="." data-rd-image="./img/phone.svg" data-rd-image-webp="./img/phone.svg" width="32"
                    height="32" alt="Icon">
                  <a href="tel:+494034942600">
                    +49 (40) 3494-2600
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
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Rocco Forte Das Charles Hotel ist ein hoch bewertetes Hotel, das Komfort bietet">
  <meta property="og:site_name"
    content="Das Charles Hotel liegt ideal im historischen Stadtzentrum und ermöglicht seinen Gästen einen einfachen und bequemen Zugang zu zahlreichen Sehenswürdigkeiten und kulturellen Veranstaltungen.">
  <meta name="twitter:title" content="Rocco Forte Das Charles Hotel ist ein hoch bewertetes Hotel, das Komfort bietet">
  <meta name="twitter:description"
    content="Das Charles Hotel liegt ideal im historischen Stadtzentrum und ermöglicht seinen Gästen einen einfachen und bequemen Zugang zu zahlreichen Sehenswürdigkeiten und kulturellen Veranstaltungen.">
  <meta name="description"
    content="Das Charles Hotel liegt ideal im historischen Stadtzentrum und ermöglicht seinen Gästen einen einfachen und bequemen Zugang zu zahlreichen Sehenswürdigkeiten und kulturellen Veranstaltungen.">
  <title>Rocco Forte Das Charles Hotel ist ein hoch bewertetes Hotel, das Komfort bietet</title>
  <link rel="icon" href="./img/favicon.png" type="image/x-icon">
  <link rel="preload" href="./fonts/HelveticaNeueCyr-Roman.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Raleway-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page page_change">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start contacts -->
      <section class="contacts rd-upload">
        <div class="contacts__container container">
          <div class="contacts__left">
            <h1 class="contacts__title tt-53-36">
              Kontakte
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-22">
                Fülle das Formular aus
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
          <div class="contacts__right">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2500.3757986180035!2d6.444372877057131!3d51.193726733569136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8ac943b0a4efd%3A0xd86a617b25433a85!2sSophienstra%C3%9Fe%2028%2C%2041065%20M%C3%B6nchengladbach%2C%20Germany!5e0!3m2!1sen!2sen!4v1702633901344!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <span>
                    Adresse
                  </span>
                  Sophienstraße 28, Mönchengladbach
                </li>
                <li class="contacts__info-item tx-17">
                  <span>
                    Telefon
                  </span>
                  <a href="tel:+491805123380">
                    +49 (180) 512-3380
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
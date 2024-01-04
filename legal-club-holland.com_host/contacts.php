<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="W Amsterdam is een van de gloednieuwe en allereerste hotels van Nederland.">
  <meta property="og:site_name"
    content="Het W Amsterdam hotel opende onlangs haar deuren en heeft nu al een hoge waardering gekregen. Het biedt een combinatie van de meest geavanceerde technologie en innovatief design.">
  <meta name="twitter:title" content="W Amsterdam is een van de gloednieuwe en allereerste hotels van Nederland.">
  <meta name="twitter:description"
    content="Het W Amsterdam hotel opende onlangs haar deuren en heeft nu al een hoge waardering gekregen. Het biedt een combinatie van de meest geavanceerde technologie en innovatief design.">
  <meta name="description"
    content="Het W Amsterdam hotel opende onlangs haar deuren en heeft nu al een hoge waardering gekregen. Het biedt een combinatie van de meest geavanceerde technologie en innovatief design.">
  <title>W Amsterdam is een van de gloednieuwe en allereerste hotels van Nederland.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/HelveticaNeueCyr-Roman.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Raleway-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
          <div class="contacts__item">
            <h1 class="contacts__title tt-53-34">
              Contacten
            </h1>
            <div class="contacts__content contacts__content_grid">
              <div class="contacts__left">
                <div class="contacts__texts">
                  <p class="contacts__text tx-22">
                    Vul het formulier in en wij nemen contact met u op om al uw vragen te beantwoorden
                  </p>
                </div>
              </div>
              <div class="contacts__wrapper-form">
                <form class="form" action="#!" name="form" autocomplete="off">
                  <label class="form__label" for="email">
                    <span class="tx-17">
                      Vul uw naam in
                    </span>
                    <input class="form__input input" type="email" name="email" id="email" required>
                  </label>
                  <label class="form__label" for="text">
                    <span class="tx-17">
                      Voer uw e-mailadres in
                    </span>
                    <input class="form__input input" type="text" name="text" id="text" required>
                  </label>
                  <button class="form__button but but_border" type="submit">
                    Versturen
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="contacts__item">
            <h2 class="contacts__title tt-53-34">
              Kaart
            </h2>
            <div class="contacts__content">
              <div class="contacts__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.8730745978773!2d4.887122977129615!3d52.372721447122615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c6afda0941%3A0x363a72bfc0b5049e!2sSpuistraat%20175%2C%201012%20VN%20Amsterdam%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1701417979466!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <address class="contacts__address">
                <ul class="contacts__list">
                  <li class="contacts__list-item tx-17">
                    <span class="tx-22">
                      Adres 
                    </span>
                    Spuistraat 175, Amsterdam
                  </li>
                  <li class="contacts__list-item tx-17">
                    <span class="tx-22">
                      Telefoon
                    </span>
                    <a href="tel:+31208112500"> 
                      +31 2081 125 00
                    </a>
                  </li>
                </ul>
              </address>
            </div>
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
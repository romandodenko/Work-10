<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Waldorf Astoria Amsterdam is een van de meest luxueuze en prestigieuze hotels.">
  <meta property="og:site_name"
    content="Het hotel biedt gasten een breed scala aan luxe kamers en suites. Elke kamer is uitgerust met moderne voorzieningen en biedt een prachtig uitzicht op de grachten of het plein van de stad.">
  <meta name="twitter:title" content="Waldorf Astoria Amsterdam is een van de meest luxueuze en prestigieuze hotels.">
  <meta name="twitter:description"
    content="Het hotel biedt gasten een breed scala aan luxe kamers en suites. Elke kamer is uitgerust met moderne voorzieningen en biedt een prachtig uitzicht op de grachten of het plein van de stad.">
  <meta name="description"
    content="Het hotel biedt gasten een breed scala aan luxe kamers en suites. Elke kamer is uitgerust met moderne voorzieningen en biedt een prachtig uitzicht op de grachten of het plein van de stad.">
  <title>Waldorf Astoria Amsterdam is een van de meest luxueuze en prestigieuze hotels.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Gotu-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
        <div class="contacts__container container">
          <div class="contacts__left">
            <h1 class="contacts__title tt-53-36">
              Contacten
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-22">
                Vul het formulier in en reserveer uw kamer
              </p>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Naam..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
              </div>
              <button class="form__button but" type="submit">
                Versturen
              </button>
            </form>
          </div>
          <div class="contacts__right">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.3212861148313!2d4.894004677129317!3d52.364594047723216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6099506c7d631%3A0x49b09e57e8bedc12!2sHerengracht%20542%2C%201017%20CG%20Amsterdam%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1701424697084!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  Herengracht, 542, Amsterdam
                </li>
                <li class="contacts__info-item tx-17">
                  <a href="tel:+31207184600">
                    +31 20 718 46 00
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
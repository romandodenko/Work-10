<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="The first steps towards mastery, the first acquaintance with various dance styles">
  <meta property="og:site_name"
    content="A dance school is a place where hot passions, the very first emotions and the best skills of dance art are united in a single impulse of creativity and self-expression.">
  <meta name="twitter:title"
    content="The first steps towards mastery, the first acquaintance with various dance styles">
  <meta name="twitter:description"
    content="A dance school is a place where hot passions, the very first emotions and the best skills of dance art are united in a single impulse of creativity and self-expression.">
  <meta name="description"
    content="A dance school is a place where hot passions, the very first emotions and the best skills of dance art are united in a single impulse of creativity and self-expression.">
  <title>The first steps towards mastery, the first acquaintance with various dance styles</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/DMSerifDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Poly-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
            <h1 class="contacts__title tt-53-36">
              Contacts
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-22">
                Fill the form
              </p>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
              </div>
              <button class="form__button but" type="submit">
                Send
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.9832824110363!2d-75.68576072315432!3d45.42983833572972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce05052504d449%3A0x55270f9873f2c742!2sRideau%20St%2C%20Ottawa%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sen!4v1702450539848!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <div class="contacts__icon">
                    <img src="." data-rd-image="./img/geo.svg" data-rd-image-webp="./img/geo.svg" width="24" height="24"
                      alt="Icon geo"> 
                  </div>
                  Ottawa, Rideau Street
                </li>
                <li class="contacts__info-item tx-17">
                  <div class="contacts__icon">
                    <img src="." data-rd-image="./img/phone.svg" data-rd-image-webp="./img/phone.svg" width="24"
                      height="24" alt="Icon phone">
                  </div>
                  <a href="tel:+16135671830">
                    +1 613 567 1830
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
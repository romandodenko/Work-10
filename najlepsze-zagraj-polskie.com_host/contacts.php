<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Rezydent Sopot to luksusowe miejsce cieszące się dobrą opinią i wysoką oceną.">
  <meta property="og:site_name"
    content="Hotel jest jednym z najlepszych w kraju i oferuje idealne połączenie elegancji, komfortu i najwyższej klasy obsługi. Rezydent Sopot MGallery Hotel Collection położony jest w kurorcie Sopot.">
  <meta name="twitter:title" content="Rezydent Sopot to luksusowe miejsce cieszące się dobrą opinią i wysoką oceną.">
  <meta name="twitter:description"
    content="Hotel jest jednym z najlepszych w kraju i oferuje idealne połączenie elegancji, komfortu i najwyższej klasy obsługi. Rezydent Sopot MGallery Hotel Collection położony jest w kurorcie Sopot.">
  <meta name="description"
    content="Hotel jest jednym z najlepszych w kraju i oferuje idealne połączenie elegancji, komfortu i najwyższej klasy obsługi. Rezydent Sopot MGallery Hotel Collection położony jest w kurorcie Sopot.">
  <title>Rezydent Sopot to luksusowe miejsce cieszące się dobrą opinią i wysoką oceną.</title>
  <link rel="icon" href="./img/favicon.png" type="image/x-icon">
  <link rel="preload" href="./fonts/FrankRuhlLibre-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
              <h1 class="head__title tt-53-36">
                Łączność
              </h1>
            </div>
            <div class="contacts__texts">
              <p class="contacts__text tx-23">
                Wypełnić formularz
              </p>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Nazwa..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Poczta..." required>
              </div>
              <button class="form__button but" type="submit">
                Wysłać
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2320.1415353278257!2d18.55790429486449!3d54.442788421551455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd0a90517d5a6d%3A0xb1e06b9d72a32dd9!2splac%20Konstytucji%203%20Maja%203%2C%2081-704%20Sopot%2C%20Poland!5e0!3m2!1sen!2sen!4v1702978462842!5m2!1sen!2sen"
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
                  Sopot, Plac Konstytucji 3 Maja 3
                </li>
                <li class="contacts__info-item tx-17">
                  <div class="contacts__icon">
                    <img src="." data-rd-image="./img/phone.svg" data-rd-image-webp="./img/phone.svg" width="24"
                      height="24" alt="Icon phone">
                  </div>
                  <a href="tel:+48585555800">
                    +48 58 555 58 00
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
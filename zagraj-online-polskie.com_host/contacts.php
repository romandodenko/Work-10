<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Haffner Hotel & SPA Sopot to jeden z najlepszych i najnowszych obiektów noclegowych.">
  <meta property="og:site_name"
    content="Haffner Hotel & SPA Sopot oferuje swoim gościom przestronne i nowoczesne pokoje o eleganckim wystroju. Tutaj znajdziesz wszystko, czego potrzebujesz do komfortowego i luksusowego pobytu.">
  <meta name="twitter:title"
    content="Haffner Hotel & SPA Sopot to jeden z najlepszych i najnowszych obiektów noclegowych.">
  <meta name="twitter:description"
    content="Haffner Hotel & SPA Sopot oferuje swoim gościom przestronne i nowoczesne pokoje o eleganckim wystroju. Tutaj znajdziesz wszystko, czego potrzebujesz do komfortowego i luksusowego pobytu.">
  <meta name="description"
    content="Haffner Hotel & SPA Sopot oferuje swoim gościom przestronne i nowoczesne pokoje o eleganckim wystroju. Tutaj znajdziesz wszystko, czego potrzebujesz do komfortowego i luksusowego pobytu.">
  <title>Haffner Hotel & SPA Sopot to jeden z najlepszych i najnowszych obiektów noclegowych.</title>
  <link rel="icon" href="./img/favicon.png" type="image/png">
  <link rel="preload" href="./fonts/DMSerifDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Forum-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
        <div class="container">
          <div class="contacts__top">
            <div class="contacts__top-left">
              <div class="head">
                <div class="head__subtitle head__subtitle_color tt-31-23">
                  Informacja zwrotna
                </div>
                <h1 class="head__title head__title_color tt-53-36">
                  Łączność
                </h1>
              </div>
              <div class="contacts__texts">
                <p class="contacts__text contacts__text_opacity tx-22">
                  Jesteśmy gotowi pomóc Ci w rezerwacji pokoju!
                </p>
                <p class="contacts__text tx-22">
                  Wypełnij poniższy formularz, a nasz menadżer skontaktuje się z Tobą tak szybko, jak to możliwe, aby
                  potwierdzić rezerwację i odpowiedzieć na wszystkie Twoje pytania. Dziękujemy, że wybraliście nas na
                  swój pobyt!
                </p>
              </div>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <label class="form__label" for="text">
                  <span class="tx-17">
                    Wpisz swoje imię
                  </span>
                  <input class="form__input input" type="text" name="text" id="text" required>
                </label>
                <label class="form__label" for="email">
                  <span class="tx-17">
                    Wprowadź swój email
                  </span>
                  <input class="form__input input" type="email" name="email" id="email" required>
                </label>
              </div>
              <button class="form__button but" type="submit">
                Wysłać
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2319.6895366031413!2d18.55840387720086!3d54.45076669151774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd0a85d0b3f76b%3A0x67cee853822cdfe7!2sJana%20Jerzego%20Haffnera%2059%2C%2081-715%20Sopot%2C%20Poland!5e0!3m2!1sen!2sen!4v1702967952576!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <span>
                    Telefon
                  </span>
                  <a href="tel:+48585509999">
                    +48 58 550 99 99
                  </a>
                </li>
                <li class="contacts__info-item tx-17">
                  <span>
                    Adres
                  </span>
                  Jana Jerzego Haffnera 59, 81-715 Sopot, Poland
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
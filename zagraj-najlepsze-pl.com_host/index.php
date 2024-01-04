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
      <!-- start hero -->
      <section class="hero rd-upload rd-background" data-rd-image="./img/hero.jpg" data-rd-image-webp="./img/hero.webp">
        <div class="hero__container container">
          <div class="hero__descr">
            <div class="head">
              <h1 class="head__title head__title_white tt-64-40">
                Casino w hotelu Testa
              </h1>
              <div class="head__subtitle head__subtitle_blue tx-22">
                Hotel w Polsce
              </div>
            </div>
            <div class="hero__texts">
              <p class="hero__text tx-17">
                Hotel Testa to nowoczesny hotel w samym sercu Polski, oferujący wysoki poziom obsługi i przytulne
                pokoje.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start rooms -->
      <section class="rooms rd-upload" id="rooms">
        <div class="container">
          <div class="head">
            <h2 class="head__title head__title_white tt-64-40">
              Pokoje
            </h2>
            <div class="head__subtitle head__subtitle_blue tx-22">
              Pokoje i apartamenty
            </div>
          </div>
          <ul class="rooms__list">
            <li class="rooms__item">
              <div class="rooms__image">
                <img src="." data-rd-image="./img/room-1.jpg" data-rd-image-webp="./img/room-1.webp" width="336"
                  height="336" alt="Ekonomiczny pokój">
              </div>
              <div class="rooms__descr">
                <div class="rooms__subtitle tt-31-24">
                  Ekonomiczny pokój
                </div>
                <div class="rooms__texts">
                  <p class="rooms__text tx-17">
                    Pokój ekonomiczny w Hotelu Testa w Polsce to doskonały wybór dla podróżników ceniących komfort i
                    jakość za rozsądną cenę. Pokoje zostały odnowione i wyposażone w nowe udogodnienia, aby zapewnić
                    gościom najlepszy możliwy pobyt.
                  </p>
                </div>
              </div>
            </li>
            <li class="rooms__item">
              <div class="rooms__image">
                <img src="." data-rd-image="./img/room-2.jpg" data-rd-image-webp="./img/room-2.webp" width="336"
                  height="336" alt="Pokój Deluxe">
              </div>
              <div class="rooms__descr">
                <div class="rooms__subtitle tt-31-24">
                  Pokój Deluxe
                </div>
                <div class="rooms__texts">
                  <p class="rooms__text tx-17">
                    Pokój Deluxe w Hotelu Testa w Polsce to idealny wybór dla osób ceniących luksus i wygodę. Wysoko
                    oceniane przez gości pokoje wyposażone są w najnowocześniejsze udogodnienia zapewniające komfort i
                    przyjemność.
                  </p>
                </div>
              </div>
            </li>
            <li class="rooms__item">
              <div class="rooms__image">
                <img src="." data-rd-image="./img/room-3.jpg" data-rd-image-webp="./img/room-3.webp" width="336"
                  height="336" alt="Apartament Rodzinny">
              </div>
              <div class="rooms__descr">
                <div class="rooms__subtitle tt-31-24">
                  Apartament Rodzinny
                </div>
                <div class="rooms__texts">
                  <p class="rooms__text tx-17">
                    Pokoje rodzinne w Hotelu Testa w Polsce to idealny wybór na rodzinne wakacje. Wysoko oceniane przez
                    gości pokoje są wyposażone w najnowocześniejsze udogodnienia i zaprojektowane tak, aby zapewnić
                    maksymalny komfort całej rodzinie.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end rooms -->

      <!-- start oferty -->
      <section class="oferty rd-upload" id="oferty">
        <div class="container">
          <div class="head">
            <h2 class="head__title tt-64-40">
              Specjalne oferty
            </h2>
            <div class="head__subtitle tx-22">
              Najnowsze promocje i oferty
            </div>
          </div>
          <ul class="oferty__list">
            <li class="oferty__item rd-background" data-rd-image="./img/oferty-1.jpg"
              data-rd-image-webp="./img/oferty-1.webp">
              <div class="oferty__name tx-22">
                Błogi relaks w spa
              </div>
            </li>
            <li class="oferty__item rd-background" data-rd-image="./img/oferty-2.jpg"
              data-rd-image-webp="./img/oferty-2.webp">
              <div class="oferty__name tx-22">
                Relaksujący urlop
              </div>
            </li>
            <li class="oferty__item rd-background" data-rd-image="./img/oferty-3.jpg"
              data-rd-image-webp="./img/oferty-3.webp">
              <div class="oferty__name tx-22">
                Weekend dla dziewczyn
              </div>
            </li>
            <li class="oferty__item rd-background" data-rd-image="./img/oferty-4.jpg"
              data-rd-image-webp="./img/oferty-4.webp">
              <div class="oferty__name tx-22">
                Przepyszne romantyczne chwile dla dwojga
              </div>
            </li>
            <li class="oferty__item rd-background" data-rd-image="./img/oferty-5.jpg"
              data-rd-image-webp="./img/oferty-5.webp">
              <div class="oferty__name tx-22">
                Romantyczny wypoczynek klasy Premium w hotelu Testa
              </div>
            </li>
            <li class="oferty__item rd-background" data-rd-image="./img/oferty-6.jpg"
              data-rd-image-webp="./img/oferty-6.webp">
              <div class="oferty__name tx-22">
                Magiczne boże Narodzenie w przytulnym hotelu Testa!
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end oferty -->

      <!-- start spa -->
      <section class="spa rd-upload" id="spa">
        <div class="container">
          <div class="head">
            <h2 class="head__title tt-64-40">
              Spa
            </h2>
            <div class="head__subtitle tx-22">
              Relaks i dobre samopoczucie
            </div>
          </div>
          <div class="spa__content">
            <div class="spa__left">
              <div class="spa__subtitle tx-22">
                SPA i WELLNESS
              </div>
              <h3 class="spa__title tt-31-24">
                SPA
              </h3>
              <div class="spa__texts">
                <p class="spa__text tx-17">
                  Centrum Spa Hotelu Testa w Polsce oferuje gościom wysokiej jakości usługi i cieszy się wysoką oceną
                  wśród odwiedzających. Nowoczesne i wyposażone w najnowocześniejsze udogodnienia spa oferuje szeroką
                  gamę zabiegów i programów rozpieszczających ciało i duszę. Goście mogą skorzystać z relaksujących
                  masaży, zabiegów kosmetycznych, sauny, basenu i sali fitness.
                </p>
              </div>
            </div>
            <ul class="spa__images">
              <li class="spa__image">
                <img src="." data-rd-image="./img/spa-1.jpg" data-rd-image-webp="./img/spa-1.webp" width="336"
                  height="336" alt="Spa">
              </li>
              <li class="spa__image">
                <img src="." data-rd-image="./img/spa-2.jpg" data-rd-image-webp="./img/spa-2.webp" width="336"
                  height="336" alt="Spa">
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end spa -->

      <!-- start slots -->
      <section class="slots rd-upload">
        <div class="container">
          <div class="head">
            <h2 class="head__title tt-64-40">
              Pokój slotowy
            </h2>
            <div class="head__subtitle tx-22">
              Emocje i rozrywka
            </div>
          </div>
          <div class="slots__texts">
            <p class="slots__text tx-17">
              Sala gier w Hotelu Testa w Polsce to przestronna i nowoczesna sala wyposażona w najnowocześniejsze gry i
              automaty. Pokój ten pomoże gościom hotelowym zanurzyć się w atmosferze emocji i rozrywki. Pokój slotowy w
              Hotelu Testa cieszy się dobrą opinią wśród gości ze względu na profesjonalną obsługę i szeroki wybór gier.
            </p>
          </div>
          <a class="slots__link but but_height" href="slots.php">
            Spójrz dalej
          </a>
          <div class="slots__image">
            <img src="." data-rd-image="./img/slot-1.jpg" data-rd-image-webp="./img/slot-1.webp" width="336"
              height="336" alt="Pokój slotowy">
          </div>
        </div>
      </section>
      <!-- end slots -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>
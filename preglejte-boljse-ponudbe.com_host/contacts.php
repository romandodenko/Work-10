<!DOCTYPE html>
<html lang="sl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Grand Plaza ima prostorne sobe, opremljene z vsem, kar potrebujete. Vsaka soba je opremljena s sodobnim pohištvom, velikimi posteljami in zasebno kopalnico">
  <meta property="og:site_name"
    content="Grand Plaza Hotel & Congress Center je eden najnovejših in najboljših hotelov.">
  <meta name="twitter:title"
    content="Grand Plaza ima prostorne sobe, opremljene z vsem, kar potrebujete. Vsaka soba je opremljena s sodobnim pohištvom, velikimi posteljami in zasebno kopalnico">
  <meta name="twitter:description"
    content="Grand Plaza Hotel & Congress Center je eden najnovejših in najboljših hotelov.">
  <meta name="description" content="Grand Plaza Hotel & Congress Center je eden najnovejših in najboljših hotelov.">
  <title>Grand Plaza ima prostorne sobe, opremljene z vsem, kar potrebujete. Vsaka soba je opremljena s sodobnim
    pohištvom, velikimi posteljami in zasebno kopalnico</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Cinzel-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Corinthia-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
            <div class="contacts__head">
              <h1 class="contacts__title tt-64-40">
                Kontakti
              </h1>
              <div class="contacts__subtitle tt-40-32">
                Kontaktni obrazec
              </div>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Ime ..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="E-naslov..."
                  required>
              </div>
              <button class="form__button but" type="submit">
                Pošlji
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2769.0224728784906!2d14.545173776869671!3d46.050649994118366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765327520286eab%3A0x7c0f73199c731c26!2sPesarska%20cesta%2C%201000%20Ljubljana%2C%20Slovenia!5e0!3m2!1sen!2sen!4v1701249088447!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <span class="tt-31">
                    Naslov
                  </span>
                  Ljubljana, Pešarska cesta
                </li>
                <li class="contacts__info-item tx-17">
                  <span class="tt-31">
                    številka
                  </span>
                  <a href="tel:+38615480055">
                    +386 154 800 55
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
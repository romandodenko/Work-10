 


<!DOCTYPE html>
<html lang="no">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="The Thief - Høy vurdering og trygg ferie">
  <meta property="og:site_name"
    content="Velkommen til The Thief, et unikt sted i hjertet av Oslo, der lidenskap for kunst og luksus gjennomsyrer hvert øyeblikk.">
  <meta name="twitter:title" content="The Thief - Høy vurdering og trygg ferie">
  <meta name="twitter:description"
    content="Velkommen til The Thief, et unikt sted i hjertet av Oslo, der lidenskap for kunst og luksus gjennomsyrer hvert øyeblikk.">
  <meta name="description"
    content="Velkommen til The Thief, et unikt sted i hjertet av Oslo, der lidenskap for kunst og luksus gjennomsyrer hvert øyeblikk.">
  <title>The Thief - Høy vurdering og trygg ferie</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Chivo-Medium.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Chivo-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/IndieFlower-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <section class="contacts">
        <div class="container">
          <h1 class="contacts__title tt-42-30">
            Kontakter
          </h1>
          <div class="contacts__content">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2000.4763353883031!2d10.718506377474403!3d59.907641664595744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46416c29e77f3a19%3A0x3f4532f2bd2822aa!2sTHE%20THIEF!5e0!3m2!1sen!2sen!4v1701850539998!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contacts__left">
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <input class="form__input input" type="text" name="text" id="text" placeholder="Navn..." required>
                  <input class="form__input input" type="email" name="email" id="email" placeholder="E-post..." required>
                </div>
                <button class="form__button but" type="submit">
                  Sende
                </button>
              </form>
              <address class="contacts__address">
                <ul class="contacts__list">
                  <li class="contacts__item tx-16-14">
                    Landgangen 1, 0252 Oslo, Norway
                  </li>
                  <li class="contacts__item tx-16-14">
                    <a href="tel:+4724004000">
                      +4724004000
                    </a>
                  </li>
                  <li class="contacts__item tx-16-14">
                    <a href="mailto:onlinespilleautomat-no@gmail.com">
                      onlinespilleautomat-no@gmail.com
                    </a>
                  </li>
                </ul>
              </address>
            </div> 
          </div>
        </div>
      </section>
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>
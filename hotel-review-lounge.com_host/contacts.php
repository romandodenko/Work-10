<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Hotel Indigo Tokyo Shibuya is one of the best places to stay.">
  <meta property="og:site_name"
    content="Hotel Indigo Tokyo Shibuya sets the standard for providing first-class service, ambience and attention to detail, making it one of the best hotels in Tokyo.">
  <meta name="twitter:title" content="Hotel Indigo Tokyo Shibuya is one of the best places to stay.">
  <meta name="twitter:description"
    content="Hotel Indigo Tokyo Shibuya sets the standard for providing first-class service, ambience and attention to detail, making it one of the best hotels in Tokyo.">
  <meta name="description"
    content="Hotel Indigo Tokyo Shibuya sets the standard for providing first-class service, ambience and attention to detail, making it one of the best hotels in Tokyo.">
  <title>Hotel Indigo Tokyo Shibuya is one of the best places to stay.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Merriweather-Black.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Merriweather-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Poppins-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <h1 class="contacts__title tt-53-36">
            Contacts
          </h1>
          <div class="contacts__content">
            <div class="contacts__left">
              <div class="contacts__texts">
                <p class="contacts__text tx-23">
                  Fill out the form and we will contact you to help you and tell you everything about our hotel
                </p>
              </div>
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
                  <input class="form__input input" type="email" name="email" id="email" placeholder="Email..." required>
                </div>
                <button class="form__button but" type="submit">
                  Send
                </button>
              </form>
            </div>
            <div class="contacts__right">
              <div class="contacts__map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1620.8535737968855!2d139.69791128896375!3d35.65958622243098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b5a08f9b3df%3A0xa3bf771937e9c3a4!2sDogenzaka-dori!5e0!3m2!1sen!2sen!4v1702279517362!5m2!1sen!2sen"
                  width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <address class="contacts__address">
                <ul class="contacts__info">
                  <li class="contacts__info-item tx-17">
                    Tokyo Prefecture, Shibuya Special Ward, Dogenzaka, 2
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
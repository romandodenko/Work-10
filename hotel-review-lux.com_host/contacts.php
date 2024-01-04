<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Hotel X Toronto is one of the most outstanding hotels in Canada.">
  <meta property="og:site_name"
    content="Located in the heart of Toronto, it is renowned for its amenities and luxury. The hotel offers its guests modern rooms with views and the highest level of service.">
  <meta name="twitter:title" content="Hotel X Toronto is one of the most outstanding hotels in Canada.">
  <meta name="twitter:description"
    content="Located in the heart of Toronto, it is renowned for its amenities and luxury. The hotel offers its guests modern rooms with views and the highest level of service.">
  <meta name="description"
    content="Located in the heart of Toronto, it is renowned for its amenities and luxury. The hotel offers its guests modern rooms with views and the highest level of service.">
  <title>Hotel X Toronto is one of the most outstanding hotels in Canada.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/HelveticaNeueCyr-roman.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Montserrat-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
            <h1 class="contacts__title tt-53-36">
              Contacts
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-22">
                Fill out the form and our managers will contact you
              </p>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Email..." required>
              </div>
              <button class="form__button but" type="submit">
                Send
                <svg width="23" height="8">
                  <use xlink:href="./img/svg/sprites.svg#arrow"></use>
                </svg>
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  Province of Ontario, Toronto, Old Toronto
                </li>
              </ul>
            </address>
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92330.5944567988!2d-79.46824307663262!3d43.68288000025589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34fad45285d9%3A0x6e0de6bbfd39f7f3!2sOld%20Toronto%2C%20Toronto%2C%20ON%2C%20Canada!5e0!3m2!1sen!2sen!4v1702284708955!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </section>
      <!-- end contacts  -->
    </main>
    <!-- start footer -->
    <?php
     include 'footer.php';
     ?>
    <!-- end footer -->
  </div>
</body>

</html>
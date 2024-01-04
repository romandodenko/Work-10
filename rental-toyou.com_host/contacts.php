<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Our site offers rental of game consoles with some of the best games.">
  <meta property="og:site_name"
    content="We provide access to popular gaming consoles with highly rated games so that our customers can enjoy the best gaming entertainment. Our services will allow you to immerse yourself in the exciting worlds of games">
  <meta name="twitter:title" content="Our site offers rental of game consoles with some of the best games.">
  <meta name="twitter:description"
    content="We provide access to popular gaming consoles with highly rated games so that our customers can enjoy the best gaming entertainment. Our services will allow you to immerse yourself in the exciting worlds of games">
  <meta name="description"
    content="We provide access to popular gaming consoles with highly rated games so that our customers can enjoy the best gaming entertainment. Our services will allow you to immerse yourself in the exciting worlds of games">
  <title>Our site offers rental of game consoles with some of the best games.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/RussoOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <h1 class="contacts__title tt-53-36">
            Contacts
          </h1>
          <div class="contacts__texts">
            <p class="contacts__text tx-23">
              Fill out the form and we will definitely call you back to order the game
            </p>
          </div>
          <form class="form" action="#!" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Enter your name" required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="Enter your email"
                required>
            </div>
            <button class="form__button but" type="submit">
              Send
              <img src="." data-rd-image="./img/arrow.svg" data-rd-image-webp="./img/arrow.svg" width="18" height="7" alt="Arrow icon">
            </button>
          </form>
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
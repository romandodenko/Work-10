 <!DOCTYPE html>
 <html lang="hu">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Biztonságos nyaralás és a legjobb játékok magas értékelésekkel">
   <meta property="og:site_name"
     content="Az Eurostars Hotel Company Áurea Ana Palace egy biztonságos és kényelmes légkörű luxusszálloda Magyarországon. A szálloda az Eurostars Hotel Company tulajdonában van, amely kifogástalan minőségéről híres, és a szállodaipar legjobb szolgáltatásait kínálja.">
   <meta name="twitter:title" content="Biztonságos nyaralás és a legjobb játékok magas értékelésekkel">
   <meta name="twitter:description"
     content="Az Eurostars Hotel Company Áurea Ana Palace egy biztonságos és kényelmes légkörű luxusszálloda Magyarországon. A szálloda az Eurostars Hotel Company tulajdonában van, amely kifogástalan minőségéről híres, és a szállodaipar legjobb szolgáltatásait kínálja.">
   <meta name="description"
     content="Az Eurostars Hotel Company Áurea Ana Palace egy biztonságos és kényelmes légkörű luxusszálloda Magyarországon. A szálloda az Eurostars Hotel Company tulajdonában van, amely kifogástalan minőségéről híres, és a szállodaipar legjobb szolgáltatásait kínálja.">
   <title>Biztonságos nyaralás és a legjobb játékok magas értékelésekkel</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/Oswald-Bold.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/Raleway-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
             Kapcsolatok
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Név..." required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="Email..."
                     required>
                 </div>
                 <button class="form__button but" type="submit">
                   Küld
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     Budapest, Akadémia u. 15-1054, 1054 Hungary
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+3619105020">
                       +3619105020
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:legjobb-playclub@gmail.com">
                       legjobb-playclub@gmail.com
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.3035326068375!2d19.04369617690326!3d47.503479695092174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc169a2bb807%3A0x6113f4ef3514b194!2sBudapest%2C%20Akad%C3%A9mia%20u.%2015-1054%2C%201054%20Hungary!5e0!3m2!1sen!2sen!4v1702885093243!5m2!1sen!2sen"
                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
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
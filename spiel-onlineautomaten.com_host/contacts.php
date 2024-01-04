 <!DOCTYPE html>
 <html lang="de">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Ein Hotel für Entspannung und Unterhaltung. Spielen Sie sichere Spiele">
   <meta property="og:site_name"
     content="Das CERVO Mountain Resort Ist eines der besten und neuesten Hotels der Schweiz. Malerisch gelegen bietet es seinen Gästen einen unvergesslichen Urlaub inmitten herrlicher Berge und einzigartiger Natur.">
   <meta name="twitter:title" content="Ein Hotel für Entspannung und Unterhaltung. Spielen Sie sichere Spiele">
   <meta name="twitter:description"
     content="Das CERVO Mountain Resort Ist eines der besten und neuesten Hotels der Schweiz. Malerisch gelegen bietet es seinen Gästen einen unvergesslichen Urlaub inmitten herrlicher Berge und einzigartiger Natur.">
   <meta name="description"
     content="Das CERVO Mountain Resort Ist eines der besten und neuesten Hotels der Schweiz. Malerisch gelegen bietet es seinen Gästen einen unvergesslichen Urlaub inmitten herrlicher Berge und einzigartiger Natur.">
   <title>Ein Hotel für Entspannung und Unterhaltung. Spielen Sie sichere Spiele</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/Macondo-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/UbuntuMono-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
             Kontakte
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="Email..."
                     required>
                 </div>
                 <button class="form__button but" type="submit">
                   Schicken
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     Riedweg 156, 3920 Zermatt, Switzerland
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+41279681212">
                       +41279681212
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:spiel-onlineautomaten@gmail.com">
                       spiel-onlineautomaten@gmail.com
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2770.4619770733166!2d7.751795576844303!3d46.02193009605282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478f3585ca1656ed%3A0x61c37aafec66a00c!2sCERVO%20Mountain%20Resort!5e0!3m2!1sen!2sen!4v1703051800538!5m2!1sen!2sen"
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
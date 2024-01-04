 <!DOCTYPE html>
 <html lang="sl">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title"
     content="Hotel Slovenija - Terme & Wellness LifeClass - Varne počitnice, dobro razpoloženje in ocenjevalne igre">
   <meta property="og:site_name"
     content="Hotel Slovenija - Terme & Wellness LifeClass je eden izmed najboljših hotelov v Sloveniji, ki ponuja visoko stopnjo storitev in nezahtevne počitnice za goste. Nahaja se v letoviškem mestu Portorož in ponuja edinstvene možnosti za sprostitev in ozdravitev.">
   <meta name="twitter:title"
     content="Hotel Slovenija - Terme & Wellness LifeClass - Varne počitnice, dobro razpoloženje in ocenjevalne igre">
   <meta name="twitter:description"
     content="Hotel Slovenija - Terme & Wellness LifeClass je eden izmed najboljših hotelov v Sloveniji, ki ponuja visoko stopnjo storitev in nezahtevne počitnice za goste. Nahaja se v letoviškem mestu Portorož in ponuja edinstvene možnosti za sprostitev in ozdravitev.">
   <meta name="description"
     content="Hotel Slovenija - Terme & Wellness LifeClass je eden izmed najboljših hotelov v Sloveniji, ki ponuja visoko stopnjo storitev in nezahtevne počitnice za goste. Nahaja se v letoviškem mestu Portorož in ponuja edinstvene možnosti za sprostitev in ozdravitev.">
   <title>Hotel Slovenija - Terme & Wellness LifeClass - Varne počitnice, dobro razpoloženje in ocenjevalne igre</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/Forum-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/Ultra-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
             Kontakti
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Ime..." required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="E-naslov..."
                     required>
                 </div>
                 <button class="form__button but" type="submit">
                   Pošlji
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     Obala 33, 6320 Portorož, Slovenia
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+38656929001">
                       +386 5 692 9001
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:igrajte-najboljse-reze@gmail.com">
                       igrajte-najboljse-reze@gmail.com
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2795.7347518973675!2d13.586300576849025!3d45.51541793001917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477b652bc5487143%3A0xb17e2fa2780ac1cd!2sHotel%20Mirna%20-%20LifeClass%20Hotels%20%26%20Spa!5e0!3m2!1sen!2sen!4v1702366435509!5m2!1sen!2sen"
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
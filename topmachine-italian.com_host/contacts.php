 <!DOCTYPE html>
 <html lang="it">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Monastero dei Santi - Hotel sicuro per una buona vacanza con la famiglia">
   <meta property="og:site_name"
     content="L'Hotel Monastero dei Santi è un nuovo hotel di prima classe situato in una splendida posizione in Italia. È rinomato per il suo alto livello di servizio ed è uno dei migliori hotel della regione.">
   <meta name="twitter:title" content="Monastero dei Santi - Hotel sicuro per una buona vacanza con la famiglia">
   <meta name="twitter:description"
     content="L'Hotel Monastero dei Santi è un nuovo hotel di prima classe situato in una splendida posizione in Italia. È rinomato per il suo alto livello di servizio ed è uno dei migliori hotel della regione.">
   <meta name="description"
     content="L'Hotel Monastero dei Santi è un nuovo hotel di prima classe situato in una splendida posizione in Italia. È rinomato per il suo alto livello di servizio ed è uno dei migliori hotel della regione.">
   <title>Monastero dei Santi - Hotel sicuro per una buona vacanza con la famiglia</title>
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
             Contatti
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Nome..." required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..."
                     required>
                 </div>
                 <button class="form__button but" type="submit">
                   Inviare
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     Via Trionfale, 179, 00136 Roma RM, Italy
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+390685956903">
                       +390685956903
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:topmachine-italian@gmail.com">
                       topmachine-italian@gmail.com
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2968.680976249755!2d12.445111076715978!3d41.92121636271262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f60853123a5d3%3A0x10c5edcd187cc322!2sVia%20Trionfale%2C%20179%2C%2000136%20Roma%20RM%2C%20Italy!5e0!3m2!1sen!2sen!4v1701671462342!5m2!1sen!2sen"
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
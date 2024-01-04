 <!DOCTYPE html>
 <html lang="it">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title"
     content="L'hotel Milano San Siro - Vacanza meravigliosa. Sicurezza e tranquillità. Il miglior albergo">
   <meta property="og:site_name"
     content="L'hotel Milano San Siro in Italia è considerato da molti uno dei migliori hotel della regione. Questo lussuoso hotel è circondato da una natura meravigliosa ed è un vero gioiello tra lo splendore dell'Italia.">
   <meta name="twitter:title"
     content="L'hotel Milano San Siro - Vacanza meravigliosa. Sicurezza e tranquillità. Il miglior albergo">
   <meta name="twitter:description"
     content="L'hotel Milano San Siro in Italia è considerato da molti uno dei migliori hotel della regione. Questo lussuoso hotel è circondato da una natura meravigliosa ed è un vero gioiello tra lo splendore dell'Italia.">
   <meta name="description"
     content="L'hotel Milano San Siro in Italia è considerato da molti uno dei migliori hotel della regione. Questo lussuoso hotel è circondato da una natura meravigliosa ed è un vero gioiello tra lo splendore dell'Italia.">
   <title>L'hotel Milano San Siro - Vacanza meravigliosa. Sicurezza e tranquillità. Il miglior albergo</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/PlaypenSans-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
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
           <h1 class="contacts__title line tt-42-30">
             Contatti
           </h1>
           <div class="contacts__content">
            <div class="contacts__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.922373238318!2d9.074997276847318!3d45.471367632959634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786ea0586d6e7a7%3A0x6dedb94cf576fde4!2sIdea%20Hotel%20Milano%20San%20Siro!5e0!3m2!1sen!2sen!4v1701681903825!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Nome..." required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
                 </div>
                 <button class="form__button but" type="submit">
                   Inviare
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                    Via Gaetano Airaghi, 125, 20153 Milano MI, Italy
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+390289734122">
                      +390289734122
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:bestmachine-it@gmail.com">
                      bestmachine-it@gmail.com
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
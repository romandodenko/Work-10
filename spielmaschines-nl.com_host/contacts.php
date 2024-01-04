 <!DOCTYPE html>
 <html lang="nl">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Een spannende vakantie. Beste spellen. Veilig tijdverdrijf">
   <meta property="og:site_name"
     content="Hotel TwentySeven in Nederland is een van de beste hotels met een ongeëvenaard niveau van luxe en comfort. TwentySeven Hotel is gevestigd in een nieuw en modern gebouw en staat bekend om zijn aandacht voor detail en toewijding aan onberispelijke service.">
   <meta name="twitter:title" content="Een spannende vakantie. Beste spellen. Veilig tijdverdrijf">
   <meta name="twitter:description"
     content="Hotel TwentySeven in Nederland is een van de beste hotels met een ongeëvenaard niveau van luxe en comfort. TwentySeven Hotel is gevestigd in een nieuw en modern gebouw en staat bekend om zijn aandacht voor detail en toewijding aan onberispelijke service.">
   <meta name="description"
     content="Hotel TwentySeven in Nederland is een van de beste hotels met een ongeëvenaard niveau van luxe en comfort. TwentySeven Hotel is gevestigd in een nieuw en modern gebouw en staat bekend om zijn aandacht voor detail en toewijding aan onberispelijke service.">
   <title>Een spannende vakantie. Beste spellen. Veilig tijdverdrijf</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/PlaypenSans-Medium.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/ZillaSlab-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
             Contacten
           </h1>
           <form class="form" action="#!" name="form" autocomplete="off">
             <div class="form__inputs">
               <input class="form__input input" type="text" name="text" id="text" placeholder="Naam..." required>
               <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
             </div>
             <button class="form__button but" type="submit">
               Versturen
             </button>
           </form>
           <address class="contacts__address">
             <ul class="contacts__list">
               <li class="contacts__item tx-16-14">
                 Dam 27, 1012 JS Amsterdam, Netherlands
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="tel:+31202182180">
                   +31 20-21 82 180
                 </a>
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="mailto:spielmaschines-nl@gmail.com">
                   spielmaschines-nl@gmail.com
                 </a>
               </li>
             </ul>
           </address>
           <div class="contacts__map">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.8844467636623!2d4.890712177129627!3d52.37251524713774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c731728e8b%3A0x31747d74d92419!2sDam%2027%2C%201012%20JS%20Amsterdam%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1700641348023!5m2!1sen!2sen"
               width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
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
 <!DOCTYPE html>
 <html lang="nl">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Dijk, recreatie, entertainment en games met een hoge waardering en veiligheid">
   <meta property="og:site_name"
     content="Aparthotel Boat & Co ligt aan de waterkant van de Houthaven, het historische boshavengebied van Amsterdam.">
   <meta name="twitter:title" content="Dijk, recreatie, entertainment en games met een hoge waardering en veiligheid">
   <meta name="twitter:description"
     content="Aparthotel Boat & Co ligt aan de waterkant van de Houthaven, het historische boshavengebied van Amsterdam.">
   <meta name="description"
     content="Aparthotel Boat & Co ligt aan de waterkant van de Houthaven, het historische boshavengebied van Amsterdam.">
   <title>Dijk, recreatie, entertainment en games met een hoge waardering en veiligheid</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/MavenPro-Bold.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/MavenPro-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Naam..." required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..."
                     required>
                 </div>
                 <button class="form__button but" type="submit">
                   Versturen
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     Revaleiland 500, 1014 ZG Amsterdam, The Netherlands
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+31202461599">
                       +312 024 61599
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:lucky-ferocious-club@gmail.com">
                       lucky-ferocious-club@gmail.com
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2434.678424444423!2d4.879428377109309!3d52.39437964552184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609eb26e4383d%3A0x699f68709e8a57fb!2sRevaleiland%20500%2C%201014%20ZG%20Amsterdam%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1703212800551!5m2!1sen!2sen"
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
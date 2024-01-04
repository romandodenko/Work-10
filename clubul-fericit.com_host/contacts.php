 <!DOCTYPE html>
 <html lang="ro">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Hotel Epoque Relais & Chateaux - Sărbători sigure și jocuri foarte apreciate">
   <meta property="og:site_name"
     content="Bine ați venit la Hotel Epoque - Relais & Chateaux - locul ideal pentru vacanța dumneavoastră de lux în România! Hotelul Epoque este renumit pentru evaluările sale ridicate și este un bestseller printre oaspeții care apreciază cele mai bune servicii și ospitalitatea caldă.">
   <meta name="twitter:title" content="Hotel Epoque Relais & Chateaux - Sărbători sigure și jocuri foarte apreciate">
   <meta name="twitter:description"
     content="Bine ați venit la Hotel Epoque - Relais & Chateaux - locul ideal pentru vacanța dumneavoastră de lux în România! Hotelul Epoque este renumit pentru evaluările sale ridicate și este un bestseller printre oaspeții care apreciază cele mai bune servicii și ospitalitatea caldă.">
   <meta name="description"
     content="Bine ați venit la Hotel Epoque - Relais & Chateaux - locul ideal pentru vacanța dumneavoastră de lux în România! Hotelul Epoque este renumit pentru evaluările sale ridicate și este un bestseller printre oaspeții care apreciază cele mai bune servicii și ospitalitatea caldă.">
   <title>Hotel Epoque Relais & Chateaux - Sărbători sigure și jocuri foarte apreciate</title>
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
             Contacte
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Nume..." required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..."
                     required>
                 </div>
                 <button class="form__button but" type="submit">
                   Trimite
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     Intrarea Aurora 17C, București 010213, Romania
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+40371528528">
                       +40 371 528 528
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:clubul-fericit@gmail.com">
                       clubul-fericit@gmail.com
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2848.827215078893!2d26.084081276783156!3d44.436706401404344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b1ff5cc1c637b3%3A0x1072b3ea9c1784a!2sIntrarea%20Aurora%2017C%2C%20Bucure%C8%99ti%20010213%2C%20Romania!5e0!3m2!1sen!2sen!4v1703569565273!5m2!1sen!2sen"
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
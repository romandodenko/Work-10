 <!DOCTYPE html>
 <html lang="no">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Grand Hotel - Rangerte spill, trygge ferier, godt selskap">
   <meta property="og:site_name"
     content="Velkommen til Grand Hotel, der luksus møter komfort og eksepsjonell service tar ferieopplevelsen din til et nytt nivå. Hotellet tilbyr en unik blanding av raffinement og moderne komfort som gjør oppholdet ditt uforglemmelig.">
   <meta name="twitter:title" content="Grand Hotel - Rangerte spill, trygge ferier, godt selskap">
   <meta name="twitter:description"
     content="Velkommen til Grand Hotel, der luksus møter komfort og eksepsjonell service tar ferieopplevelsen din til et nytt nivå. Hotellet tilbyr en unik blanding av raffinement og moderne komfort som gjør oppholdet ditt uforglemmelig.">
   <meta name="description"
     content="Velkommen til Grand Hotel, der luksus møter komfort og eksepsjonell service tar ferieopplevelsen din til et nytt nivå. Hotellet tilbyr en unik blanding av raffinement og moderne komfort som gjør oppholdet ditt uforglemmelig.">
   <title>Grand Hotel - Rangerte spill, trygge ferier, godt selskap</title>
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
             Kontakter
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Navn..." required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="E-post..."
                     required>
                 </div>
                 <button class="form__button but" type="submit">
                   Sende
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     Karl Johans gt. 31, 0159 Oslo, Norway
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+4723161700">
                       +4723161700
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:topspilleautomat@gmail.com">
                       topspilleautomat@gmail.com
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2000.112089659754!2d10.737078477474718!3d59.91368706410903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46416e7d6eedb8b9%3A0xdd03aa63c95c9891!2sKarl%20Johans%20gt.%2031%2C%200159%20Oslo%2C%20Norway!5e0!3m2!1sen!2sen!4v1701846333944!5m2!1sen!2sen"
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
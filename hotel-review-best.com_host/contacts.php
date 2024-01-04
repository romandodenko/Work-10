 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="The Chania Hotel - Recreation with family and safe games">
   <meta property="og:site_name"
     content="The Chania Hotel is a luxury hotel located in Greece in the beautiful city of Chania. It enjoys a deservedly high rating and is on the first line of the list of the most popular hotels in this region. This hotel is known for its exceptional level of service and offers guests a wide choice of standard and luxury rooms.">
   <meta name="twitter:title" content="The Chania Hotel - Recreation with family and safe games">
   <meta name="twitter:description"
     content="The Chania Hotel is a luxury hotel located in Greece in the beautiful city of Chania. It enjoys a deservedly high rating and is on the first line of the list of the most popular hotels in this region. This hotel is known for its exceptional level of service and offers guests a wide choice of standard and luxury rooms.">
   <meta name="description"
     content="The Chania Hotel is a luxury hotel located in Greece in the beautiful city of Chania. It enjoys a deservedly high rating and is on the first line of the list of the most popular hotels in this region. This hotel is known for its exceptional level of service and offers guests a wide choice of standard and luxury rooms.">
   <title>The Chania Hotel - Recreation with family and safe games</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/Dhurjati-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/TitilliumWeb-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
             Contacts
           </h1>
           <div class="contacts__content">
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.635805733169!2d24.01484877650467!3d35.513282639180446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x149c7dbd8c87c581%3A0x5396bf1e11ad8805!2sPl.%201866%2016%2C%20Chania%20731%2035%2C%20Greece!5e0!3m2!1sen!2sen!4v1702005971185!5m2!1sen!2sen"
                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Name" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="Email" required>
                 </div>
                 <button class="form__button but" type="submit">
                   Send
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     1866 Square 16, Chania, 73135, Crete, Greece
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+302821090002">
                       +30 2821090002
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:hotel-review-best@gmail.com">
                       hotel-review-best@gmail.com
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
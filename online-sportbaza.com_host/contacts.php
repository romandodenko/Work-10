 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="AthensWas Design Hotel - safe, highly rated hotel for the whole family">
   <meta property="og:site_name"
     content="AthensWas Design Hotel is one of the first and best hotels in Greece, which has earned a high rating due to its unrivaled quality of service, stylish design and sophisticated atmosphere.">
   <meta name="twitter:title" content="AthensWas Design Hotel - safe, highly rated hotel for the whole family">
   <meta name="twitter:description"
     content="AthensWas Design Hotel is one of the first and best hotels in Greece, which has earned a high rating due to its unrivaled quality of service, stylish design and sophisticated atmosphere.">
   <meta name="description"
     content="AthensWas Design Hotel is one of the first and best hotels in Greece, which has earned a high rating due to its unrivaled quality of service, stylish design and sophisticated atmosphere.">
   <title>AthensWas Design Hotel - safe, highly rated hotel for the whole family</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/Ephesis-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/NovaSquare-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
           <h1 class="contacts__title  tt-52-34">
             Contacts
           </h1>
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
                 Dionysiou Areopagitou 5, Athina 117 42, Greece
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="tel:+302109249954">
                   +30 210 9249954
                 </a>
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="mailto:online-sportbaza@gmail.com">
                   online-sportbaza@gmail.com
                 </a>
               </li>
             </ul>
           </address>
           <div class="contacts__map">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3145.3298441393094!2d23.7308281!3d37.969431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd16e0c004ad%3A0x2a92f6ebab5fa7c3!2sDionysiou%20Areopagitou%205%2C%20Athina%20117%2042%2C%20Greece!5e0!3m2!1sen!2sen!4v1701158050516!5m2!1sen!2sen"
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
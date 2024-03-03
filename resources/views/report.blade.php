<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== FAVICON ===============-->
      <link rel="shortcut icon" href="Front/assets/img/favicon.png" type="image/x-icon">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

      <!--=============== SWIPER CSS ===============-->
      <link rel="stylesheet" href="Front/assets/css/swiper-bundle.min.css">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="Front/assets/css/styles.css">

      <title>DeskMate - E-Library</title>
      <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        </style>
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
               <i class="ri-book-open-fill"></i> DeskMate
            </a>
      </header>


      <!--==================== LOGIN ====================-->
      <div class="login grid" id="login-content">
        <i class="ri-close-line login__close" id="login-close"></i>
        <div class="navbarmenu">
            @if (Route::has('login'))
            <div class="button">
                @auth
                    <a href="{{ url('/home') }}" style="color: white">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" style="color: white">Login</a>
            </div>

        @if (Route::has('register'))
        <div class="button">
            <a href="{{ route('register') }}"style="color: white">Register</a>
            @endif
        @endauth
        @endif
        </div>  
        </div>
      </div>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <section class="home section" id="home">
               
            <h1>USER REGISTER REPORT</h1>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
                @foreach($users as $p)
                <tr>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->p_number}}</td>
                </tr>
                @endforeach
            </table>
                         
         </section>
      </main>

      <!--==================== FOOTER ====================-->
      <footer class="footer">
         <div class="footer__container container grid">
            <div>
               <a href="#" class="footer__logo">
                  <i class="ri-book-open-fill"></i> Desk Mate
               </a>

               <p class="footer__description">
                  Introducing our groundbreaking e-library application, <br>
                   a new frontier in online libraries. Access an extensive <br>
                    and affordable collection of high-quality books, <br>
                    complemented by an appealing, lightweight app design <br>
                    and an accessible website interface. Revolutionize <br>
                    your reading experience with our comprehensive <br>
                    and attractively priced literary offerings.
               </p>
            </div>

            <div class="footer__data grid">
               <div>
                  <h3 class="footer__title">About</h3>

                  <ul class="footer__links">
                     <li>
                        <a href="#" class="footer__link">Profile</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">FAQs</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">Privacy policy</a>
                     </li>
                     
                     <li>
                        <a href="#" class="footer__link">Terms of services</a>
                     </li>
                  </ul>
               </div>

               <!-- <div>
                  <h3 class="footer__title">Company</h3>

                  <ul class="footer__links">
                     <li>
                        <a href="#" class="footer__link">Blogs</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">Community</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">Our team</a>
                     </li>

                     <li>
                        <a href="#" class="footer__link">Help center</a>
                     </li>
                  </ul>
               </div> -->

               <div>
                  <h3 class="footer__title">Contact</h3>

                  <ul class="footer__links">
                     <li>
                        <address class="footer__info">
                           Blitar <br>
                           East Java, Indonesia 
                        </address>
                     </li>

                     <li>
                        <address class="footer__info">
                           rynanda1202@email.com <br>
                           +6285708429518
                        </address>
                     </li>
                  </ul>
               </div>

               <div>
                  <h3 class="footer__title">Social</h3>

                  <div class="footer__social">
                     <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-circle-line"></i>
                     </a>

                     <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                     </a>

                     <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-x-line"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>

         <span class="footer__copy">
            &#169; All Rights Reserved By Andiar R. Agastya
         </span>
      </footer>

      <!--========== SCROLL UP ==========-->
      <a href="#" class="scrollup" id="scroll-up">
         <i class="ri-arrow-up-line"></i>
      </a>

      <!--=============== SCROLLREVEAL ===============-->
      <script src="Front/assets/js/scrollreveal.min.js"></script>

      <!--=============== SWIPER JS ===============-->
      <script src="Front/assets/js/swiper-bundle.min.js"></script>

      <!--=============== MAIN JS ===============-->
      <script src="Front/assets/js/main.js"></script>
   </body>
</html>
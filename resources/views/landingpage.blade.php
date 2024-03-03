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
   </head>
   <body>
      <!--==================== HEADER ====================-->
      <header class="header" id="header">
         <nav class="nav container">
            <a href="#" class="nav__logo">
               <i class="ri-book-open-fill"></i> DeskMate
            </a>
            
            <div class="nav__menu">
               <ul class="nav__list">
                  <li class="nav__item">
                     <a href="#home" class="nav__link active-link">
                        <i class="ri-home-line"></i>
                        <span>Home</span>
                     </a>
                  </li>

                  <!-- <li class="nav__item">
                     <a href="#featured" class="nav__link">
                        <i class="ri-book-3-line"></i>
                        <span>Feature</span>
                     </a>
                  </li> -->

                  <li class="nav__item">
                     <a href="#discount" class="nav__link">
                        <i class="ri-price-tag-3-line"></i>
                        <span>Discount</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#new" class="nav__link">
                        <i class="ri-bookmark-line"></i>
                        <span>New Release</span>
                     </a>
                  </li>

                  <li class="nav__item">
                     <a href="#testimonial" class="nav__link">
                        <i class="ri-message-3-line"></i>
                        <span>Testimonial</span>
                     </a>
                  </li>
               </ul>
            </div>

            <div class="nav__actions">
               <!-- Search button -->
               <i class="ri-search-line search-button" id="search-button"></i>
               
               <!-- Login button -->
               <i class="ri-user-line login-button" id="login-button"></i>

               <!-- Theme button -->
               <i class="ri-moon-line change-theme" id="theme-button"></i>
            </div>
         </nav>
      </header>

      <!--==================== SEARCH ====================-->
      <div class="search" id="search-content">
         <form action="/pegawai/cari" class="search__form" method="GET">
            <i class="ri-search-line search__icon"></i>
            <input type="text" placeholder="What are you looking for?" class="search__input" value="{{ old('cari') }}">
            <input type="submit" value="CARI" hidden>
         </form>

         <i class="ri-close-line search__close" id="search-close"></i>
      </div>

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
            <div class="home__container container grid">
               <div class="home__data">
                  <h1 class="home__title">
                     Today a <u>Reader</u>, <br>
                     Tomorrow a <span style="color: #4960D4;">Leader</span>.
                  </h1>

                  <p class="home__description">
                     In the symphony of life, reading is the resonant chord that orchestrates knowledge, wisdom, 
                     and the subtle poetry of understanding.
                  </p>

                  <a href="#" class="button">Explore Now</a>
               </div>

               <div class="home__images">
                  <div class="home__swiper swiper">
                     <div class="swiper-wrapper">
                        <article class="home__article swiper-slide">
                           <img src="Front/assets/img/home-book-1.png" alt="image" class="home__img">
                        </article>

                        <article class="home__article swiper-slide">
                           <img src="Front/assets/img/home-book-2.png" alt="image" class="home__img">
                        </article>

                        <article class="home__article swiper-slide">
                           <img src="Front/assets/img/home-book-3.png" alt="image" class="home__img">
                        </article>

                        <article class="home__article swiper-slide">
                           <img src="Front/assets/img/home-book-4.png" alt="image" class="home__img">
                        </article>
                     </div>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== SERVICES ====================-->
         <section class="services section">
            <div class="services__container container grid">
               <article class="services__card">
                  <i class="ri-cash-line"></i>
                  <h3 class="services__title">Reasonable Price</h3>
                  <p class="services__description">Access a wealth of knowledge <br> without breaking the bank!</p>
               </article>

               <article class="services__card">
                  <i class="ri-book-2-line"></i>
                  <h3 class="services__title">Comprehensive</h3>
                  <p class="services__description">Explore a diverse world of literature <br>
                      with our vast and varied e-library collection!</p>
               </article>

               <article class="services__card">
                  <i class="ri-medal-2-line"></i>
                  <h3 class="services__title">Quality Guaranteed</h3>
                  <p class="services__description">Immerse yourself in a <br> high-quality reading experience!
               </article>
            </div>
         </section>

         <!--==================== FEATURED ====================-->
         <!-- <section class="featured section" id="featured">
            <h2 class="section__title">
               Feature
            </h2> -->
<!-- 
            <div class="featured__container container">
               <div class="featured__swiper swiper">
                  <div class="swiper-wrapper">
                     <article class="featured__card swiper-slide">
                        <img src="assets/img/book-1.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Featured Book</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="assets/img/book-2.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Featured Book</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="assets/img/book-3.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Featured Book</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="assets/img/book-4.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Featured Book</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                     
                     <article class="featured__card swiper-slide">
                        <img src="assets/img/book-5.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Featured Book</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="assets/img/book-6.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Featured Book</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="assets/img/book-7.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Featured Book</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="assets/img/book-8.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Featured Book</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="assets/img/book-9.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Featured Book</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="assets/img/book-10.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Featured Book</h2>
                        <div class="featured__prices">
                           <span class="featured__discount">$11.99</span>
                           <span class="featured__price">$19.99</span>
                        </div>

                        <button class="button">Add To Cart</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                  </div>

                  <div class="swiper-button-prev">
                     <i class="ri-arrow-left-s-line"></i>
                  </div>

                  <div class="swiper-button-next">
                     <i class="ri-arrow-right-s-line"></i>
                  </div>
               </div> -->
            <!-- </div> -->
         <!-- </section> -->

         <!--==================== DISCOUNT ====================-->
         <section class="discount section" id="discount">
            <div class="discount__container container grid">
               <div class="discount__data">
                  <h2 class="discount__title section__title">
                     Up To 50% Discount 
                  </h2>

                  <p class="discount__description">
                     Take advantage of the discount days we 
                     have for you, buy books from your favorite 
                     writers, the more you buy, the more 
                     discounts we have for you.
                  </p>

                  <a href="#" class="button">Shop Now</a>
               </div>

               <div class="discount__images">
                  <img src="Front/assets/img/discount-book-1.png" alt="" class="discount__img-1">
                  <img src="Front/assets/img/discount-book-2.png" alt="" class="discount__img-2">
               </div>
            </div>
         </section>

         <!--==================== NEW BOOKS ====================-->
         <section class="new section" id="new">
            <h2 class="section__title">
               New Release
            </h2>

            <div class="new__container container">
               <div class="new__swiper swiper">
                  <div class="swiper-wrapper">
                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-1.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Example</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-2.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Simple</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-3.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Sang Mentari</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-4.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Mengejar Pelangi</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-5.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Camar</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-6.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Gadis Kretek</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-7.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Seven Years</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-8.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Mama Told Me</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-9.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Tinggallah</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-10.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">So Far Away</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>

               <div class="new__swiper swiper">
                  <div class="swiper-wrapper">
                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-10.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Sevenfold</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-9.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Dark Knight</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-8.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Will You Stay?</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-7.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">The One I Love</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-6.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Merpatiku</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-5.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Cadar Itu</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-4.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Rintik Malam</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-3.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Stay</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-2.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Cry Again</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>

                     <a href="#" class="new__card swiper-slide">
                        <img src="Front/assets/img/book-1.png" alt="image" class="new__img">

                        <div>
                           <h2 class="new__title">Always On My Mind</h2>
                           <div class="new__prices">
                              <span class="new__discount">$7.99</span>
                              <span class="new__price">$14.99</span>
                           </div>
   
                           <div class="new__stars">
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-fill"></i>
                              <i class="ri-star-half-fill"></i>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </section>

         <!--==================== JOIN ====================-->
         <!-- <section class="join section">
            <div class="join__container">
               <img src="assets/img/join-bg.jpg" alt="image" class="join__bg">

               <div class="join__data container grid">
                  <h2 class="join__title section__title">
                     Subscribe To Receive <br>
                     The Latest Updates
                  </h2>
   
                  <form action="" class="join__form">
                     <input type="email" placeholder="Enter email" class="join__input">
                     <button type="submit" class="join__button button">Subscribe</button>
                  </form>
               </div>
            </div>
         </section> -->

         <!--==================== TESTIMONIAL ====================-->
         <section class="testimonial section" id="testimonial">
            <h2 class="section__title">
               Customer Opinions
            </h2>

            <div class="testimonial__container container">
               <div class="testimonial__swiper swiper">
                  <div class="swiper-wrapper">
                     <article class="testimonial__card swiper-slide">
                        <img src="Front/assets/img/testimonial-perfil-1.png" alt="img" class="testimonial__img">

                        <h2 class="testimonial__title">Rial Loz</h2>
                        <p class="testimonial__description">
                           The best website to buy books, the purchase 
                           is very easy to make and has great discounts.
                        </p>

                        <div class="testimonial__stars">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-half-fill"></i>
                        </div>
                     </article>

                     <article class="testimonial__card swiper-slide">
                        <img src="Front/assets/img/testimonial-perfil-2.png" alt="img" class="testimonial__img">

                        <h2 class="testimonial__title">Rial Loz</h2>
                        <p class="testimonial__description">
                           The best website to buy books, the purchase 
                           is very easy to make and has great discounts.
                        </p>

                        <div class="testimonial__stars">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-half-fill"></i>
                        </div>
                     </article>

                     <article class="testimonial__card swiper-slide">
                        <img src="Front/assets/img/testimonial-perfil-3.png" alt="img" class="testimonial__img">

                        <h2 class="testimonial__title">Rial Loz</h2>
                        <p class="testimonial__description">
                           The best website to buy books, the purchase 
                           is very easy to make and has great discounts.
                        </p>

                        <div class="testimonial__stars">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-half-fill"></i>
                        </div>
                     </article>

                     <article class="testimonial__card swiper-slide">
                        <img src="Front/assets/img/testimonial-perfil-4.png" alt="img" class="testimonial__img">

                        <h2 class="testimonial__title">Rial Loz</h2>
                        <p class="testimonial__description">
                           The best website to buy books, the purchase 
                           is very easy to make and has great discounts.
                        </p>

                        <div class="testimonial__stars">
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-fill"></i>
                           <i class="ri-star-half-fill"></i>
                        </div>
                     </article>
                  </div>
               </div>
            </div>
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
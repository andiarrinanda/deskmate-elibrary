@php
    $booktittle1 = get_BookSection_value('1');
    $booktittle2 = get_BookSection_value('2');
    $booktittle3 = get_BookSection_value('3');
    $booktittle4 = get_BookSection_value('4');
    $booktittle5 = get_BookSection_value('5');
    $booktittle6 = get_BookSection_value('6');
    $booktittle7 = get_BookSection_value('7');
    $booktittle8 = get_BookSection_value('8');
    $booktittle9 = get_BookSection_value('9');
    $booktittle10 = get_BookSection_value('10');
    $booktittle11 = get_BookSection_value('11');
    $booktittle12 = get_BookSection_value('12');
    $booktittle13 = get_BookSection_value('13');
    $booktittle14 = get_BookSection_value('14');
    $booktittle15 = get_BookSection_value('15');

    $author1 = get_author_value('1');
    $author2 = get_author_value('2');
    $author3 = get_author_value('3');
    $author4 = get_author_value('4');
    $author5 = get_author_value('5');
    $author6 = get_author_value('6');
    $author7 = get_author_value('7');
    $author8 = get_author_value('8');
    $author9 = get_author_value('9');
    $author10 = get_author_value('10');
    $author11 = get_author_value('11');
    $author12 = get_author_value('12');

    $price1 = get_price_value('1');
    $price2 = get_price_value('2');
    $price3 = get_price_value('3');
    $price4 = get_price_value('4');
    $price5 = get_price_value('5');
    $price6 = get_price_value('6');
    $price7 = get_price_value('7');
    $price8 = get_price_value('8');
    $price9 = get_price_value('9');
    $price10 = get_price_value('10');
    $price11 = get_price_value('11');
    $price12 = get_price_value('12');
    $price13 = get_price_value('13');
    $price14 = get_price_value('14');
    $price15 = get_price_value('15');
  
@endphp

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
               <ul class="nav__list"></ul>
            </div>

            <div class="nav__actions">
               {{-- cart button --}}
               <i class="ri-shopping-cart-2-line" id="cart-button"></i>

               <!-- Search button -->
               <i class="ri-search-line search-button" id="search-button"></i>
               
               <!-- Login button -->
               <i class="ri-user-line login-button" id="login-button"></i>

               <!-- Theme button -->
               <i class="ri-moon-line change-theme" id="theme-button"></i>
            </div>
         </nav>
      </header>



      <div class="search" id="search-content">
         <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input" id="filter">
         </form>

         <i class="ri-close-line search__close" id="search-close"></i>
      </div>

      <!--==================== SEARCH ====================-->
      <div class="search" id="search-content">
         <form action="" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="What are you looking for?" class="search__input">
         </form>

         <i class="ri-close-line search__close" id="search-close"></i>
      </div>
         
    

      <!--==================== LOGIN ====================-->
      <div class="login grid" id="login-content">
         
         <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
            <div class="button">
                {{ __('Log Out') }}
            </div>
            </x-dropdown-link>

            <x-dropdown-link :href="route('profile.edit')">
               <div class="button">
               {{ __('Profile') }}
            </div>
           </x-dropdown-link>

        </form>
      

         <i class="ri-close-line login__close" id="login-close"></i>
      </div>

      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->


         <section class="home section" id="home">
            <div class="store__container container">
            <img src="Front/assets/img/banner.png" alt="">
            </div>
         </section>



         <!--==================== FEATURED ====================-->
        <section class="featured section" id="featured">
            <h2 class ="section__title">
               Popular
            </h2>  
            <div class="featured__container container">
               <div class="featured__swiper swiper">
                  <div class="swiper-wrapper">
                     <article class="featured__card swiper-slide">
                        <img src="fotosampul/terusir.jpg" alt="image" class="featured__img">

                        <h2 class="featured__title">{{$booktittle1}}</h2>
                        <p>{{$author1}}</p>
                        <div class="featured__prices">
                           <span class="featured__discount">IDR. {{$price1}}</span>
                           <span class="featured__price"></span>
                        </div>

                        <button class="button">Buy Now</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="fotosampul/hujan.jpeg" alt="image" class="featured__img">

                        <h2 class="featured__title">{{$booktittle2}}</h2>
                        <p>{{$author2}}</p>
                        <div class="featured__prices">
                           <span class="featured__discount">IDR. {{$price2}}</span>
                           <span class="featured__price"></span>
                        </div>
                        <a href="https://drive.google.com/file/d/1eifzblyiAJ-volCZ72fLddBEarbDDXuZ/view?usp=sharing" class="button">Buy Now</a>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="fotosampul/bumimanusia.jpeg" alt="image" class="featured__img">

                        <h2 class="featured__title">{{$booktittle3}}</h2>
                        <p>{{$author3}}</p>
                        <div class="featured__prices">
                           <span class="featured__discount">IDR. {{$price3}}</span>
                           <span class="featured__price"></span>
                        </div>
                        <a href="https://drive.google.com/file/d/1ahrhwa-FbNPtFUReEWtz4AmaUK61qPln/view?usp=sharing" class="button">Buy Now</a>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="fotosampul/pulangpergi.jpeg" alt="image" class="featured__img">

                        <h2 class="featured__title">{{$booktittle12}}</h2>
                        <p>{{$author12}}</p>
                        <div class="featured__prices">
                           <span class="featured__discount">IDR. {{$price12}}</span>
                           <span class="featured__price"></span>
                        </div>
                        <a href="https://drive.google.com/file/d/1oYz76ybebY4incpEvclx_hfTEqDQR7Gt/view?usp=sharing" class="button">Buy Now</a>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>
                     
                     <article class="featured__card swiper-slide">
                        <img src="fotosampul/bulan.jpeg" alt="image" class="featured__img">

                        <h2 class="featured__title">{{$booktittle5}}</h2>
                        <p>{{$author5}}</p>
                        <div class="featured__prices">
                           <span class="featured__discount">IDR. {{$price5}}</span>
                           <span class="featured__price"></span>
                        </div>

                       <a href="bookinfo" class="button">Buy Now</a>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="fotosampul/sesuk.jpeg" alt="image" class="featured__img">

                        <h2 class="featured__title">{{$booktittle8}}</h2>
                        <p>{{$author8}}</p>
                        <div class="featured__prices">
                           <span class="featured__discount">IDR. {{$price8}}</span>
                           <span class="featured__price"></span>
                        </div>

                        <button class="button">Buy Now</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="fotosampul/sabtusamabapak.jpeg" alt="image" class="featured__img">

                        <h2 class="featured__title">{{$booktittle9}}</h2>
                        <p>{{$author9}}</p>
                        <div class="featured__prices">
                           <span class="featured__discount">IDR. {{$price9}}</span>
                           <span class="featured__price"></span>
                        </div>

                        <button class="button">Buy Now</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="fotosampul/melangkah.jpeg" alt="image" class="featured__img">

                        <h2 class="featured__title">{{$booktittle10}}</h2>
                        <p>{{$author10}}</p>
                        <div class="featured__prices">
                           <span class="featured__discount">IDR. {{$price10}}</span>
                           <span class="featured__price"></span>
                        </div>

                        <button class="button">Buy Now</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="Front/assets/img/book-9.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Bird Park</h2>
                        <p>Example</p>
                        <div class="featured__prices">
                           <span class="featured__discount">IDR. {{$price4}}</span>
                           <span class="featured__price"></span>
                        </div>

                        <button class="button">Buy Now</button>

                        <div class="featured__actions">
                           <button><i class="ri-search-line"></i></button>
                           <button><i class="ri-heart-3-line"></i></button>
                           <button><i class="ri-eye-line"></i></button>
                        </div>
                     </article>

                     <article class="featured__card swiper-slide">
                        <img src="Front/assets/img/book-10.png" alt="image" class="featured__img">

                        <h2 class="featured__title">Memories </h2>
                        <p>Example</p>
                        <div class="featured__prices">
                           <span class="featured__discount">IDR. {{$price1}}</span>
                           <span class="featured__price"></span>
                        </div>

                        <button class="button">Buy Now</button>

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
               </div> 
            <!-- </div> -->
         <!-- </section> -->

          <!--==================== FEATURED ====================-->
        <section class="featured section" id="featured">
         <h2 class ="section__title">
            Editor`s Pick
         </h2>  
         <div class="featured__container container">
            <div class="featured__swiper swiper">
               <div class="swiper-wrapper">
                  <article class="featured__card swiper-slide">
                     <img src=Front/assets/img/book-1.png alt="image" class="featured__img">

                     <h2 class="featured__title">The Lord Of The Kings</h2>
                     <div class="featured__prices">
                        <span class="featured__discount">IDR. {{$price1}}</span>
                        <span class="featured__price"></span>
                     </div>

                     <button class="button">Add To Cart</button>

                     <div class="featured__actions">
                        <button><i class="ri-search-line"></i></button>
                        <button><i class="ri-heart-3-line"></i></button>
                        <button><i class="ri-eye-line"></i></button>
                     </div>
                  </article>

                  <article class="featured__card swiper-slide">
                     <img src="Front/assets/img/book-2.png" alt="image" class="featured__img">

                     <h2 class="featured__title">Simple & Minimalist</h2>
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
                     <img src="Front/assets/img/book-3.png" alt="image" class="featured__img">

                     <h2 class="featured__title">Muted Poster</h2>
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
                     <img src="Front/assets/img/book-4.png" alt="image" class="featured__img">

                     <h2 class="featured__title">Pouring Dreams</h2>
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
                     <img src="Front/assets/img/book-5.png" alt="image" class="featured__img">

                     <h2 class="featured__title">Autumn Clothes</h2>
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
                     <img src="Front/assets/img/book-6.png" alt="image" class="featured__img">

                     <h2 class="featured__title">Designed For Work</h2>
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
                     <img src="Front/assets/img/book-7.png" alt="image" class="featured__img">

                     <h2 class="featured__title">Tree For Future</h2>
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
                     <img src="Front/assets/img/book-8.png" alt="image" class="featured__img">

                     <h2 class="featured__title">Abstract</h2>
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
                     <img src="Front/assets/img/book-9.png" alt="image" class="featured__img">

                     <h2 class="featured__title">Bird Park</h2>
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
                     <img src="Front/assets/img/book-10.png" alt="image" class="featured__img">

                     <h2 class="featured__title">Memories</h2>
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
            </div> 

             <!--==================== bestseller ====================-->
             <section class="featured section" id="featured">
               <h2 class ="section__title">
                  Best Seller
               </h2>  
               <div class="featured__container container">
                  <div class="featured__swiper swiper">
                     <div class="swiper-wrapper">
                        <article class="featured__card swiper-slide">
                           <img src="fotosampul/terusir.jpg" alt="image" class="featured__img">
   
                           <h2 class="featured__title">{{$booktittle1}}</h2>
                           <p>{{$author1}}</p>
                           <div class="featured__prices">
                              <span class="featured__discount">IDR. {{$price1}}</span>
                              <span class="featured__price"></span>
                           </div>
   
                           <button class="button">Buy Now</button>
   
                           <div class="featured__actions">
                              <button><i class="ri-search-line"></i></button>
                              <button><i class="ri-heart-3-line"></i></button>
                              <button><i class="ri-eye-line"></i></button>
                           </div>
                        </article>
   
                        <article class="featured__card swiper-slide">
                           <img src="fotosampul/hujan.jpeg" alt="image" class="featured__img">
   
                           <h2 class="featured__title">{{$booktittle2}}</h2>
                           <p>{{$author2}}</p>
                           <div class="featured__prices">
                              <span class="featured__discount">IDR. {{$price2}}</span>
                              <span class="featured__price"></span>
                           </div>
   
                           <button class="button">Buy Now</button>
   
                           <div class="featured__actions">
                              <button><i class="ri-search-line"></i></button>
                              <button><i class="ri-heart-3-line"></i></button>
                              <button><i class="ri-eye-line"></i></button>
                           </div>
                        </article>
   
                        <article class="featured__card swiper-slide">
                           <img src="fotosampul/bumimanusia.jpeg" alt="image" class="featured__img">
   
                           <h2 class="featured__title">{{$booktittle3}}</h2>
                           <p>{{$author3}}</p>
                           <div class="featured__prices">
                              <span class="featured__discount">IDR. {{$price3}}</span>
                              <span class="featured__price"></span>
                           </div>
   
                           <button class="button">Buy Now</button>
   
                           <div class="featured__actions">
                              <button><i class="ri-search-line"></i></button>
                              <button><i class="ri-heart-3-line"></i></button>
                              <button><i class="ri-eye-line"></i></button>
                           </div>
                        </article>
   
                        <article class="featured__card swiper-slide">
                           <img src="fotosampul/pulangpergi.jpeg" alt="image" class="featured__img">
   
                           <h2 class="featured__title">{{$booktittle12}}</h2>
                           <p>{{$author12}}</p>
                           <div class="featured__prices">
                              <span class="featured__discount">IDR. {{$price12}}</span>
                              <span class="featured__price"></span>
                           </div>
   
                           <button class="button">Buy Now</button>
   
                           <div class="featured__actions">
                              <button><i class="ri-search-line"></i></button>
                              <button><i class="ri-heart-3-line"></i></button>
                              <button><i class="ri-eye-line"></i></button>
                           </div>
                        </article>
                        
                        <article class="featured__card swiper-slide">
                           <img src="fotosampul/bulan.jpeg" alt="image" class="featured__img">
   
                           <h2 class="featured__title">{{$booktittle5}}</h2>
                           <p>{{$author5}}</p>
                           <div class="featured__prices">
                              <span class="featured__discount">IDR. {{$price5}}</span>
                              <span class="featured__price"></span>
                           </div>
   
                           <button class="button">Read</button>
   
                           <div class="featured__actions">
                              <button><i class="ri-search-line"></i></button>
                              <button><i class="ri-heart-3-line"></i></button>
                              <button><i class="ri-eye-line"></i></button>
                           </div>
                        </article>
   
                        <article class="featured__card swiper-slide">
                           <img src="fotosampul/sesuk.jpeg" alt="image" class="featured__img">
   
                           <h2 class="featured__title">{{$booktittle8}}</h2>
                           <p>{{$author8}}</p>
                           <div class="featured__prices">
                              <span class="featured__discount">IDR. {{$price8}}</span>
                              <span class="featured__price"></span>
                           </div>
   
                           <button class="button">Read</button>
   
                           <div class="featured__actions">
                              <button><i class="ri-search-line"></i></button>
                              <button><i class="ri-heart-3-line"></i></button>
                              <button><i class="ri-eye-line"></i></button>
                           </div>
                        </article>
   
                        <article class="featured__card swiper-slide">
                           <img src="fotosampul/sabtusamabapak.jpeg" alt="image" class="featured__img">
   
                           <h2 class="featured__title">{{$booktittle9}}</h2>
                           <p>{{$author9}}</p>
                           <div class="featured__prices">
                              <span class="featured__discount">IDR. {{$price9}}</span>
                              <span class="featured__price"></span>
                           </div>
   
                           <button class="button">Read</button>
   
                           <div class="featured__actions">
                              <button><i class="ri-search-line"></i></button>
                              <button><i class="ri-heart-3-line"></i></button>
                              <button><i class="ri-eye-line"></i></button>
                           </div>
                        </article>
   
                        <article class="featured__card swiper-slide">
                           <img src="fotosampul/melangkah.jpeg" alt="image" class="featured__img">
   
                           <h2 class="featured__title">{{$booktittle10}}</h2>
                           <p>{{$author10}}</p>
                           <div class="featured__prices">
                              <span class="featured__discount">IDR. {{$price10}}</span>
                              <span class="featured__price"></span>
                           </div>
   
                           <button class="button">Read</button>
   
                           <div class="featured__actions">
                              <button><i class="ri-search-line"></i></button>
                              <button><i class="ri-heart-3-line"></i></button>
                              <button><i class="ri-eye-line"></i></button>
                           </div>
                        </article>
   
                        <article class="featured__card swiper-slide">
                           <img src="Front/assets/img/book-9.png" alt="image" class="featured__img">
   
                           <h2 class="featured__title">Bird Park</h2>
                           <p>Example</p>
                           <div class="featured__prices">
                              <span class="featured__discount">IDR. {{$price4}}</span>
                              <span class="featured__price"></span>
                           </div>
   
                           <button class="button">Read</button>
   
                           <div class="featured__actions">
                              <button><i class="ri-search-line"></i></button>
                              <button><i class="ri-heart-3-line"></i></button>
                              <button><i class="ri-eye-line"></i></button>
                           </div>
                        </article>
   
                        <article class="featured__card swiper-slide">
                           <img src="Front/assets/img/book-10.png" alt="image" class="featured__img">
   
                           <h2 class="featured__title">Memories </h2>
                           <p>Example</p>
                           <div class="featured__prices">
                              <span class="featured__discount">IDR. {{$price1}}</span>
                              <span class="featured__price"></span>
                           </div>
   
                           <button class="button">Read</button>
   
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
                  </div>
             
         <!--==================== NEW BOOKS ====================-->
         <section class="new section" id="discount">
            <h2 class="section__title">
               Discount
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
      <script> src="resources/js/search.js" </script>
   </body>
</html>
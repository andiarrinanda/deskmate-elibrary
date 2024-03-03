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


    $isbn1 = get_isbn_value('1');
    $isbn2 = get_isbn_value('2');
    $isbn5 = get_isbn_value('5');

    $synopsis1 = get_synopsis_value('1');
    $synopsis2 = get_synopsis_value('2');
    $synopsis5 = get_synopsis_value('5');
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
      <link rel="stylesheet" href="BuyPage/css/styles.css">

      <title>DeskMate - E-Library</title>
   </head>
   <body>


      <!--==================== MAIN ====================-->
      <main class="main">
         <!--==================== HOME ====================-->
         <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="fotosampul/bulanrevised.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        
                        <h1 class="display-5 fw-bolder">{{$booktittle5}}</h1>
                        <h4>Author : {{$author5}} </h4>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through">IDR. 280000</span>
                            <span>IDR. {{$price5}}</span>
                        
                        <p class="lead">{{$synopsis5}}</p>
                        </div>
                        <h2>Purchase Confirmation
                        </h2>

                        <form action="proses_form.php" method="post">
                            <label for="nama">Nama:</label>
                            <input type="text" id="nama" name="nama" required>

                            <br>

                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>

                            <br>

                            <label for="nomor_hp">Nomor HP:</label>
                            <input type="tel" id="nomor_hp" name="nomor_hp" required>

                            <br>

                            <label for="tempat_lahir">Tempat Lahir:</label>
                            <input type="text" id="tempat_lahir" name="tempat_lahir" required>

                            <br>

                            <label for="tanggal_lahir">Tanggal Lahir:</label>
                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

                            <br><br>
                        </form>



                        <div class="d-flex">
                            <a href="invoice" class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Buy
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      </main>

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
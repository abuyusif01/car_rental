 <html>

 <head>
     <!-- Favicon -->
     <link href="img/favicon.ico" rel="icon">
     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">

     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

     <!-- Libraries Stylesheet -->
     <link href={{ asset("css/owl.carousel.min.css") }} rel="stylesheet">
     <link href={{ asset("css/tempus.css") }} rel="stylesheet" />

     <!-- Customized Bootstrap Stylesheet -->
     <link href={{ asset("css/bootsrap.min.css") }} rel="stylesheet">

     <!-- Template Stylesheet -->
     <link href={{ asset("css/style.css") }} rel="stylesheet">
 </head>

 <div class="container-fluid py-5">
     <div class="container pt-5 pb-3">
         <div class="row">
             <div class="col-lg-4 col-md-6 mb-2">
                 <div class="rent-item mb-4" style="border-radius: 10px">
                     <img class="img-fluid mb-4" src={{ asset("assets/img/car-rent-1.png") }} alt="">
                     <h4 class="text-uppercase mb-4">Benz R3 LT0 1254</h4>
                     <div class="d-flex justify-content-center mb-4">
                         <div class="px-2">
                             <i class="fa fa-car text-primary mr-1"></i>
                             <span>2018</span>
                         </div>
                         <div class="px-2 border-left border-right">
                             <i class="fa fa-cogs text-primary mr-1"></i>
                             <span>AUTO</span>
                         </div>
                         <div class="px-2">
                             <i class="fa fa-road text-primary mr-1"></i>
                             <span>25K</span>
                         </div>
                     </div>
                     Price
                     <a class="btn btn-primary px-3" href="{{ route('booking_with_values', ['plateNumber' => 'LT0 1254', 'price' => '99']) }}" style="border-radius: 5px">RM99.00/Day</a>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6 mb-2">
                 <div class="rent-item mb-4" style="border-radius: 10px">
                     <img class="img-fluid mb-4" src={{ asset("assets/img/car-rent-2.png") }} alt="">
                     <h4 class="text-uppercase mb-4">HONDA M1 BTK 2751</h4>
                     <div class="d-flex justify-content-center mb-4">
                         <div class="px-2">
                             <i class="fa fa-car text-primary mr-1"></i>
                             <span>2021</span>
                         </div>
                         <div class="px-2 border-left border-right">
                             <i class="fa fa-cogs text-primary mr-1"></i>
                             <span>AUTO</span>
                         </div>
                         <div class="px-2">
                             <i class="fa fa-road text-primary mr-1"></i>
                             <span>5K</span>
                         </div>
                     </div>
                     Price
                     <a class="btn btn-primary px-3" href="{{ route('booking_with_values', ['plateNumber' => 'BTK 2751', 'price' => '120']) }}" style="border-radius: 5px">RM120.00/Day</a>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6 mb-2">
                 <div class="rent-item mb-4" style="border-radius: 10px">
                     <img class="img-fluid mb-4" src={{ asset("assets/img/car-rent-3.png") }} alt="">
                     <h4 class="text-uppercase mb-4">FORD MKV 1100</h4>
                     <div class="d-flex justify-content-center mb-4">
                         <div class="px-2">
                             <i class="fa fa-car text-primary mr-1"></i>
                             <span>2019</span>
                         </div>
                         <div class="px-2 border-left border-right">
                             <i class="fa fa-cogs text-primary mr-1"></i>
                             <span>MANUAL</span>
                         </div>
                         <div class="px-2">
                             <i class="fa fa-road text-primary mr-1"></i>
                             <span>10K</span>
                         </div>
                     </div>
                     Price
                     <a class="btn btn-primary px-3" href="{{ route('booking_with_values', ['plateNumber' => 'MKV 1100', 'price' => '80']) }}" style="border-radius: 5px">RM80.00/Day</a>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6 mb-2">
                 <div class="rent-item mb-4" style="border-radius: 10px">
                     <img class="img-fluid mb-4" src={{ asset("assets/img/car-rent-4.png") }} alt="">
                     <h4 class="text-uppercase mb-4">NISSAN GHY 9087</h4>
                     <div class="d-flex justify-content-center mb-4">
                         <div class="px-2">
                             <i class="fa fa-car text-primary mr-1"></i>
                             <span>2018</span>
                         </div>
                         <div class="px-2 border-left border-right">
                             <i class="fa fa-cogs text-primary mr-1"></i>
                             <span>AUTO</span>
                         </div>
                         <div class="px-2">
                             <i class="fa fa-road text-primary mr-1"></i>
                             <span>14K</span>
                         </div>
                     </div>
                     Price
                     <a class="btn btn-primary px-3" href="{{ route('booking_with_values', ['plateNumber' => 'GHY 9087', 'price' => '100']) }}" style="border-radius: 5px">RM100.00/Day</a>
                 </div>
             </div>

             <div class="col-lg-4 col-md-6 mb-2">
                 <div class="rent-item mb-4" style="border-radius: 10px">
                     <img class="img-fluid mb-4" src={{ asset("assets/img/car-rent-5.png") }} alt="">
                     <h4 class="text-uppercase mb-4">LAMBO GXY 2020</h4>
                     <div class="d-flex justify-content-center mb-4">
                         <div class="px-2">
                             <i class="fa fa-car text-primary mr-1"></i>
                             <span>2018</span>
                         </div>
                         <div class="px-2 border-left border-right">
                             <i class="fa fa-cogs text-primary mr-1"></i>
                             <span>MANUAL</span>
                         </div>
                         <div class="px-2">
                             <i class="fa fa-road text-primary mr-1"></i>
                             <span>25K</span>
                         </div>
                     </div>
                     Price
                     <a class="btn btn-primary px-3" href="{{ route('booking_with_values', ['plateNumber' => 'GXY 2020', 'price' => '259']) }}" style="border-radius: 5px">RM259.00/Day</a>
                 </div>
             </div>
         </div>
     </div>
 </div>

 </html>
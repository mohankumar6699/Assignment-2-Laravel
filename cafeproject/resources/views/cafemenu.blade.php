@extends('layout')
@section('content')



    <!-- ======= Menu Section ======= -->
    <br><br><br>
        <section id="menu" class="menu">
            <div class="container">

                <div class="section-title">
                    <h2>Check our tasty <span>Menu</span></h2>
                </div>

                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="menu-flters">
                            <li data-filter="*" class="filter-active">Show All</li>
                            <li data-filter=".filter-breakfast">Breakfast</li>
                            <li data-filter=".filter-lunch">Lunch</li>
                            <li data-filter=".filter-dinner">Dinner</li>
                            <li data-filter=".filter-desserts">Desserts</li>
                        </ul>
                    </div>
                </div>

                @foreach($cafemenus as $cafemenu)
                <div class="row menu-container">

                    <div class="col-lg-6 menu-item {{$cafemenu -> menu_category}}">
                        <div class="menu-content">
                            <a href="#">{{$cafemenu -> menu_name}} </a><span>${{$cafemenu -> menu_price}}</span>
                        </div>
                        <div class="menu-ingredients">
                            {{$cafemenu -> menu_desc}}
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </section><!-- End Menu Section -->





    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/venobox/venobox.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

@endsection

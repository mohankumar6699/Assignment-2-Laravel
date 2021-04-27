@extends('layout')
@section('content')



    <!-- ======= Book A Table Section ======= -->
    <br><br><br>
    <section id="book-a-table" class="book-a-table">
        <div class="container">

            <div class="section-title">
                <h2>Book a <span>Table</span></h2>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>

            <form action="reservation" method="post" role="form" class="php-email-form">
                @csrf
                <div class="form-row">
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="customer_name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="email" class="form-control" name="customer_email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" class="form-control" name="customer_phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" name="visit_date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" class="form-control" name="visit_time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group">
                        <input type="text" class="form-control" name="no_of_people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="customer_message" rows="5" placeholder="Message"></textarea>
                    <div class="validate"></div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message"></div>
                </div>
                <div class="text-center"><button type="submit">Reserve my Table</button></div>
            </form>

        </div>
    </section><!-- End Book A Table Section -->



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

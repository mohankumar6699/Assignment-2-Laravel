@extends('adminlayout')
@section('admincontent')


    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="/adminpanel">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Dashboard</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box blue-bg">
                        <i class="fa fa-cloud-download"></i>
                        <div class="count">{{$countBookings}}</div>
                        <div class="title"> Reservations</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box brown-bg">
                        <i class="fa fa-shopping-cart"></i>
                        <div class="count">{{ $countMenus }}</div>
                        <div class="title">Menus</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box dark-bg">
                        <i class="fa fa-thumbs-o-up"></i>
                        <div class="count">{{  $countContacts }}</div>
                        <div class="title">Contacts</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="info-box green-bg">
                        <i class="fa fa-cubes"></i>
                        <div class="count">4</div>
                        <div class="title">Photos</div>
                    </div>
                    <!--/.info-box-->
                </div>
                <!--/.col-->

            </div>
            <!--/.row-->


            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Reservations</h3>
                </div>
            </div>


            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Visit Date</th>
                        <th>Time</th>
                        <th>No of People</th>
                        <th>Customer Message</th>
                        <th>Booking Time</th>
                        <th>Confirm Booking</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cafereservations as $cafereservation)
                    <tr>
                        <td> {{$cafereservation -> customer_name}}</td>
                        <td> {{$cafereservation -> customer_email}}</td>
                        <td> {{$cafereservation -> customer_phone}}</td>
                        <td> {{$cafereservation -> visit_date}}</td>
                        <td> {{$cafereservation -> visit_time}}</td>
                        <td> {{$cafereservation -> no_of_people}}</td>
                        <td> {{$cafereservation -> customer_message}}</td>
                        <td> {{$cafereservation -> created_at}}</td>
                        <td><a type="button" href="/confirm-status/{{$cafereservation -> id}}" class="btn btn-primary">Confirm Booking</a></td>
                        <td> {{$cafereservation -> status}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>


        </section>





@endsection

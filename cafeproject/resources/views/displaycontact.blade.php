@extends('adminlayout')
@section('admincontent')


    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Menu</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="/adminpanel">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Contact Information</li>
                    </ol>
                </div>
            </div>


            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Contact Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Created (Date & Time)</th>
                        <th>Action - Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($cafecontacts ?? '' as $cafecontact)
                        <tr>
                            <td> {{$cafecontact -> contact_name}}</td>
                            <td> {{$cafecontact -> contact_email}}</td>
                            <td> ${{$cafecontact -> contact_subject}}</td>
                            <td> {{$cafecontact -> contact_message}}</td>
                            <td> {{$cafecontact -> created_at}}</td>
                            <td><a href="/delete-contact/{{$cafecontact->id}}" type="button" class="btn btn-danger">Delete Contact</a></td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>



        </section>


    </section>





@endsection

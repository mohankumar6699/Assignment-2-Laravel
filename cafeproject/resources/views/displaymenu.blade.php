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
                        <li><i class="fa fa-laptop"></i>Complete Menu</li>
                    </ol>
                </div>
            </div>


            <div class="container">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Menu Name</th>
                        <th>Menu Description</th>
                        <th>Price</th>
                        <th>Menu Category</th>
                        <th>Created (Date & Time)</th>
                        <th>Updated (Date & Time)</th>
                        <th>Action - Update</th>
                        <th>Action - Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($cafemenus ?? '' as $cafemenu)
                        <tr>
                            <td> {{$cafemenu -> menu_name}}</td>
                            <td> {{$cafemenu -> menu_desc}}</td>
                            <td> ${{$cafemenu -> menu_price}}</td>
                            <td> {{$cafemenu -> menu_category}}</td>
                            <td> {{$cafemenu -> created_at}}</td>
                            <td> {{$cafemenu -> updated_at}}</td>
                            <td><a href="/edit-menu/{{$cafemenu->id}}" type="button" class="btn btn-success">Edit Menu</a></td>
                            <td><a href="/{{$cafemenu->id}}" type="button" class="btn btn-danger">Delete Menu</a></td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <div class="mb-3">
                <div class="alert alert-success">
                    <strong>{{ $message ?? '' }}</strong>
                </div>

            </div>

        </section>


    </section>





@endsection

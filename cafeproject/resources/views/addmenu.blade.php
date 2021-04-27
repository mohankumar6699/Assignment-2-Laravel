@extends('adminlayout')
@section('admincontent')


    <section id="main-content">
        <section class="wrapper">

            <!--overview start-->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-laptop"></i> Add Menu</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="/adminpanel">Home</a></li>
                        <li><i class="fa fa-laptop"></i>Add Menu</li>
                    </ol>
                </div>
            </div>


            <div class="container">
                <form class="form-horizontal" role="form" action="addmenu" method="post">
                    @csrf


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="menu_name">Menu Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menu_name" placeholder="Enter menu name" name="menu_name">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-sm-2" for="menu_desc">Menu Description:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menu_desc" placeholder="Enter menu description" name="menu_desc">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="menu_price">Menu Price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="menu_price" placeholder="Enter menu price" name="menu_price">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="menu_category">Menu Category:</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label> <input type="radio" name="menu_category" value="filter-breakfast" checked>  filter-breakfast </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="menu_category" value="filter-lunch">  filter-lunch </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="menu_category" value="filter-dinner">  filter-dinner</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="menu_category" value="filter-desserts">  filter-desserts</label>
                            </div>

                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="alert alert-success">
                            <strong>{{ $message ?? '' }}</strong>
                        </div>

                    </div>



                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>
            </div>


        </section>


    </section>





@endsection

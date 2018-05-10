@extends('frontend/base')
@section('content')
<div id="tg-homebanner" class="tg-homebanner tg-haslayout">
    <figure class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%">
        <figcaption>
            <div class="container">
                <div class="row">
                    <!--                                <div class="col-md-3 col-lg-3" id="supplier_login">
                                                        
                                                    </div>-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="supplier_login">
                        <div class="tg-logingarea">
                            <h2 class="text-center">Supplier Registration</h2>
                            <form class="tg-formtheme tg-formloging" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="supplier_login">

                                    <fieldset>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-user"></i>
                                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-user"></i>
                                            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name">
                                        </div>
<!--                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-user"></i>
                                            <input type="text"  class="form-control" placeholder="Username">
                                        </div>-->
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-envelope"></i>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Email id">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-lock"></i>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-lock"></i>
                                            <input type="password"   class="form-control" placeholder="Confirm Password">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-user"></i>
                                            <input type="text" name="desgination" id="desgination" class="form-control" placeholder="Designation">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-mobile"></i>
                                            <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile number">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-mobile"></i>
                                            <input type="text" name="alter_mobile" id="alter_mobile" class="form-control" placeholder="Alternative number">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-users"></i>
                                            <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company name">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="fa fa-crosshairs"></i>
                                            <a class="tg-btnsharelocation fa fa-crosshairs" id="detect_location" href="javascript:void(0);"></a>
                                                    <input type="text" id="fetch_location" name="yourlocation" class="form-control" placeholder="Your Location">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-user"></i>
                                            <input type="text" name="products" id="products" class="form-control" placeholder="Product/Service">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-user"></i>
                                            <input type="text" name="industry" id="industry" class="form-control" placeholder="Industry">
                                        </div>


                                    </fieldset>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" id="supplier_login">
                                    <h2 class="text-center">Business Card</h2>
                                    <fieldset>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-user"></i>
                                            <input type="text" name="business_name" id="business_name" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-user"></i>
                                            <input type="text" name="job_title" id="job_title" class="form-control" placeholder="Job title">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-mobile"></i>
                                            <input type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Contact number">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <i class="icon-users"></i>
                                            <input type="text" name="cmpny_business_name" id="cmpny_business_name" class="form-control" placeholder="Company name">
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                    <input type="file" name="file_img" id="file_img">
                                                </span>
                                            </span>

                                        </div>
                                        <img id='img-upload'/>
                                    </fieldset>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="text-center">
                                        <button class="tg-btn" id="add_user" type="button">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--                                <div class="col-md-3 col-lg-3" id="supplier_login">
                                                        
                                                    </div>-->

                </div>
            </div>
        </figcaption>
    </figure>
</div>
@endsection
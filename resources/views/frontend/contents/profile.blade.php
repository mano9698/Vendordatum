@extends('frontend/base')
<style>
    #tg-footer, #tg-header{
        display: none!important;
    }
    #tg-dashboardheader{
        display: block!important;
    }
</style>
@section('additional_css')
<link rel="stylesheet" href="assets/css/dashboard.css">
@endsection
@section('content')
<main id="tg-main" class="tg-main tg-haslayout">
    <!--************************************
                    Section Start
    *************************************-->
    <section class="tg-dbsectionspace tg-haslayout">
        <div class="row">
            <form class="tg-formtheme tg-formdashboard">
                <fieldset>
                    <!--************************************
                                    Approved Ads Start
                    *************************************-->
                    <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 tg-lgcolwidthhalf">
                        <div class="tg-dashboardbox">
                            <div class="tg-dashboardboxtitle">
                                <h2>Profile Detail</h2>
                            </div>
                            <form class="tg-formtheme tg-formloging" method="PUT" enctype="multipart/form-data">
                                {{  csrf_field() }}
                            <div class="tg-dashboardholder">
                                <fieldset>
                                <div class="form-group tg-inputwithicon">
                                    <input type="hidden" class="form-control" id="user_id" value="{{ $get_user->id }}">
                                    
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name" value="{{ $get_user->first_name }}">
                                </div>
                                <div class="form-group tg-inputwithicon">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last name" value="{{ $get_user->last_name }}">
                                </div>
                                <!--                                        <div class="form-group tg-inputwithicon">
                                                                            <i class="icon-user"></i>
                                                                            <input type="text"  class="form-control" placeholder="Username">
                                                                        </div>-->
                                <div class="form-group tg-inputwithicon">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email id" value="{{ $get_user->email_id }}">
                                </div>
                                <div class="form-group tg-inputwithicon">
                                    <input type="text" name="desgination" id="desgination" class="form-control" placeholder="Designation" value="{{ $get_user->desgination }}">
                                </div>
                                <div class="form-group tg-inputwithicon">
                                    <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile number" value="{{ $get_user->mobile }}">
                                </div>
                                <div class="form-group tg-inputwithicon">
                                    <input type="text" name="alter_mobile" id="alter_mobile" class="form-control" placeholder="Alternative number" value="{{ $get_user->alter_mobile }}">
                                </div>
                                <div class="form-group tg-inputwithicon">
                                    <input type="text" name="company_name" id="company_name" class="form-control" placeholder="Company name" value="{{ $get_user->cmpny_name }}">
                                </div>
                                <div class="form-group tg-inputwithicon">
                                    <a class="tg-btnsharelocation fa fa-crosshairs" id="detect_location" href="javascript:void(0);"></a>
                                    <input type="text" id="fetch_location" name="yourlocation" class="form-control" placeholder="Your Location" value="{{ $get_user->cmpny_location }}">
                                </div>
                                <div class="form-group tg-inputwithicon">
                                    <input type="text" name="products" id="products" class="form-control" placeholder="Product/Service" value="{{ $get_user->products }}">
                                </div>
                                <div class="form-group tg-inputwithicon">
                                    <input type="text" name="industry" id="industry" class="form-control" placeholder="Industry" value="{{ $get_user->industry }}">
                                </div>
                                </fieldset>
                                
                                <button class="tg-btn" id="update_user" type="button">Update</button>
                            </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 tg-lgcolwidthhalf">
                        <div class="tg-dashboardbox">
                            <div class="tg-dashboardboxtitle">
                                <h2>Business card</h2>
                            </div>
                            <div class="tg-dashboardholder">
                                

<div class="wrapper">
            
            <div class="card radius shadowDepth1">
                <div class="card__image border-tlr-radius">
                    <img src="assets/images/{{ $get_user->file }}" alt="image" class="border-tlr-radius">
                </div>

                <div class="card__content card__padding">
                    <div class="card__share">
                        <div class="card__social">  
                            <a class="share-icon facebook" href="#"><span class="fa fa-facebook"></span></a>
                            <a class="share-icon twitter" href="#"><span class="fa fa-twitter"></span></a>
                            <a class="share-icon googleplus" href="#"><span class="fa fa-google-plus"></span></a>
                        </div>

                        <a id="share" class="share-toggle share-icon" href="#"></a>
                    </div>

                    <div class="card__meta">
                        <a href="#">Web Design</a>
                        <time>17th March</time>
                    </div>

                    <article class="card__article">
                        <h3><a href="#">{{ $get_user->business_name }}</a></h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus harum...</p>
                    </article>
                </div>

                <div class="card__action">
                    
                    <div class="card__author">
                         <div class="card__author-content">
                            <i class="icon-mobile"></i> <a href="">{{ $get_user->contact_number }}</a>
                        </div>
                        <div class="card__author-content pull-right">
                            <i class="icon-user"></i> <a href="">{{ $get_user->cmpny_business_name }}</a>
                        </div>
                    </div>
                </div>
                
                
            </div>

        </div>



                            </div>
                        </div>
                    </div>
                    <!--************************************
                                    Approved Ads End
                    *************************************-->
                    <!--************************************
                                    Approved Ads Start
                    *************************************-->

                    <!--************************************
                                    Approved Ads End
                    *************************************-->
                </fieldset>
            </form>
        </div>
    </section>
    <!--************************************
                    Section End
    *************************************-->
</main>
@endsection
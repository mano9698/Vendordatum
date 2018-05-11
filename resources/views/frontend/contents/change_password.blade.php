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
                    <div class="col-md-2 col-lg-2">

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 tg-lgcolwidthhalf">
                        <div class="tg-dashboardbox">
                            <div class="tg-dashboardboxtitle">
                                <h2>Change Password</h2>
                            </div>
                            <form class="tg-formtheme tg-formloging" method="POST">
<!--                                {{  csrf_field() }}-->
                                <div class="tg-dashboardholder">
                                    <fieldset>
                                        <div class="form-group tg-inputwithicon">
                                            <input type="hidden" class="form-control" id="user_id" value="{{ $get_user->id }}">

                                            <input type="text" name="password" id="password" class="form-control" placeholder="Old password" value="">
                                        </div>
<!--                                        <div class="form-group tg-inputwithicon">
                                            <input type="text" name="text" id="new_password" class="form-control" placeholder="New password" value="">
                                        </div>
                                        <div class="form-group tg-inputwithicon">
                                            <input type="text" name="text" id="verify_password" class="form-control" placeholder="Confirm password" value="">-->
<!--                                        </div>-->
                                        
                                    </fieldset>
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                    <button class="tg-btn" id="update_password" type="button">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2">

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
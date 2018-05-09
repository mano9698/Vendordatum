@extends('frontend/base')
@section('content')
<div id="tg-homebanner" class="tg-homebanner tg-haslayout">
                <figure class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%">
                    <figcaption>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="tg-bannercontent mt-5">
                                        <h1>Welcome To</h1>
                                        <h2>Vendordatum !</h2>
                                      
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="supplier_login">
                                     <div class="tg-logingarea">
                                         <h2 class="text-center">Login Now</h2>
                                        <h2 class="text-center">Supplier</h2>
                                        <form class="tg-formtheme tg-formloging" method="post">
                                            {{csrf_field()}}
                                            <fieldset>
                                                <div class="form-group tg-inputwithicon">
                                                    <i class="icon-envelope"></i>
                                                    <input type="text" name="email" id="supplier_name" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="form-group tg-inputwithicon">
                                                    <i class="icon-lock"></i>
                                                    <input type="password" name="password" id="supplier_password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group">
<!--                                                    <div class="tg-checkbox">
                                                        <input id="tg-rememberme" type="checkbox" name="rememberme" value="rememberme">
                                                        <label for="tg-rememberme">Keep me logged in</label>
                                                    </div>-->
<a class="tg-forgetpassword" id="forget_password" href="javascript:void(0);">Forgot Password?</a>
                                                </div>
                                                <div class="text-center">
                                                    <button class="tg-btn" id="login_supplier" type="button">Login</button>
                                                </div>
                                                <label class="text-center">Or</label>
                                                <div class="col-md-1 col-lg-1">
                                                    
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                                <ul class="tg-sociallogingsignup">
                                                    <li class="tg-googleplus">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-google-plus"></i>
                                                            <span>Sign in with <strong>“Google”</strong></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                                <div class="col-md-1 col-lg-1">
                                                    
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <hr>
                                                    <h4>New Supplier?<a class="tg-register" href="/register"> Click here to register</a></h4>
                                                </div>
                                                
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" id="buyer_login">
                                     <div class="tg-logingarea">
                                        <h2 class="text-center">Login Now</h2>
                                        <h2 class="text-center">Buyer</h2>
                                        <form class="tg-formtheme tg-formloging">
                                            <fieldset>
                                                <div class="form-group tg-inputwithicon">
                                                    <i class="icon-envelope"></i>
                                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="form-group tg-inputwithicon">
                                                    <i class="icon-lock"></i>
                                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group">
<!--                                                    <div class="tg-checkbox">
                                                        <input id="tg-rememberme" type="checkbox" name="rememberme" value="rememberme">
                                                        <label for="tg-rememberme">Keep me logged in</label>
                                                    </div>-->
                                                    <a class="tg-forgetpassword" id="forget_password" href="javascript:void(0);">Forgot Password?</a>
                                                </div>
                                                <div class="text-center">
                                                <button class="tg-btn" type="button">Login</button>
                                                </div>
                                                <label class="text-center">Or</label>
                                                <div class="col-md-1 col-lg-1">
                                                    
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                                                <ul class="tg-sociallogingsignup">
                                                    <li class="tg-googleplus">
                                                        <a href="javascript:void(0);">
                                                            <i class="fa fa-google-plus"></i>
                                                            <span>Sign in with <strong>“Google”</strong></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                                <div class="col-md-1 col-lg-1">
                                                    
                                                </div>
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <hr>
                                                    <h4>New Buyer?<a class="tg-register" href="javascript:void(0);"> Click here to register</a></h4>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" id="forget_form" style="display: none;">
                                     <div class="tg-logingarea">
                                        <h2 class="text-center">Forget Password ?</h2>
                                        <form class="tg-formtheme tg-formloging">
                                            <fieldset>
                                                <div class="form-group">
                                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="text-center">
                                                <button class="tg-btn" type="button">Submit</button>
                                                <button type="button" id="cancel_forget_password" class="toggle-button tg-btn">Cancel</button>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
@endsection
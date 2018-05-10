@extends('frontend.base')
@section('content')
<!--************************************
                            Home Slider Start
            *************************************-->
            <div id="tg-homebanner" class="tg-homebanner tg-haslayout">
                <figure class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%">
                    <figcaption>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="tg-bannercontent">
                                        <h1>World’s Largest Marketplace</h1>
                                        <h2>Search from 12,45,754 Awesome Verified Ads!</h2>
                                        <form class="tg-formtheme tg-formbannersearch">
                                            <fieldset>
                                                <div class="form-group tg-inputwithicon">
                                                    <i class="icon-bullhorn"></i>
                                                    <input type="text" name="customword" class="form-control" id="search_product" placeholder="What are you looking for">
                                                </div>
                                                <div class="form-group tg-inputwithicon">
                                                    <i class="icon-location"></i>
                                                    <a class="tg-btnsharelocation fa fa-crosshairs" id="detect_location" href="javascript:void(0);"></a>
                                                    <input type="text" id="fetch_location" name="yourlocation" class="form-control" placeholder="Your Location">
                                                </div>
                                                <div class="form-group tg-inputwithicon">
                                                    <i class="icon-layers"></i>
                                                    <div class="tg-select">
                                                        <select>
                                                            <option value="none">Select Category</option>
                                                            <option value="none">Mobiles</option>
                                                            <option value="none">Electronics</option>
                                                            <option value="none">Vehicles</option>
                                                            <option value="none">Bikes</option>
                                                            <option value="none">Animals</option>
                                                            <option value="none">Furniture</option>
                                                            <option value="none">toys</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <button class="tg-btn" type="button">Search Now</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <!--************************************
                            Home Slider End
            *************************************-->
            <!--************************************
                            Main Start
            *************************************-->
            <main id="tg-main" class="tg-main tg-haslayout">
                <!--************************************
                                Categories Search Start
                *************************************-->
                <section class="tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
                                <div class="tg-categoriessearch">
                                    <div class="tg-title">
                                        <h2><span>Boost your search with</span> Trending Categories</h2>
                                    </div>
                                    <div id="tg-categoriesslider" class="tg-categoriesslider tg-categories owl-carousel">
                                        <div class="tg-category">
                                            <div class="tg-categoryholder">
                                                <figure><img src="images/icons/img-08.png" alt="image description"></figure>
                                                <h3>Mobiles</h3>
                                            </div>
                                        </div>
                                        <div class="tg-category">
                                            <div class="tg-categoryholder">
                                                <figure><img src="images/icons/img-09.png" alt="image description"></figure>
                                                <h3>Electronics</h3>
                                            </div>
                                        </div>
                                        <div class="tg-category">
                                            <div class="tg-categoryholder">
                                                <figure><img src="images/icons/img-10.png" alt="image description"></figure>
                                                <h3>Vehicles</h3>
                                            </div>
                                        </div>
                                        <div class="tg-category">
                                            <div class="tg-categoryholder">
                                                <figure><img src="images/icons/img-11.png" alt="image description"></figure>
                                                <h3>Bikes</h3>
                                            </div>
                                        </div>
                                        <div class="tg-category">
                                            <div class="tg-categoryholder">
                                                <figure><img src="images/icons/img-12.png" alt="image description"></figure>
                                                <h3>Animals</h3>
                                            </div>
                                        </div>
                                        <div class="tg-category">
                                            <div class="tg-categoryholder">
                                                <figure><img src="images/icons/img-13.png" alt="image description"></figure>
                                                <h3>Furniture</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Categories Search End
                *************************************-->
                <!--************************************
                                Featured Ads Start
                *************************************-->
                <section class="tg-sectionspace tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-sectionhead">
                                    <div class="tg-title">
                                        <h2>Latest Buyers</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-ads">
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="tg-ad tg-verifiedad">
                                        <figure>
                                            <span class="tg-themetag tg-featuretag">featured</span>
                                            <a href="javascript:void(0);"><img src="images/ads/img-01.jpg" alt="image description"></a>
                                            <span class="tg-photocount">See 18 Photos</span>
                                        </figure>
                                        <div class="tg-adcontent">
                                            <ul class="tg-productcagegories">
                                                <li><a href="javascript:void(0);">Mobiles</a></li>
                                            </ul>
                                            <div class="tg-adtitle">
                                                <h3><a href="javascript:void(0);">Ei pad pro for sale</a></h3>
                                            </div>
                                            <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                            <div class="tg-adprice"><h4>$200</h4></div>
                                            <address>44-46 abc Road, Manchester</address>
                                            <div class="tg-phonelike">
                                                <a class="tg-btnphone" href="javascript:void(0);">
                                                    <i class="icon-phone-handset"></i>
                                                    <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                                </a>
                                                <span class="tg-like"><i class="fa fa-heart"></i></span>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="tg-ad tg-verifiedad">
                                        <figure>
                                            <span class="tg-themetag tg-featuretag">featured</span>
                                            <a href="javascript:void(0);"><img src="images/ads/img-02.jpg" alt="image description"></a>
                                            <span class="tg-photocount">See 18 Photos</span>
                                        </figure>
                                        <div class="tg-adcontent">
                                            <ul class="tg-productcagegories">
                                                <li><a href="javascript:void(0);">Vehicles</a></li>
                                            </ul>
                                            <div class="tg-adtitle">
                                                <h3><a href="javascript:void(0);">Classic car in low price</a></h3>
                                            </div>
                                            <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                            <div class="tg-adprice"><h4>on call</h4></div>
                                            <address>44-46 abc Road, Manchester</address>
                                            <div class="tg-phonelike">
                                                <a class="tg-btnphone" href="javascript:void(0);">
                                                    <i class="icon-phone-handset"></i>
                                                    <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                                </a>
                                                <span class="tg-like"><i class="fa fa-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="tg-ad tg-verifiedad">
                                        <figure>
                                            <span class="tg-themetag tg-featuretag">featured</span>
                                            <a href="javascript:void(0);"><img src="images/ads/img-03.jpg" alt="image description"></a>
                                            <span class="tg-photocount">See 18 Photos</span>
                                        </figure>
                                        <div class="tg-adcontent">
                                            <ul class="tg-productcagegories">
                                                <li><a href="javascript:void(0);">Mobiles</a></li>
                                            </ul>
                                            <div class="tg-adtitle">
                                                <h3><a href="javascript:void(0);">Set of 03 chairs</a></h3>
                                            </div>
                                            <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                            <div class="tg-adprice"><h4>$125</h4></div>
                                            <address>44-46 abc Road, Manchester</address>
                                            <div class="tg-phonelike">
                                                <a class="tg-btnphone" href="javascript:void(0);">
                                                    <i class="icon-phone-handset"></i>
                                                    <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                                </a>
                                                <span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="tg-ad tg-verifiedad">
                                        <figure>
                                            <span class="tg-themetag tg-featuretag">featured</span>
                                            <a href="javascript:void(0);"><img src="images/ads/img-04.jpg" alt="image description"></a>
                                            <span class="tg-photocount">See 18 Photos</span>
                                        </figure>
                                        <div class="tg-adcontent">
                                            <ul class="tg-productcagegories">
                                                <li><a href="javascript:void(0);">Furniture</a></li>
                                            </ul>
                                            <div class="tg-adtitle">
                                                <h3><a href="javascript:void(0);">Smartphone for sale</a></h3>
                                            </div>
                                            <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                            <div class="tg-adprice"><h4>$160</h4></div>
                                            <address>44-46 abc Road, Manchester</address>
                                            <div class="tg-phonelike">
                                                <a class="tg-btnphone" href="javascript:void(0);">
                                                    <i class="icon-phone-handset"></i>
                                                    <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                                </a>
                                                <span class="tg-like"><i class="fa fa-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="tg-ad tg-verifiedad">
                                        <figure>
                                            <span class="tg-themetag tg-featuretag">featured</span>
                                            <a href="javascript:void(0);"><img src="images/ads/img-05.jpg" alt="image description"></a>
                                            <span class="tg-photocount">See 18 Photos</span>
                                        </figure>
                                        <div class="tg-adcontent">
                                            <ul class="tg-productcagegories">
                                                <li><a href="javascript:void(0);">Furniture</a></li>
                                            </ul>
                                            <div class="tg-adtitle">
                                                <h3><a href="javascript:void(0);">Set of chair for sale</a></h3>
                                            </div>
                                            <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                            <div class="tg-adprice"><h4>on call</h4></div>
                                            <address>44-46 abc Road, Manchester</address>
                                            <div class="tg-phonelike">
                                                <a class="tg-btnphone" href="javascript:void(0);">
                                                    <i class="icon-phone-handset"></i>
                                                    <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                                </a>
                                                <span class="tg-like"><i class="fa fa-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="tg-ad tg-verifiedad">
                                        <figure>
                                            <span class="tg-themetag tg-featuretag">featured</span>
                                            <a href="javascript:void(0);"><img src="images/ads/img-06.jpg" alt="image description"></a>
                                            <span class="tg-photocount">See 18 Photos</span>
                                        </figure>
                                        <div class="tg-adcontent">
                                            <ul class="tg-productcagegories">
                                                <li><a href="javascript:void(0);">Animals</a></li>
                                            </ul>
                                            <div class="tg-adtitle">
                                                <h3><a href="javascript:void(0);">Eye catching blue parrot for sale</a></h3>
                                            </div>
                                            <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                            <div class="tg-adprice"><h4>on call</h4></div>
                                            <address>44-46 abc Road, Manchester</address>
                                            <div class="tg-phonelike">
                                                <a class="tg-btnphone" href="javascript:void(0);">
                                                    <i class="icon-phone-handset"></i>
                                                    <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                                </a>
                                                <span class="tg-like"><i class="fa fa-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="tg-ad tg-verifiedad">
                                        <figure>
                                            <span class="tg-themetag tg-featuretag">featured</span>
                                            <a href="javascript:void(0);"><img src="images/ads/img-07.jpg" alt="image description"></a>
                                            <span class="tg-photocount">See 18 Photos</span>
                                        </figure>
                                        <div class="tg-adcontent">
                                            <ul class="tg-productcagegories">
                                                <li><a href="javascript:void(0);">Toys</a></li>
                                            </ul>
                                            <div class="tg-adtitle">
                                                <h3><a href="javascript:void(0);">Teddy for sale</a></h3>
                                            </div>
                                            <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                            <div class="tg-adprice"><h4>$30</h4></div>
                                            <address>44-46 abc Road, Manchester</address>
                                            <div class="tg-phonelike">
                                                <a class="tg-btnphone" href="javascript:void(0);">
                                                    <i class="icon-phone-handset"></i>
                                                    <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                                </a>
                                                <span class="tg-like"><i class="fa fa-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                    <div class="tg-ad tg-verifiedad">
                                        <figure>
                                            <span class="tg-themetag tg-featuretag">featured</span>
                                            <a href="javascript:void(0);"><img src="images/ads/img-08.jpg" alt="image description"></a>
                                            <span class="tg-photocount">See 18 Photos</span>
                                        </figure>
                                        <div class="tg-adcontent">
                                            <ul class="tg-productcagegories">
                                                <li><a href="javascript:void(0);">Electronics</a></li>
                                            </ul>
                                            <div class="tg-adtitle">
                                                <h3><a href="javascript:void(0);">Hp dual core 2gb ram-slim laptop</a></h3>
                                            </div>
                                            <time datetime="2017-06-06">Last Updated: 4 hours ago</time>
                                            <div class="tg-adprice"><h4>$260</h4></div>
                                            <address>44-46 abc Road, Manchester</address>
                                            <div class="tg-phonelike">
                                                <a class="tg-btnphone" href="javascript:void(0);">
                                                    <i class="icon-phone-handset"></i>
                                                    <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="0800 - 1234 - 562 - 6"><em>Show Phone No.</em></span>
                                                </a>
                                                <span class="tg-like"><i class="fa fa-heart"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-btnbox">
                                    <a class="tg-btn" href="javascript:void(0);">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </main>
            <!--************************************
                            Main End
            *************************************-->
            @endsection
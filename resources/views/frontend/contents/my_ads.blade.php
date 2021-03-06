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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-dashboardbox">
                            <div class="tg-dashboardboxtitle">
                                <h2>My Ads</h2>
                            </div>
                            <div class="tg-dashboardholder">
                                
                                <div class="tg-otherfilters">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 pull-left">
                                            <div class="form-group tg-sortby">
                                                <span>Sort by:</span>
                                                <div class="tg-select">
                                                    <select>
                                                        <option>Most Recent</option>
                                                        <option>Most Recent</option>
                                                        <option>Most Recent</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 pull-right">
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-magnifier"></i>
                                                <input type="search" name="search" class="form-control" placeholder="Search Here">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($get_products)
                                <table id="tg-adstype" class="table tg-dashboardtable tg-tablemyads">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Title</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Description</th>
                                            <th>Ad Status</th>
                                            <th>Price &amp; Location</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($get_products as $products)
                                        <tr data-category="active">
                                            <td data-title="Photo"><img src="product_images/{{ $products->product_pic }}"></td>
                                            <td data-title="Title">
                                                <h3>{{ $products->title }}</h3>
                                                <span>Ad ID: ng3D5hAMHPajQrM</span>
                                            </td>
                                            <td data-title="Category"><span class="tg-adcategories">{{ $products->product_name }}</span></td>
                                            <td data-title="Featured">{{ $products->product_id }}</td>
                                            <td data-title="Ad Status">{{ $products->description }}</td>
                                            @if($products->availability == 1)
                                            <td data-title="Ad Status"><span class="tg-adstatus tg-adstatusactive">active</span></td>
                                            @else
                                            <td data-title="Ad Status"><span class="tg-adstatus tg-adstatusdeleted">In active</span></td>
                                            @endif
                                            <td data-title="Price &amp; Location">
                                                <h3>{{ $products->price }} </h3>
                                                <address>location  44-46 Morningside North Road Edinburgh, Scotland, EH10 4BF</address>
                                            </td>
                                            <td data-title="Date">
                                                <time datetime="2017-08-08">{{ $products->created_at }}</time>
<!--                                                <span>Published</span>-->
                                            </td>
                                            <td data-title="Action">
                                                <div class="tg-btnsactions">
                                                    <a class="tg-btnaction tg-btnactionview" href="javascript:void(0);"><i class="fa fa-eye"></i></a>
                                                    <a class="tg-btnaction tg-btnactionedit" href="javascript:void(0);"><i class="fa fa-pencil"></i></a>
                                                    <a class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <h3>No Products Found</h3>
                                @endif
                                <nav class="tg-pagination">
                                    <ul>
                                        <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="tg-active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>...</li>
                                        <li><a href="#">10</a></li>
                                        <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
    <!--************************************
                    Section End
    *************************************-->
</main>
@endsection
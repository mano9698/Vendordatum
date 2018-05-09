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
                    <div class="tg-postanad">
                        <div class="col-md-2 col-lg-2">

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <div class="tg-dashboardbox tg-contactdetail">
                                <div class="tg-dashboardboxtitle">
                                    <h2>Ad Detail</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <form method='post' enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <!--                                                <div class="form-group text-center">
                                                                                        <a href="#" class="tg-btn" data-toggle="modal" data-target=".tg-categorymodal">Select Category Here</a>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <ol class="tg-categorysequence">
                                                                                            <li>Electronics</li>
                                                                                            <li>Air Conditioners</li>
                                                                                            <li>Daikin <a href="javascript:void(0);" data-toggle="modal" data-target=".tg-categorymodal">(Change)</a></li>
                                                                                        </ol>
                                                                                    </div>-->
                                    <div class="form-group">
                                        <input type="text" id="title" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="form-group">

                                        <input type="text" id="product_name" class="form-control" placeholder="Product Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="product_id" class="form-control" placeholder="Product Category">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="price" class="form-control" placeholder="Price">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="availability" class="form-control" placeholder="Avalability">
                                    </div>
<!--                                    <div class="form-group tg-inputwithicon">
                                        <i class="fa fa-crosshairs"></i>
                                        <input type="text" id="enteraddress" class="form-control" placeholder="Enter Address">
                                    </div>-->
                                    <div class="form-group">
                                        <textarea class="form-control" id="description" placeholder="Description"></textarea>
                                    </div>
<!--                                    <div class="form-group">
                                        <textarea id="tg-tinymceeditor" class="tg-tinymceeditor"></textarea>
                                    </div>-->
                                    <label>Upload Photos</label>
                                    <label class="tg-fileuploadlabel" for="tg-photogallery">
                                        <span>Drop files anywhere to upload</span>
                                        <span>Or</span>
                                        <span class="tg-btn">Select Files</span>
                                        <span>Maximum upload file size: 500 KB</span>
                                        <input id="tg-photogallery" class="tg-fileinput" type="file">
                                    </label>
                                    <label>Upload Documents</label>
                                    <label class="tg-fileuploadlabel" for="tg-photogallery">
                                        <span>Drop your documents</span>
                                        <span>Or</span>
                                        <span class="tg-btn">Select Files</span>
                                        <span>Maximum upload file size: 500 KB</span>
                                        <input id="tg-photogallery" class="tg-fileinput" type="file">
                                    </label>
                                    <div class="tg-checkbox">
                                        <input id="tg-agreetermsandrules" type="checkbox" name="agreetermsandrules" value="on">
                                        <label for="tg-agreetermsandrules" class="checkbox-pad-bottom">I agree to all <a href="javascript:void(0);">Terms of Use &amp; Posting Rules</a></label>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="tg-btn" id="add_posts" type="button">Post Ad</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-lg-2">

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

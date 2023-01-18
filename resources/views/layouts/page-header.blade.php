<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6  ">
        <div class="page-header">
            <div class="page-title">
                <h1>مرحبا, <span>{{ Auth::user()->name }}</span></h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-6 col-md-6 col-sm-6" dir="">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb" dir="">
                    <li class="mx-2"><a href="#">@yield('title-header') /</a></li> 
                    <li class="">@yield('subTitle-header')</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>
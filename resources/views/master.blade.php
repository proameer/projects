<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    
    <!-- plugin css for this page -->
    @include('head')
    <style>
      body{background: #eee}.news{width: 160px}.news-scroll a{text-decoration: none}.dot{height: 10px;width: 10px;margin-left: 3px;margin-right: 3px;margin-top: 2px !important;background-color: rgb(207,23,23);border-radius: 50%;display: inline-block}
    </style>
  </head>

  <body dir="rtl">
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:../partials/_navbar.html -->
     
        @include('navbar')

        <!-- partial -->
        <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <div class="row" dir="">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                            <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-0 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;الاخبار</span></div>
                            <marquee class="news-scroll" behavior="scroll" direction="right" onmouseover="this.stop();" onmouseout="this.start();"> <a href="#">
                              @foreach (newsTicker() as $item)
                              <a href="{{url('singleCategory' , $item->id)}}">
                                  {{$item->title }} <span class="dot"></span>
                                </a>
                             @endforeach
                          {{-- </a> <span class="dot"></span> <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut </a> <span class="dot"></span> <a href="#">Duis aute irure dolor in reprehenderit in voluptate velit esse </a> --}}
                            </marquee>
                        </div>
                    </div>
                </div>

              </div>

              {{-- <div class="d-flex">
                <span class="mr-3 text-danger">Wed, March 4, 2020</span>
                <span class="text-danger">30°C,London</span>
              </div> --}}

            </div>
          </div>
        </div>
    
        @yield('content')
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:../partials/_footer.html -->
      
        @include('footer')

        <!-- partial -->
      </div>
    </div>
    
    <script>
      $("#right-to-left-webticker").webTicker({
    height:'75px', 
});
    </script>
    <!-- inject:js -->
    <script src="{{asset('assetsuser/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->

    <script src="{{asset('assetsuser/vendors/aos/dist/aos.js/aos.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{asset('assetsuser/js/demo.js')}}"></script>
    <script src="{{asset('assetsuser/js/jquery.easeScroll.js')}}"></script>
    <!-- End custom js for this page-->


    @yield('script')
  </body>
</html>

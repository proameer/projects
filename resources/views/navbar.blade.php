{{-- <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script> --}}
<link href="{{ asset('assetsuser/css/webticker.css')}}" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="{{ asset('assetsuser/js/jquery.webticker.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#webticker").webTicker();
	// $("#webticker2").webTicker({duplicate:true, speed: 40, direction: 'right', rssurl:'http://yourwebsite.com/rss/', rssfrequency:1, startEmpty:false, hoverpause:false});	
	
	$("#stop").click(function(){
		$("#webticker").webTicker('stop');
	});
	
	$("#continue").click(function(){
		$("#webticker").webTicker('cont');
	});
});
</script>


<header id="header">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light">
    
      <div class="navbar-bottom pt-4" style="margin-right: 10%">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <img
            src="../image/{{ about()[0]->image}}"
            alt="banner"
            class="img-fluid ml-2" width="50px"
          />
            <a class="navbar-brand text-white" href="{{ url('/') }}">   {{ about()[0]->name}}</a>
          </div>
          <div>
            <button  style="margin-left: -100%"
              class="navbar-toggler "
              type="button"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon "></span>
            </button>
            <div
              class="navbar-collapse justify-content-center collapse "
              id="navbarSupportedContent" 
            >
            
              <ul class="navbar-nav d-lg-flex justify-content-between align-items-center">
                <li>
                  <button class="navbar-close">
                    <i class="mdi mdi-close"></i>
                  </button>
                </li>
                <li class="nav-item active  p-2">
                  <a class="nav-link " href="{{ url('/') }}">الرئيسية </a>
                </li>
               
               <li class="nav-item dropdown fs-16 p-2">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  التصنيفات
                </a>               
                <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                  @foreach (category() as $item)                 
                    <a class="dropdown-item" href="{{ url('category' , $item->id) }}">{{$item->nameCategory}}</a>                 
                  @endforeach  
                </div>
               </li>
               <li class="nav-item fs-16 p-2">
                <a class="nav-link" href="{{ route('contacts') }}">تواصل معنا</a>
              </li>
              <li class="nav-item fs-16 p-2">
                <a class="nav-link" href="{{ url('aboutus') }}"> حول</a>
              </li>
              </ul>
            </div>
          </div>
          
          <ul class="navbar-nav" >
            {{-- <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link" target="_blank">تسجيل دخول</a>
            </li> --}}
          </ul>
       
        </div>
      </div>
    </nav>
  </div>
</header>

<footer>
  <div class="footer-top text-right">
    <div class="container">
      <div class="row">

        <div class="col-sm-4">
          <img
          src="../image/{{ about()[0]->image}}"
          alt="banner"
          class="img-fluid ml-2" width="50px"
        />
          <a class="navbar-brand text-white" href="{{ url('/') }}">   {{ about()[0]->name}}</a>
          <h5 class="font-weight-normal mt-4 mb-1">
            {{ about()[0]->description}}
          </h5>
        
        </div>
        <div class="col-sm-4 col-md-4">
          <h3 class="font-weight-bold mb-3">مواقع التواصل</h3>
          <div class="row">
            <div class="col-sm-12">
              <h5 class="font-weight-normal mt-4 mb-5">
                بأمكانكم متابعتنا والتواصل معنا عبر المواقع التالية 
              </h5>
              <ul class="social-media mb-3">
                {{-- {{socialMedia()[0]->logo->nameClass}} --}}
                @foreach (socialMedia() as $item)
                <li>
                  <a href="{{$item->link}}" target="blank">
                    <i class="{{$item->logo->nameClass}}"></i>
                  </a>
                </li>
                @endforeach

              </ul>
            </div>
          </div>

        </div>
        
        <div class="col-sm-4" dir="">
          <h3 class="font-weight-bold mb-3 text-right">التصنيفات</h3>
          {{-- {{category()[0]->nameCategory}} --}}
          @foreach (category() as $item)
          <div class="footer-border-bottom pb-2">
            <div class="d-flex justify-content-between align-items-center">
              <a href="{{ url('category' , $item->id) }}" class="text-white">
              <h5 class="mb-0 font-weight-600">{{$item->nameCategory}}</h5>
            </a>
            </div>
          </div>
          @endforeach
       
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="d-sm-flex justify-content-center align-items-center">
            <div class="fs-14 font-weight-600">
               <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white"> جميع الحقوق محفوظة</a> © 2022- {{ about()[0]->name}} 
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
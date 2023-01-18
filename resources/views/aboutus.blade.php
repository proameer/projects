@extends('master')
@section('title')
{{ about()[0]->name}} | الرئيسية
@endsection
@section('content')
    
      <div class="content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="aboutus-wrapper mb-5">
                    <h1 class="mt-5 text-right">
                      {{$about[0]->name}}
                    </h1>
                    <img
                    src="./image/{{$about[0]->image}}"
                    alt="banner"
                    class="img-fluid mb-5 d-flex justify-content-end" width="200px"
                    />
                    <p class="font-weight-600 fs-15 text-right">
                      {{$about[0]->description}}
                    </p>



                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

 
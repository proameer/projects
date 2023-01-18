@extends('master')
@section('title')
{{ about()[0]->name}} | اتصل بنا
@endsection
<style>
  input::placeholder , textarea::placeholder{
    color: tomato !important;
  }
form {
    background: #ecf5fc;
    padding: 40px 50px 45px;
}
.form-control:focus {
    border-color: #000;
    box-shadow: none;
}
label {
    font-weight: 600;
}
.error {
    color: red;
    font-weight: 400;
    display: block;
    padding: 6px 0;
    font-size: 14px;
    text-align: right;
}
.form-control.error {
    border-color: red;
    padding: .375rem .75rem;
}
</style>
@section('content')
@if($done==1)
<!-- Small modal -->
    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content text-center">
      <br><br><br>
     <h1> تم الارسال بنجاح</h1>
      <br><br><br>
    </div>
  </div>
</div>
@endif
      <div class="content-wrapper">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="aboutus-wrapper">
                    <h1 class="mt-5 text-center mb-5">
                      اتصل بنا
                    </h1>
                    <div class="row">
                      <div class="col-lg-12 mb-5 mb-sm-2">
                      
                        <form method="POST" action="{{ route('contact') }}">
                          @csrf
                          {{method_field('post')}}
                          {{-- {{ csrf_field() }}
                          <input type="hidden" name="_method" value="PUT"> --}}
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input
                                  type="text"
                                  class="form-control {{ $errors->has('name') ? 'error' : '' }}"
                                  name="name"
                                  aria-describedby="name"
                                  placeholder="الاسم الكامل *"
                                  value="{{old('name')}}"
                                />
                                <!-- Error -->
                                @if ($errors->has('name'))
                                <div class="error">
                                    {{ $errors->first('name') }}
                                </div>
                                @endif
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <input
                                  type="email"
                                  class="form-control {{ $errors->has('email') ? 'error' : '' }}"
                                  name="email"
                                  aria-describedby="email"
                                  placeholder="البريد الالكتروني *"
                                  value="{{old('email')}}"
                                />
                                  <!-- Error -->
                                  @if ($errors->has('email'))
                                  <div class="error">
                                      {{ $errors->first('email') }}
                                  </div>
                                  @endif
                              </div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-sm-12 ">
                              <div class="form-group">
                                <input
                                  type="text"
                                  class="form-control {{ $errors->has('subject') ? 'error' : '' }}"
                                  name="subject"
                                  aria-describedby="subject"
                                  placeholder="الموضوع *"
                                  value="{{old('subject')}}"
                                />
                                  <!-- Error -->
                                  @if ($errors->has('subject'))
                                  <div class="error">
                                      {{ $errors->first('subject') }}
                                  </div>
                                  @endif
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                                <textarea
                                class="form-control {{ $errors->has('message') ? 'error' : '' }}"
                                  placeholder="الرسالة *"
                                  name="message"
                                  value="{{old('message')}}"
                                ></textarea>
                                <!-- Error -->
                                @if ($errors->has('message'))
                                <div class="error">
                                    {{ $errors->first('message') }}
                                </div>
                                @endif
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-12">
                              <div class="form-group">
                                {{-- <a
                                  href="#"
                                  class="btn btn-lg btn-dark font-weight-bold mt-3 bg-danger"
                                  >ارسال</a
                                > --}}
                                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">ارسال</button>
                              </div>
                            </div>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   
@endsection


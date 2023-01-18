@extends('layouts.app')
@section('title')
    التواصل الاجتماعي
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  التواصل الاجتماعي
              @endsection
              @section('subTitle-header')
                  اضافة
              @endsection
                    <!-- /# column -->
                    <div class="col-lg-12">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            حدث <strong>خطأ</strong> <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="card">
                            <div class="card-title">
                                <h4>انشاء</h4>
                                <a class="btn btn-primary float-left" href="{{ route('social.index') }}">رجوع</a>

                            </div>
            
          
                            <div class="card-body">
                                <div class="basic-form">
                                
                                      
                                        {!! Form::open(array('route' => 'social.store', 'method'=>'POST' , 'enctype'=>'multipart/form-data')) !!}
                                        {{-- <div class="form-group">
                                            <strong>Name:</strong>
                                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                        </div> --}}
                                        <div class="form-group">
                                            <strong>الرابط:</strong>
                                            {!! Form::text('link', null, array('placeholder' => 'Link','class' => 'form-control')) !!}
                                        </div>
                                        

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2" for="logo_id" class="form-label"> اسم الشعار</label>
                                            <select class="form-control" name="logo_id">
                                              @foreach ($category as $item)
                                              <option value="{{$item->id}}" class="form-control" id="logo_id"name="logo_id" >{{$item->nameClass}}</option>
                                              @endforeach
                                          </select>                        
                                          </div>
                                        <button type="submit" class="btn btn-primary">اضافة</button>
                                    {!! Form::close() !!}
                                       
                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                
            </div>
        </div>
    </div>
 @endsection
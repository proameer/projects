@extends('layouts.app')
@section('title')
    الصلاحيات
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  الصلاحيات
              @endsection
              @section('subTitle-header')
                  اضافة
              @endsection
                    <!-- /# column -->
                    <div class="col-lg-12">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>خطأ!</strong>حدث <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="card">
                            <div class="card-title">
                                <h4>انشاء صلاحية</h4>
                                <a class="btn btn-primary float-left" href="{{ route('permissions.index') }}">رجوع</a>

                            </div>
            
          
                            <div class="card-body">
                                <div class="basic-form">
                                
                                      
                                    {!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}
                                    <div class="form-group">
                                        <strong>اسم الصلاحية:</strong>
                                        {!! Form::text('name', null, array('placeholder' => 'اسم الصلاحية ','class' => 'form-control')) !!}
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
@extends('layouts.app')
@section('title')
    الادوار
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  الادوار
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
                                <h4>انشاء دور</h4>
                                <a class="btn btn-primary float-left" href="{{ route('roles.index') }}">رجوع</a>

                            </div>
            
          
                            <div class="card-body">
                                <div class="basic-form">
                                
                                    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
                                    <div class="form-group">
                                        <strong>اسم الدور:</strong>
                                        {!! Form::text('name', null, array('placeholder' => 'اسم الدور','class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                        <strong>الصلاحيات:</strong>
                                        <br/>
                                        @foreach($permission as $value)
                                            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                            {{ $value->name }}</label>
                                        <br/>
                                        @endforeach
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
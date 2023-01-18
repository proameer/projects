@extends('layouts.app')
@section('title')
    التصنيفات
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  التصنيفات
              @endsection
              @section('subTitle-header')
                  تعديل
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
                                <h4>تعديل تصنيف</h4>
                                <a class="btn btn-primary float-left" href="{{ route('categories.index') }}">رجوع</a>

                            </div>
            
          
                            <div class="card-body">
                                <div class="basic-form">
                                
                                      
                                        {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method'=>'PATCH']) !!}
                                            <div class="form-group">
                                                <strong>التصنيف:</strong>
                                                {!! Form::text('nameCategory', null, array('placeholder' => 'التصنيف','class' => 'form-control')) !!}
                                            </div>
                                           
                                            <button type="submit" class="btn btn-primary">تحديث</button>
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
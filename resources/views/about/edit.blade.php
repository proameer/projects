@extends('layouts.app')
@section('title')
    حول 
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  حول 
              @endsection
              @section('subTitle-header')
                  تعديل
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
                                <h4>تعديل</h4>
                                <a class="btn btn-primary float-left" href="{{ route('about.index') }}">رجوع</a>

                            </div>
            
          
                            <div class="card-body">
                                <div class="basic-form">
                                
                                      
                                    {!! Form::model($post, ['route' => ['about.update', $post->id], 'method'=>'PATCH', 'enctype'=>'multipart/form-data']) !!}
                                    <div class="form-group">
                                        <strong>اسم الموقع:</strong>
                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                        <strong>الوصف:</strong>
                                        {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                        <strong>صورة الموقع:</strong>
                                        <input type="file" name="image"  value="image/{{ old($post->image) }}" class="form-control">
                                        <img src="/image/{{ $post->image }}" alt="" width="100px">
                                        {{-- {!! Form::file('image', null, array('placeholder' => 'Body','value' => 'image/{{ old($post->image) }}','class' => 'form-control')) !!} --}}
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

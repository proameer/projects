@extends('layouts.app')
@section('title')
    المنشورات
@endsection
@section('css')

@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  المنشورات
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
                                <h4>انشاء منشور</h4>
                                <a class="btn btn-primary float-left" href="{{ route('posts.index') }}">رجوع</a>

                            </div>
            
          
                            <div class="card-body" >
                                <div class="basic-form" >
                                
                                      
                                        {!! Form::open(array('route' => 'posts.store', 'method'=>'POST' , 'enctype'=>'multipart/form-data')) !!}
                                        <div class="form-group">
                                            <strong class="text-right">العنوان:</strong>
                                            {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                                        </div>
                                        
                                        <div class="form-group">
                                            <strong>الوصف:</strong>
                                            
                                            {!! Form::textarea('description', null, array('placeholder' => 'description','class' => 'form-control','id'=>'summernote')) !!}
                                        </div>
                                        <div class="form-group">
                                            <strong>الصورة:</strong>
                                            <input type="file" name="image" class="form-control">
                                            {{-- {!! Form::file('image', null, array('placeholder' => 'Body','class' => 'form-control')) !!} --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2" for="category_id" class="form-label"> التصنيف</label>
                                            <select class="form-control" name="category_id">
                                              @foreach ($category as $item)
                                              <option value="{{$item->id}}" class="form-control" id="category_id"name="category_id" >{{$item->nameCategory}}</option>
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

 @section('script')

 @endsection
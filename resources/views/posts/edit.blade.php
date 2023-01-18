@extends('layouts.app')
@section('title')
    المنشورات
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  المنشورات
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
                                <h4>تعديل منشور</h4>
                                <a class="btn btn-primary float-left" href="{{ route('posts.index') }}">رجوع</a>

                            </div>
            
          
                            <div class="card-body">
                                <div class="basic-form">
                                
                                      
                                    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method'=>'PATCH', 'enctype'=>'multipart/form-data']) !!}
                                    <div class="form-group">
                                        <strong>العنوان:</strong>
                                        {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                        <strong>الوصف:</strong>
                                        <textarea name="description" , id="summernote" , class="form-control" , cols="30" rows="10">{{ $post->description }}</textarea>
                                        {{-- {!! Form::textarea('description', null, array('placeholder' => 'description','class' => 'form-control')) !!} --}}
                                    </div>
                                    <div class="form-group">
                                        <strong>الصورة:</strong>
                                        <input type="file" name="image"  value="image/{{ old($post->image) }}" class="form-control">
                                        <img src="/image/{{ $post->image }}" alt="" width="100px">
                                        {{-- {!! Form::file('image', null, array('placeholder' => 'Body','value' => 'image/{{ old($post->image) }}','class' => 'form-control')) !!} --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect2" for="category_id" class="form-label"> التصنيف</label>
                                        <select class="form-control" name="category_id">
                                          @foreach ($category as $item)
                                          <option value="{{$item->id}}" class="form-control" id="category_id"name="category_id" >{{$item->nameCategory}}</option>
                                          @endforeach
                                      </select>                        
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





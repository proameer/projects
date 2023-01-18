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
                  الرئيسية
              @endsection
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                       
                        <!-- /# column -->
                        <div class="col-lg-12">  
                            @can('post-create')                                     
                             <a class="btn btn-success" href="{{ route('about.create') }}">جديد</a>
                            @endcan

                            <div class="card">
                                
                                <div class="card-title">
                                    
                                    <h4>حول </h4>
 
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>اسم الموقع</th>
                                                    <th>صورة الموقع</th>
                                                    <th>الوصف</th>
                                                    <th>الحدث</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $post)
                            <tr class="align-middle">
                                <td class="align-middle">  {{substr($post->name , 0 ,15)}}</td>
                                <td class="align-middle"><img src="/image/{{ $post->image }}" width="70px"></td>
                                <td class="align-middle">  {{substr($post->description , 0 ,50)}}</td>
                                <td class="align-middle">
                                    <a class="btn btn-info" href="{{ route('about.show',$post->id) }}">عرض</a>
                                    @can('post-edit')
                                        <a class="btn btn-primary" href="{{ route('about.edit',$post->id) }}">تعديل</a>
                                    @endcan
                                    @can('post-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['about.destroy', $post->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                                            </tbody>
                                        </table>
                                        {{ $data->appends($_GET)->links() }}
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

             
                </section>
            </div>
        </div>
    </div>
@endsection
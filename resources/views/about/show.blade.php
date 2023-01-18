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
                  عرض
              @endsection
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                       
                        <!-- /# column -->
                        <div class="col-lg-12">  
                            
                           

                            <div class="card">
                                
                                <div class="card-title">
                                    @can('post-list')
                                    <a class="btn btn-primary float-left" href="{{ route('about.index') }}">رجوع</a>                      
                            @endcan
                                    <h4>عرض </h4>
 
                                </div>
                                <div class="card-body">
                                   <div class="row">
                                    <div class="col-md-5">
                                        <div class="lead">
                                             <img src="/image/{{ $about->image }}" class="w-100"> 
                                        </div>
                                       </div>
                                       <div class="col-md-7">
                                        <div class="lead">
                                            <strong>اسم الموقع</strong><br>
                                            {{ $about->name }}
                                        </div><hr>
                                        <div class="lead">
                                            <strong>الوصف</strong><br>
                                            {{ $about->description }}
                                        </div><hr>
                                       
                                       </div>
                                      
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
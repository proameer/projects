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
                                    <a class="btn btn-primary float-left" href="{{ route('social.index') }}">رجوع</a>                      
                            @endcan
                                    <h4>عرض </h4>
 
                                </div>
                                <div class="card-body">
                                   <div class="row">
                               
                                       <div class="col-md-7">

                                        <div class="lead">
                                            <strong>الرابط</strong><br>
                                            {{ $post->link }}
                                        </div><hr>
                                        <div class="lead">
                                            <strong>اسم الشعار</strong><br>
                                            {{ $post->logo->nameClass }}
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

@extends('layouts.app')
@section('title')
    الشعارات
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  الشعارات
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
                                    @can('category-list')
                                    <a class="btn btn-primary float-left" href="{{ route('logo.index') }}">رجوع</a>                      
                            @endcan
                                    <h4>عرض شعار </h4>
 
                                </div>
                                <div class="card-body">
                                   <div class="row">
                                
                                       <div class="col-md-7">
                                        <div class="card-body">
                                            <div class="lead">
                                                <strong>اسم الشعار</strong><br>
                                                {{ $logo->nameClass }}
                                            </div>
                                        </div>
                                       
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
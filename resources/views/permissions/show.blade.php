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
                  الرئيسية
              @endsection
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                       
                        <!-- /# column -->
                        <div class="col-lg-12">  
                            
                           

                            <div class="card">
                                
                                <div class="card-title">
                                    @can('permission-list')
                                    <a class="btn btn-primary float-left" href="{{ route('permissions.index') }}">رجوع</a>                      
                            @endcan
                                    <h4>عرض صلاحية </h4>
 
                                </div>
                                <div class="card-body">
                                   <div class="row">
                                
                                       <div class="col-md-7">
                                        <div class="card-body">
                                            <div class="lead">
                                                <strong>اسم الصلاحية</strong><br>
                                                {{ $permission->name }}
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

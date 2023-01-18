@extends('layouts.app')
@section('title')
    المستخدمين
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  المستخدمين
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
                                    @can('user-list')
                                    <a class="btn btn-primary float-left" href="{{ route('users.index') }}">رجوع</a>                      
                            @endcan
                                    <h4>عرض مستخدم </h4>
 
                                </div>
                                <div class="card-body">
                                   <div class="row">
                                
                                       <div class="col-md-7">
                                        <div class="card-body">
                                            <div class="lead">
                                                <strong>الاسم</strong><br>
                                                {{ $user->name }}
                                            </div>
                                            <div class="lead">
                                                <strong>البريد الالكتروني</strong><br>
                                                {{ $user->email }}
                                            </div>
                                            <div class="lead">
                                                <strong>كلمة المرور</strong><br>
                                                ********
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
@extends('layouts.app')
@section('title')
    الادوار
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  الادوار
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
                                    @can('role-list')
                                    <a class="btn btn-primary float-left" href="{{ route('roles.index') }}">رجوع</a>                      
                            @endcan
                                    <h4>عرض دور </h4>
 
                                </div>
                                <div class="card-body">
                                   <div class="row">
                                
                                    <div class="lead">
                                        <strong>اسم الدور</strong><br>
                                        {{ $role->name }}
                                    </div>
                                    <div class="lead">
                                        <strong>الصلاحيات</strong>
                                        @if(!empty($rolePermissions))
                                            @foreach($rolePermissions as $permission)
                                             <br>   <label class="badge badge-success">{{ $permission->name }}</label>
                                            @endforeach
                                        @endif
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
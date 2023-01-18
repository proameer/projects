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
                            @can('permission-create')                                     
                             <a class="btn btn-success" href="{{ route('permissions.create') }}">صلاحية جديده</a>
                            @endcan

                            <div class="card">
                                
                                <div class="card-title">
                                    
                                    <h4>الصلاحيات </h4>
 
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>اسم الصلاحية</th>
                                                    <th>الحدث</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $permission)
                                                <tr>
                                                    <td>{{ $permission->name }}</td>
                                                    <td>
                                                        <a class="btn btn-info" href="{{ route('permissions.show',$permission->id) }}">عرض</a>
                                                        @can('permission-edit')
                                                            <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">تعديل</a>
                                                        @endcan
                                                        @can('permission-delete')
                                                            {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
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
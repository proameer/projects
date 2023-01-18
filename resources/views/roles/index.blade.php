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
                  الرئيسية
              @endsection
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                       
                        <!-- /# column -->
                        <div class="col-lg-12">  
                            @can('role-create')                                     
                             <a class="btn btn-success" href="{{ route('roles.create') }}">دور جديد</a>
                            @endcan

                            <div class="card">
                                
                                <div class="card-title">
                                    
                                    <h4>الادوار </h4>
 
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>اسم الدور</th>
                                                    <th>الحدث</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $role)
                                                <tr>
                                                    <td>{{ $role->name }}</td>
                                                    <td>
                                                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">عرض</a>
                                                        @can('role-edit')
                                                            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">تعديل</a>
                                                        @endcan
                                                        @can('role-delete')
                                                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                            {!! Form::submit('حذف', ['class' => 'btn btn-danger']) !!}
                                                            {!! Form::close() !!}
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{-- {{ $data->appends($_GET)->links() }} --}}
                                        {{ $data->render() }}
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
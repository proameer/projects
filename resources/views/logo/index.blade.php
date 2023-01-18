@extends('layouts.app')
@section('title')
    شعارات
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  شعارات
              @endsection
              @section('subTitle-header')
                  الرئيسية
              @endsection
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                      
                        <!-- /# column -->
                        <div class="col-lg-12">  
                           
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p class="text-light">{{ \Session::get('success') }}</p>
                            </div>
                        @endif
                            @can('category-create')                                     
                             <a class="btn btn-success" href="{{ route('logo.create') }}">شعار جديد</a>
                            @endcan
                            
                            <div class="card">
                               
                                <div class="card-title">
                                    
                                    <h4>شعار </h4>
 
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>اسم الشعار</th>
                                                    <th>الحدث</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                        @foreach ($data as $key => $logo)
                        <tr>
                            <td class="align-middle">{{ $logo->nameClass }}</td>
                            <td class="align-middle">
                                <a class="btn btn-info" href="{{ route('logo.show',$logo->id) }}">عرض</a>
                                @can('logo')
                                    <a class="btn btn-primary" href="{{ route('logo.edit',$logo->id) }}">تعديل</a>
                                @endcan
                                @can('logo')
                                    {!! Form::open(['method' => 'DELETE','route' => ['logo.destroy', $logo->id],'style'=>'display:inline']) !!}
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
 
    <script src="{{asset('assets/js/lib/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/toastr/toastr.init.js')}}"></script>
    <script src="{{asset('assets/js/lib/bootstrap.min.js')}}"></script>
@endsection
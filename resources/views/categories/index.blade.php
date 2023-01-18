@extends('layouts.app')
@section('title')
    التصنيفات
@endsection
@section('css')

@endsection
@section('content')

<div class="toastr">
    <div class="text-center">
        @if (Session::has('success'))
        {{ Session::get('success') }}
        @endif
    </div>
</div>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  التصنيفات
              @endsection
              @section('subTitle-header')
                  الرئيسية
              @endsection
                <!-- /# row -->
               
                <section id="main-content">
                    <div class="row">
                      
                        <!-- /# column -->
                        <div class="col-lg-12">  
                         
                          
                            @can('category-create')                                     
                             <a class="btn btn-success" href="{{ route('categories.create') }}">تصنيف جديد</a>
                            @endcan
                            
                            <div class="card">
                               
                                <div class="card-title">
                                    
                                    <h4>التصنيفات </h4>
 
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>التصنيف</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                        @foreach ($data as $key => $category)
                        <tr>
                            <td class="align-middle">{{ $category->nameCategory }}</td>
                            <td class="align-middle">
                                <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">عرض</a>
                                @can('category-edit')
                                    <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">تعديل</a>
                                @endcan
                                @can('category-delete')
                                    {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $category->id],'style'=>'display:inline']) !!}
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

@section('script')

@endsection
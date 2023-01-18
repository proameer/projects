@extends('layouts.app')
@section('title')
    رسائل المستخدمين 
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  رسائل المستخدمين 
              @endsection
              @section('subTitle-header')
                  الرئيسية
              @endsection
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                       
                        <!-- /# column -->
                        <div class="col-lg-12">  
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>خطأ!</strong>حدث <br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            {{-- @can('post-create')                                     
                             <a class="btn btn-success" href="{{ route('contact.create') }}">New Contact</a>
                            @endcan --}}

                            <div class="card">
                                
                                <div class="card-title">
                                    
                                    <h4>رسائل المستخدمين </h4>
 
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>اسم المستخدم</th>
                                                    <th>البريد الالكتروني </th>
                                                    <th>الموضوع </th>
                                                    <th>الرسالة </th>
                                                    <th>الحدث</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $post)
                            <tr class="align-middle">
                                <td class="align-middle">  {{substr($post->name , 0 ,15)}}</td>
                                <td class="align-middle">  {{substr($post->email , 0 ,50)}}</td>
                                <td class="align-middle">  {{substr($post->subject , 0 ,50)}}</td>
                                <td class="align-middle">  {{substr($post->message , 0 ,50)}}</td>
                                <td class="align-middle">
                                    <a class="btn btn-info" href="{{ route('contact.show',$post->id) }}">عرض</a>
                                    {{-- @can('post-edit')
                                        <a class="btn btn-primary" href="{{ route('contact.edit',$post->id) }}">Edit</a>
                                    @endcan --}}
                                    @can('post-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['contact.destroy', $post->id],'style'=>'display:inline']) !!}
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
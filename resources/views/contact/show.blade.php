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
                  عرض
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
                           

                            <div class="card">
                                
                                <div class="card-title">
                                    @can('post-list')
                                    <a class="btn btn-primary float-left" href="{{ route('contact.index') }}">رجوع</a>                      
                            @endcan
                                    <h4>عرض رسائل المستخدمين </h4>
 
                                </div>
                                <div class="card-body">
                                   <div class="row">
                               
                                       <div class="col-md-7">
                                        <div class="lead">
                                            <strong>اسم المستخدم</strong><br>
                                            {{ $contact->name }}
                                        </div><hr>
                                        <div class="lead">
                                            <strong>البريد الالكتروني</strong><br>
                                            {{ $contact->email }}
                                        </div><hr>
                                        <div class="lead">
                                            <strong>الموضوع</strong><br>
                                            {{ $contact->subject }}
                                        </div><hr>
                                        <div class="lead">
                                            <strong>الرسالة</strong><br>
                                            {{ $contact->message }}
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
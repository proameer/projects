@extends('layouts.app')
@section('title')
    contact 
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                  contact 
              @endsection
              @section('subTitle-header')
                  add
              @endsection
                    <!-- /# column -->
                    <div class="col-lg-12">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <div class="card">
                            <div class="card-title">
                                <h4>Create social media</h4>
                                <a class="btn btn-primary float-right" href="{{ route('contact.index') }}">back</a>

                            </div>
            
          
                            <div class="card-body">
                                <div class="basic-form">
                                
                                      
                                        {!! Form::open(array('route' => 'contact.store', 'method'=>'POST' , 'enctype'=>'multipart/form-data')) !!}
                                        <div class="form-group">
                                            <strong>Name:</strong>
                                            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                        </div>
                                        <div class="form-group">
                                            <strong>Email:</strong>
                                            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                        </div>
                                        {!! Form::open(array('route' => 'social.store', 'method'=>'POST' , 'enctype'=>'multipart/form-data')) !!}
                                        <div class="form-group">
                                            <strong>Subject:</strong>
                                            {!! Form::text('subject', null, array('placeholder' => 'Subject','class' => 'form-control')) !!}
                                        </div>
                                        <div class="form-group">
                                            <strong>Message:</strong>
                                            {!! Form::text('message', null, array('placeholder' => 'Message','class' => 'form-control')) !!}
                                        </div>

                                        <button type="submit" class="btn btn-primary">Add</button>
                                    {!! Form::close() !!}
                                       
                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="extra-area-chart"></div>
                            <div id="morris-line-chart"></div>
                            <div class="footer">
                                <p>2018 © Admin Board. -
                                    <a href="#">example.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
 @endsection
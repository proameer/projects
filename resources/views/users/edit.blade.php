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
                  تعديل
              @endsection
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
                                <h4>تعديل مستخدم</h4>
                                <a class="btn btn-primary float-left" href="{{ route('users.index') }}">رجوع</a>

                            </div>
            
          
                            <div class="card-body">
                                <div class="basic-form">
                                
                                      
                                    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method'=>'PATCH']) !!}
                                    <div class="form-group">
                                        <strong>الاسم:</strong>
                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                        <strong>البريد الالكتروني:</strong>
                                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                        <strong>كلمة المرور:</strong>
                                        {!! Form::password('password', array('placeholder' => 'كلمة المرور','class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                        <strong>تأكيد كلمة المرور:</strong>
                                        {!! Form::password('password_confirmation', array('placeholder' => 'تأكيد كلمة المرور','class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                        <strong>الدور:</strong>
                                        {!! Form::select('roles[]', $roles, $userRole, array('class' => 'form-control','multiple')) !!}
                                    </div>
                                    <button type="submit" class="btn btn-primary">تحديث</button>
                                {!! Form::close() !!}
                                    
                                       
                             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /# row -->
              
            </div>
        </div>
    </div>
@endsection

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
                  الرئيسية
              @endsection
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                       
                        <!-- /# column -->
                        <div class="col-lg-12">  
                            @can('user-create')                                     
                             <a class="btn btn-success" href="{{ route('users.create') }}">مستخدم جديد</a>
                            @endcan

                            <div class="card">
                                
                                <div class="card-title">
                                    
                                    <h4>المستخدمين </h4>
 
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>الاسم</th>
                                                    <th>البريد الالكتروني</th>
                                                    <th>الدور</th>
                                                    <th>الحدث</th>
                                                </tr>
                                            </thead>
                                            <tbody>
              

                    @foreach ($data as $key => $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $val)
                                    <label class="badge badge-dark">{{ $val }}</label>
                                @endforeach
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">عرض</a>
                            @can('user-edit')
                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">تعديل</a>
                            @endcan
                            @can('user-delete')
                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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
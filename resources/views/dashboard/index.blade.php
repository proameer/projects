@extends('layouts.app')
@section('title')
    التواصل الاجتماعي
@endsection
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
              @section('title-header')
                   لوحة التحكم
              @endsection
              @section('subTitle-header')
                  الرئيسية
              @endsection
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid2 color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text"> المنشورات</div>
                                        <div class="stat-digit">{{$postCount}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">المستخدمين</div>
                                        <div class="stat-digit">{{$userCount}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid3 color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">التصنيفات</div>
                                        <div class="stat-digit">{{$categoryCount}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid3 color-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">الادوار</div>
                                        <div class="stat-digit">{{$roleCount}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-email color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">الرسائل</div>
                                        <div class="stat-digit">{{$contactCount}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-facebook color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">مواقع التواصل </div>
                                        <div class="stat-digit">{{$socialCount}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">الشعارات</div>
                                        <div class="stat-digit">{{$logoCount}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid4 color-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">الصلاحيات</div>
                                        <div class="stat-digit">{{$permissionCount}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            



                </section>
            </div>
        </div>
    </div>
@endsection
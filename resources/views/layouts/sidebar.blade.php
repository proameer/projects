
        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content" style="">
                    <div class="logo"><a href="{{ url('home') }}"><!-- <img src="assets/images/logo.png" alt="" /> --><span>وكالة تنوير نيوز</span></a></div>
                    <ul class="mb-5">
                        <li><a class="nav-link" href="{{ route('home') }}"> <i class="ti-user"></i> {{ Auth::user()->name }}</a></li>

                        <li class="label">الرئيسية</li>
                      
                        <li><a href="{{ url('home') }}"><i class="ti-layout-grid2-alt"></i>لوحة التحكم </a></i></li>

                        @can('post-list')
                        <li><a href="{{ route('posts.index') }}"><i class="ti-pencil-alt"></i>المنشورات</a></li>
                        @endcan
                        @can('category-list')
                        <li><a href="{{ route('categories.index') }}"><i class="ti-pencil-alt"></i>التصنيفات</a></li>
                        @endcan
                        @can('user-list')
                        <li><a href="{{ route('users.index') }}"><i class="ti-pencil-alt"></i>المستخدمين</a></li>
                        @endcan
                        @can('role-list')
                        <li><a href="{{ route('roles.index') }}"><i class="ti-pencil-alt"></i>الادوار</a></li>
                        @endcan
                        @can('permission-list')
                        <li><a href="{{ route('permissions.index') }}"><i class="ti-pencil-alt"></i>الصلاحيات</a></li>
                        @endcan

                        
                        <li class="label">الاعدادات</li>
                        {{-- <li><a class="sidebar-sub-toggle"><i class="ti-settings"></i>  Settings  <span class="sidebar-collapse-icon ti-angle-down"></span></a> --}}
                        {{-- <ul> --}}
                            @can('logo')
                               <li><a href="{{ route('logo.index') }}"><i class="ti-layout-grid2"></i> شعارات</a></li>
                            @endcan
                            @can('contact')
                                <li><a href="{{ route('contact.index') }}"><i class="ti-email"></i>رسائل المستخدمين</a></li>
                            @endcan
                            @can('about')
                                <li><a href="{{ route('about.index') }}"><i class="ti-layout-grid2"></i>حول </a></li>
                            @endcan
                            @can('social-media')
                                <li><a href="{{ route('social.index') }}"><i class="ti-layout-grid2"></i>التواصل الاجتماعي</a></li>
                            @endcan
                        {{-- </ul> --}}

                        {{-- <li><a href="{{ route('index') }}"><i class="ti-email"></i>website</a></li> --}}



                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->
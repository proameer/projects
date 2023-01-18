@extends('layouts.app')
@section('title')
    المنشورات
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
                  المنشورات
              @endsection
              @section('subTitle-header')
                  الرئيسية
              @endsection
                <section id="main-content">
                    <div class="row">     
                        <div class="show"></div>        
                        <!-- /# column -->
                        <div class="col-lg-12">  
                            @can('post-create')                                     
                             <a class="btn btn-success" href="{{ route('posts.create') }}">منشور جديد</a>
                            @endcan

                            <div class="card">
                                
                                <div class="card-title">
                                    
                                    <h4>المنشورات </h4>
 
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <th>العنوان</th>
                                                    <th>التصنيف</th>
                                                    <th>الصورة</th>
                                                    <th>الحدث</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $key => $post)
                            <tr class="align-middle">
                                <td class="align-middle">  {{substr($post->title , 0 ,15)}}</td>
                                <td class="align-middle">{{ $post->category->nameCategory }}</td>
                                <td class="align-middle"><img src="/image/{{ $post->image }}" width="70px"></td>
                                {{-- <td class="align-middle">  {!! substr($post->description , 0 ,50) !!}</td> --}}
                                <td class="align-middle">
                                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">عرض</a>
                                    @can('post-edit')
                                        <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">تعديل</a>
                                    @endcan
                                    @can('post-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post->id],'style'=>'display:inline']) !!}
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
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
 <script type="text/javascript">
  
      $('.show').click(function(event) {
           var form =  $(this).closest("form");
           var name = $(this).data("name");
           event.preventDefault();
           swal({
               title: `Are you sure you want to delete this record?`,
               text: "If you delete this, it will be gone forever.",
               icon: "warning",
               buttons: true,
               dangerMode: true,
           })
           .then((willDelete) => {
             if (willDelete) {
               form.submit();
             }
           });
       });
   
 </script>
 @endsection


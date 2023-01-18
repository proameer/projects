@extends('master')
@section('title')
{{ about()[0]->name}} | {{$posts->title}}
@endsection
@section('css')

@endsection
@section('content')

    

        <div class="content-wrapper" dir="ltr">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">
                          
                    <div class="col-lg-8 text-right">
                      <div>
                        <h1 class="font-weight-600 mb-1">
                          {{$posts->title}}
                        </h1>
                        <p class="fs-16 text-muted mb-0">
                          <span class="mr-2">تم النشر بتاريخ </span> {{$posts->created_at->timezone('Asia/Baghdad')->toDateTimeString()}}
                        </p>
                        <div class="rotate-img">
                          <img
                            src="../image/{{$posts->image}}"
                            alt="banner"
                            class="img-fluid mt-4 mb-4 w-100"
                          />
                        </div>
                        <div class="mb-4 fs-15" style="text-align: end;">
                            {{-- {{$posts->description}} --}}
                            {!! $posts->description !!}
                        </div>
                        <h2 class="mt-5 bold text-center"> : شارك المنشور على </h2>
                        <div class="row d-flex justify-content-center">                         
                          @foreach ($shareSocial as $key => $item)
                            <div class="badge badge-secondary p-3 m-2 ">
                              <a class="fs-16 text-light" target="_blank" href=" {!! $item !!}"> {!! $key !!}</a>
                            </div>
                          @endforeach
                      </div>
                      </div>
                      <div>
                    
                      </div>
                      <div>
                    
                      </div>
               
                    </div>
               

                    <div class="col-lg-4 text-right bg-light">
                      <h2 class="mt-2 text-primary font-weight-600">
                        التصنيفات
                      </h2>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-12">
                                @foreach ($category as $item)
                                <a href="{{url('category' , $item->id)}}">
                                  <h1 class="m-1 p-2 w-5 badge badge-danger">{{$item->nameCategory}}</h1>
                                </a>
                                @endforeach
                     

                           
                              </div>
                             
                            </div>
                          </div>
                        </div>
                      </div>
                      
      

                      <h2 class="my-4 text-primary font-weight-600">
                        اخر الاخبار 
                      </h2>
                      @foreach ($latestPost as $item)
                        <a href="{{url('singleCategory' , $item->id)}}">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="border-bottom pb-4 pt-4">
                                <div class="row">
                                  <div class="col-sm-8">
                                    <h5 class="font-weight-600 mb-1">
                                      {{$item->title}}
                                    </h5>
                                    <p class="fs-13 text-muted mb-0">
                                      <span class="mr-2">تم النشر </span>{{$item->created_at->diffForHumans();}}
                                    </p>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="rotate-img">
                                      <img
                                        src="../image/{{$item->image}}"
                                        alt="banner"
                                        class="img-fluid" width="100px"
                                      />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div> 
                        </a>
                      @endforeach
              
                    
                    </div>

                        
                    <div class="post-comment-section text-right">
                      <h3 class="font-weight-600 text-right">منشورات ذات صله</h3>
                      <div class="row" dir="rtl">
                          @foreach ($postByCategory as $item)
                         
                            
                        <div class="col-sm-12 col-md-6 col-lg-3">
                          <a href="{{url('singleCategory' , $item->id)}}">
                          <div class="post-author">
                            <div class="rotate-img">
                              <img
                              src="../image/{{$item->image}}"
                                alt="banner"
                                class="img-fluid w-100"
                              />
                            </div>
                            <div class="post-author-content">
                              <h5 class="mb-1">
                                  {{$item->title}}
                              </h5>
                              <p class="fs-13 text-muted mb-0">
                                <span class="mr-2"> تم النشر </span>{{$item->created_at->diffForHumans();}}
                              </p>
                            </div>
                          </div>
                        </a>
                        </div>
                        
                        @endforeach

                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
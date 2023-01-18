@extends('master')

@section('title')
{{ about()[0]->name}} | الرئيسية
@endsection
@section('content')

        <div class="content-wrapper" dir="ltr">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                  <div class="row">

                   

                    <div class="col-lg-8 text-right">
                  

                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                          <div class="carousel-inner">
                              @foreach($slider as $key => $item)
                              <div class="carousel-caption">
                                <a href="{{url('singleCategory' , $item->id)}}">
                                <h3 class=" p-2 mb-0 text-light">{{$item->title}}</h3>
                              </a>
                              </div>
                                  <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                    <img src="{{url('image', $item->image)}}" class="d-block w-100"  alt="..." style="filter: brightness(30%); height: 400px !important;"> 
                                    
                                  </div>
                             
                              @endforeach
                          </div>
                          <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                      </div>
                      
                        {{-- <h1 class="font-weight-600 mb-1">
                          {{$post[0]->title}}
                        </h1>
                        <p class="fs-16 text-muted mb-0">
                          <span class="mr-2"> {{$post[0]->created_at->timezone('Asia/Baghdad')->toDateTimeString()}}</span> تم النشر بتاريخ
                        </p>
                        <div class="rotate-img">
                          <img
                            src="../image/{{$post[0]->image}}"
                            alt="banner"
                            class="img-fluid mt-4 mb-4 w-100"
                          />
                        </div>
                        <p class="fs-13 p-2 text-muted mb-0">
                          <span class="mr-2"></span> {!! $post[0]->description !!}
                        </p> --}}
                     

                      {{-- <h2 class="mt-5 bold text-center"> : شارك المنشور على </h2>
                      <div class="row d-flex justify-content-center">                         
                        @foreach ($shareSocial as $key => $item)
                          <div class="badge badge-secondary p-3 m-2 ">
                            <a class="fs-16 text-light" target="_blank" href=" {!! $item !!}"> {!! $key !!}</a>
                          </div>
                        @endforeach
                    </div> --}}
                    
                      @foreach ( $posts as $key => $item)   
                      <hr>            
                      <div class="row text-right" dir="rtl">
                        <div class="col-sm-4">
                          <div class="rotate-img">
                            <img
                            src="../image/{{$item->image}}"
                            alt="banner"
                            class="img-fluid" width="180px"
                          />
                        
                          </div>
                        </div>
                        <div class="col-sm-8">
                         <a href="{{url('singleCategory' , $item->id)}}">
                            <h2 class="font-weight-600 mb-2 text-dark">
                                {{ $item->title}}
                              </h2>
                         </a>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">تم النشر </span>{{$item->created_at->diffForHumans();}}
                          </p>
                          <span class="badge badge-danger"> {{ $item->category->nameCategory }}</span>
                          {{-- <p class="fs-15">
                            {!! substr($item->description , 0 ,70) !!}
                          </p> --}}
                        </div>
                      </div>
                    
                      @endforeach
                      <div>
                       
                      
                      </div>
                      <div>

                      </div>
                
                
                    </div>
                 
            

                    <div class="col-lg-4 text-right bg-light">
                      <h2 class="mt-2 text-primary font-weight-600">
                        التصنيفات
                      </h2>

                      {{-- <ul class="vertical-menu">
                        @foreach ($category as $item)
                        <li><a  class="badge badge-danger text-light my-2 py-2" href="{{url('category' , $item->id)}}">{{$item->nameCategory}}</a></li>
                        @endforeach
                      </ul> --}}
                 
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
                                        src="image/{{$item->image}}"
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
                    <div class="post-comment-section text-right" dir="rtl">
                      <h3 class="font-weight-600">اخبار عشوائية</h3>
                      <div class="row">

                        @foreach ($postByCategory as $item)
                            
                        
                        <div class="col-sm-12 col-md-6 col-lg-3">
                          <a href="{{url('singleCategory' , $item->id)}}">
                          <div class="post-author">
                            <div class="rotate-img">
                              <img style="height: 120px;
                              width: 100%;"
                                src="image/{{$item->image}}"
                                alt="banner"
                                class="img-fluid"
                              />
                            </div>
                            <div class="post-author-content">
                              <h5 class="mb-1">
                                {{$item->title}}
                              </h5>
                              <span class="badge badge-secondary">{{$item->category->nameCategory}}</span>

                              <p class="fs-13 text-muted mb-0">
                                <span class="mr-2">تم النشر </span>{{$item->created_at->diffForHumans();}}
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
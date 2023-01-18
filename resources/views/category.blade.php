@extends('master')
@section('title')
{{ about()[0]->name}} | التصنيفات
@endsection
@section('content')
    

       <div class="content-wrapper text-right" dir="ltr">
          <div class="container">
            <div class="col-sm-12">
              <div class="card" data-aos="fade-up">
                <div class="card-body">
                
                  <div class="row ">
                    <div class="col-lg-8">
                        @foreach ( $post as $key => $item)               
                      <div class="row" dir="rtl">
                        <div class="col-sm-4">
                          <div class="rotate-img">
                            <img
                            src="../image/{{$item->image}}"
                            alt="banner"
                            class="img-fluid" width="180px"
                          />
                        
                          </div>
                        </div>
                        <div class="col-sm-8 ">
                         <a href="{{url('singleCategory' , $item->id)}}">
                            <h2 class="font-weight-600 mb-2">
                                {{ $item->title}}
                              </h2>
                         </a>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">تم النشر </span>{{$item->created_at->diffForHumans();}}
                          </p>
                          <span class="badge badge-danger"> {{ $item->category->nameCategory }}</span>
                          {{-- <p class="fs-15">
                            {!! substr($item->description , 0 ,30) !!}                           
                          </p> --}}
                        </div>
                      </div>
                      <hr>
                      @endforeach
                      
                    </div>
                    
                    <div class="col-lg-4 text-right bg-light">
                      <div class="row bg-danger">
                        <div class="col-sm-12">
                          <h1 class="font-weight-600 text-light mt-2">
                            {{ $category->nameCategory }}
                            {{-- {{ $post->title }} --}}
                          
                          
                          </h1>
                        </div>
                      </div>
                      <h2 class="mt-2 text-primary font-weight-600">
                        التصنيفات
                      </h2>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-4 pt-4">
                            <div class="row">
                              <div class="col-sm-12">
                                @foreach ($categoryname as $item)
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

     
        <!-- partial -->
      </div>
@endsection
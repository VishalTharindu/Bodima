<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles&Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
        <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}">
        <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
        <link href="{{asset('css/css/mdb.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/jquery.rateyo.min.css')}}">
        <style>
          .dis{
            color: #000;
          }
          .seemorebtn{
            color: #fff!important;
          }
        </style>

    </head>
    <body>
        @include('incfile.headersec')

        @include('sweet::alert')
        {{-- recomonded post section --}}

      <div class="recomod">
        <div class="container">
          <h2 class="font-weight-bold my-3">Highest Rating Boardings</h2>
          <p class="dis w-responsive mx-auto mb-5">Those are the Highest rating bording for you to check.those would be good offers for you</p>        
          <div class="row text-center">
            @foreach ($Boarding as $item)
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
              <div class="view overlay rounded z-depth-1">
                <img src="/images/uploads/boardingimg/{{json_decode($item->filename)[0]}}" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <div class="card-body">
              <h5 class="font-weight-bold my-3">{{$item->boardingType}} For Rent, <span>{{$item->District}}</span> </h5>                         
              <hr>
                <p class="dis">{{str_limit(str_replace("&nbsp;",'',strip_tags($item->Description)),100)}}
                </p>             
                <div class="d-flex justify-content-center">
                  <form action="/make/rating" method="post">
                    @csrf
                    <div id="rating" class="rateyo" data-rateyo-rating="{{getRatingOverallById($item->id)}}"
                    data-rateyo-spacing="10px"
                    data-rateyo-rated-fill="#FF0000"
                    data-rateyo-num-stars="5"
                    data-rateyo-score="3"
                    ></div>                                              
                  </form>
                </div>                
                <div class="my-4"></div>
                <a href="/view/{{getBoardingTypeIdById($item->id)}}/{{getPropertyTypeIdById($item->id)}}" class="btn btn-indigo btn-sm seemorebtn"><i class="fas fa-clone left"></i> see more</a>
                @if (($item->user->usertype)== '1')
                <div class="my-4"></div>
                <div class="d-flex justify-content-center">
                  <figure class="image is-96x96 is-responsive">
                    <img src="/images/premium2.png" alt="Placeholder image">
                  </figure>
                </div>                          
                @endif
              </div>
            </div>
            @endforeach
          </div>
          <hr class="hrline">
          <div class="">
            <h2 class="font-weight-bold my-3 text-dark">Top Adds</h2>
          </div>
          <div class="my-4"></div>
          <div class="row text-center">
           @php
               $count = 0;
           @endphp         
            @foreach ($premiumboardings as $post)
              @if ($count < 3)
                  @if (($post->user->usertype)== '1')
                  @php
                      $count++;
                  @endphp         
                  <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                    <div class="view overlay rounded z-depth-1">
                      <img src="/images/uploads/boardingimg/{{json_decode($post->filename)[0]}}" class="img-fluid" alt="Sample project image">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
                    <div class="card-body">
                    <h5 class="font-weight-bold my-3">{{$post->boardingType}} For Rent, <span>{{$post->District}}</span> </h5>                         
                    <hr>
                      <p class="dis">{{str_limit(str_replace("&nbsp;",'',strip_tags($post->Description)),100)}}
                      </p>             
                      <div class="d-flex justify-content-center">
                        <form action="/make/rating" method="post">
                          @csrf
                          <div id="rating" class="rateyo" data-rateyo-rating="{{getRatingOverallById($post->id)}}"
                          data-rateyo-spacing="10px"
                          data-rateyo-rated-fill="#FF0000"
                          data-rateyo-num-stars="5"
                          data-rateyo-score="3"
                          ></div>                                              
                        </form>
                      </div>                
                      <div class="my-4"></div>
                      <a href="/view/{{getBoardingTypeIdById($post->id)}}/{{getPropertyTypeIdById($post->id)}}" class="btn btn-indigo btn-sm seemorebtn"><i class="fas fa-clone left"></i> see more</a>
                      <div class="my-4"></div>
                      <div class="d-flex justify-content-center">
                        <figure class="image is-96x96 is-responsive">
                          <img src="/images/premium2.png" alt="Placeholder image">
                        </figure>
                      </div>                          
                  </div>
                </div>              
                @endif
              @else
                  
              @endif
              
            @endforeach           
          </div>
          <div class="d-flex justify-content-center">
            <a href="/show/premiumuser/boarding" class=" btn btn-primary text-dark">More Post <i class="fas fa-arrow"></i> </a>
          </div>          
        </div>
      </div>
        
        {{-- footer section start --}}

        <div class="footsec" style="background-color:black">
            <div class="container">
                <div class="block">
                    <div class="columns">
                        <div class="column">
                            <div class="ftsec fstcl">
                                <h2 style="color:#fff">About bodima.lk</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                <ul class="">
                                    <li><a href="#"><span class="fas fa-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-arrow-right"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="fa fa-arrow-right"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ftsec seccl">
                                <h2 style="color:#fff">Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspHome</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspAbout</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspServices</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspProjects</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspContact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ftsec tridcl">
                                <h2 style="color:#fff">Services</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspWeb Design</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspWeb Development</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspBusiness Strategy</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspData Analysis</a></li>
                                    <li><a href="#"><span class="fa fa-arrow-right"></span>&nbspGraphic Design</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="column">
                            <div class="ftsec fortcl">
                                <h2 class="ftco-heading-2" style="color:#fff">Have a Questions?</h2>
                                <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">205 colombo 7, SriLnka</span></li>
                                    <li><a href="#"><span class="icon icon-phone"></span><span class="text">+11 25 34 689</span></a></li>
                                    <li><a href="#"><span class="icon icon-envelope"></span><span class="text">bodimahelp@gmail.com</span></a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

{{-- script section --}}

    {{-- <script type="text/javascript" src={{asset('js/jquery-3.4.1.min.js')}}></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src={{asset('js/popper.min.js')}}></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src={{asset('js/bootstrap.min.js')}}></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src={{asset('js/mdb.min.js')}}></script> --}}
    <script src="{{asset('js/jquery.rateyo.min.js')}}"></script>
    <script>
      $(function () {

               //returns a jQuery Element
              $(".rateyo").rateYo().on("rateyo.change",function (e, data){
              
                  var rating  = data.rating;
                  $(this).parent().find('score').text('score :' + $(this).attr('data-rateyo-score'));
                  $(this).parent().find('.result').text('rating :'+ rating);
                  $(this).parent().find('input[name=rating]').val(rating);

              });

      });
  </script>

</html>

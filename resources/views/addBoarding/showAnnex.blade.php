<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}">
    <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery.rateyo.min.css')}}">
    <link href={{asset('css/toastr.min.css')}} rel="stylesheet">
    <title>Bodimalk-Annex</title>

    <style>
      .is-centered{
        margin-left: 18%;
      }
      .containexnew{
        margin-left: 5%;
        margin-right: 5%;
      }

      .select, .select select{
            width: 100%;
        }
    </style>

</head>
<body>
  @include('incfile.navibar')
  <div class="my-5"></div>
    <div class="containexnew">
      <div class="">
        <div class="columns">
          <div class="col-md-12 boardingSearch">
            <div class="card">
              <div class="card-body">
                <form action="/searchresult/annex/" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="field has-addons has-addons-fullwidth">
                        <div class="control is-12 is-centered">
                          <input class="input is-medium is-success" name="searchquery" type="text" placeholder="Find a repository">
                        </div>
                        <div class="control">
                          <button type="submit" class="button is-success is-medium has-text-white">Search</button>                          
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="my-3"></div>
                  <div class="row">
                    <div class="col-md-2">                    
                        <label for="" class="label">With Furniture</label>
                        <div class="control">
                          <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="furniture">
                        </div>
                    </div>
                    <div class="col-md-2">
                      <label for="" class="label">AC Availability</label>
                        <div class="control">
                          <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="ac">
                        </div>
                    </div>
                    <div class="col-md-2">
                      <div class="control is-6 has-icon-left">
                        <label for="" class="label">Number of Room</label>
                        <div class="select is-info">
                            <select name="room">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="More">More</option>
                            </select>
                        </div>
                      </div>
                    </div>  
                    <div class="col-md-3">
                      <label for="" class="label">Boarding Type</label>
                        <div class="select is-info">
                            <select name="brtype">
                                <option value="Anex">Annex</option>                             
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">                      
                    </div>
                  </div>                
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my-5"></div>
      <div class="columns">
        @foreach ($Anex as $post)
          <div class="column is-4 center-responsive">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="/images/uploads/boardingimg/{{json_decode($post->boarding->filename)[0]}}" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="/images/prof.jpg" alt="Placeholder image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <p class="title is-5"><span>{{$post->boarding->boardingType}}</span> For Rent</p>
                    <hr>
                    <h4 class="title is-6 has-text-dark">Rs: <span>{{$post->boarding->MonthlyRent}} Per Month</span></h4>
                    <p class="subtitle is-6">@<span>{{$post->boarding->user->name}}</span></p>
                  </div>
                  @if (($post->boarding->user->usertype)== '1')
                    <div class="media-right">
                      <figure class="image is-96x96 is-responsive">
                        <img src="/images/premium2.png" alt="Placeholder image">
                      </figure>
                    </div>                          
                    @endif
                </div>
            
                <div class="content">
                  {{str_limit(str_replace("&nbsp;",'',strip_tags($post->boarding->Description)),100)}}
                  <br>
                  <div class="my-3"></div>                      
                  <time datetime="2016-1-1">{{$post->created_at->isoFormat('LLLL')}}</time>
                  <div class="my-2"></div>
                  <div class="my-2"></div>                                              
                  <form action="/make/rating" method="post">
                    @csrf
                    <div id="rating" class="rateyo" data-rateyo-rating="{{getRatingOverallById($post->boarding->id)}}"
                    data-rateyo-spacing="10px"
                    data-rateyo-rated-fill="#FF0000"
                    data-rateyo-num-stars="5"
                    data-rateyo-score="3"
                    ></div>                                              
                  </form>

                  <div class="my-3"></div>
                  
                  <!-- Go to www.addthis.com/dashboard to customize your tools -->
                  <div class="addthis_inline_share_toolbox_b5ql"></div>
                  <div class="my-5"></div>
                  <div class="float-left">
                    <h6><span>Posted:</span><span>{{$post->created_at->diffForHumans()}}</span></h6>
                  </div>
                    @if(($post->boarding->Availability) == "LOCKED")
                      @if (Auth::user()==$post->boarding->user)
                        <a href="/view/{{getBoardingTypeIdById($post->boarding->id)}}/{{getPropertyTypeIdById($post->boarding->id)}}"><button class="button is-success is-pulled-right">See More</button></a>
                      @else
                        <h6 class="text-danger">This boarding has already rented</h6>
                        @endif
                    @else
                      <a href="/view/{{getBoardingTypeIdById($post->boarding->id)}}/{{getPropertyTypeIdById($post->boarding->id)}}"><button class="button is-success is-pulled-right">See More</button></a>                
                    @endif                    
                </div>
              </div>
            </div>
          </div>
        @endforeach
        </div>
    </div>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="{{asset('js/jquery.rateyo.min.js')}}"></script>
    <script type="text/javascript" src={{asset('js/sweetalert.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/sweetalert2.all.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/bootstrap.min.js')}}></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>
    @toastr_render
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e6cabb0119bfabd"></script>
    @toastr_render
    @include('sweet::alert')

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
</body>
</html>
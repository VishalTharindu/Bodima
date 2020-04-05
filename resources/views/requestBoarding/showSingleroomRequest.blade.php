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
    <title>Document</title>

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
                <form action="/searchresult/house/" method="post">
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
                                <option value="House">Single_Room</option>                            
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
      <div class="section">
        <div class="container">

          @foreach ($singleRoomRequest as $request)
          <div class="my-5"></div>        
            <div class="row">
              <div class="col-md-12">
  
                <div class="card card-cascade wider reverse">
                
                  
                    <!-- Card content -->
                    <div class="card-body card-body-cascade">                  
                      <div class="row">
                        <div class="col-md-2">
                            <figure class="image is-128x128">
                                <img src="/images/prof.jpg" alt="Placeholder image">
                            </figure>
                            <p>Postedby:{{$request->boardingrequest->user->name}}</p>                       
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-3">
                                    <h6 class="card-title"><strong>Request:</strong><span>{{$request->boardingrequest->boardingType}}</span></h6>                     
                                </div>
                                <div class="col-md-6">
                                    <h6 class="card-title"><strong>Location:</strong><span>{{$request->boardingrequest->Province}}</span><span>>></span><span>{{$request->boardingrequest->District}}</span><span>>></span><span>{{$request->boardingrequest->City }}</span></h6>                     
                                </div>
                                <div class="col-md-3">
                                    <h6 class="card-title"><strong>Posted:</strong><span>{{$request->created_at->diffForHumans()}}</span></h6>                     
                                </div>
                            </div>
                            <div class="my-4"></div>
                            <div class="row">
                                <p>Chance too good. God level bars. I'm so proud of @LifeOfDesiigner #1 song in the country. Panda! Don't be scared of the truth because we need to restart the human foundation in truth I stand with the most humility. We are so blessed!
                                    All praises and blessings to the families of people who never gave up on dreams. Don't forget, You're Awesome!</p>
                            </div>
                            <div class="row float-right">
                                <a href="/view/{{getBoardingrequestTypeIdById($request->boardingrequest->id)}}/{{getPropertyrequestTypeIdById($request->boardingrequest->id)}}" class="button is-success is-pulled-right">More Details</a>
                            </div>
                        </div>                                                
                      </div>
                    </div>                
                  </div>
              </div>
            </div>
            @endforeach         
        </div>
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Room:1</p>
                            <p>bed:4</p>
                        </div>
                        <div class="col-md-6">
                            <p>Room:1</p>
                            <p>bed:4</p>
                        </div>
                    </div>
                    <div class="row">
                        <p>Select "Logout" below if you are ready to end your current session.</p>
                    </div>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="{{ route('admin.logout') }}">Logout</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src={{asset('js/sweetalert.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/sweetalert2.all.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/bootstrap.min.js')}}></script>
    @include('sweet::alert')
</body>
</html>
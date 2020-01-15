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
                                <option value="House">House</option>                            
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

        @foreach ($HouseRequest as $requestdetails)
          <div class="row">
            <div class="col-md-12">

              <div class="card card-cascade wider reverse">
              
                
                  <!-- Card content -->
                  <div class="card-body card-body-cascade">
                
                    <!-- Title -->
                    <h4 class="card-title"><strong>Request Type : {{$requestdetails->boardingrequest->boardingType}}</strong></h4>
                    <div class="my-3"></div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="has-background-success text-center rounded mb-0">
                          <h5 class="">Location Details</h5>
                        </div>
                        <div class="my-3"></div>
                        <p>Province :{{$requestdetails->boardingrequest->Province}}</p>
                        <p>District :{{$requestdetails->boardingrequest->District}}</p>
                        <p>City  : {{$requestdetails->boardingrequest->City }}</p>
                      </div>
                      <div class="col-md-3">
                        <div class="has-background-success text-center rounded mb-0">
                          <h5 class="">Payment</h5>
                        </div>
                        <div class="my-3"></div>
                        <p>Monthly Rent : Rs {{$requestdetails->boardingrequest->MonthlyRent}}</p>
                        <p>Key Money : Rs {{$requestdetails->boardingrequest->KeyMoney}}</p>
                      </div>
                      <div class="col-md-3">
                        <div class="has-background-danger text-center rounded mb-0">
                          <h5 class="text-white">Finding by: </h5>
                        </div>
                        <div class="my-3"></div>
                        <p class="text-center">
                          @if(($requestdetails->boardingrequest->School_boys)==1)
                              School Boys/
                          @else
                          @endif

                          @if(($requestdetails->boardingrequest->School_girls)==1)
                              School girls/
                          @else
                          @endif

                          @if(($requestdetails->boardingrequest->Uni_boys)==1)
                              Uni Boys/
                          @else
                          @endif

                          @if(($requestdetails->boardingrequest->Uni_girls)==1)
                              School girls/
                          @else
                          @endif

                          @if(($requestdetails->boardingrequest->Office_boys)==1)
                              Office Boys/
                          @else
                          @endif

                          @if(($requestdetails->boardingrequest->Office_girls)==1)
                              Office girls
                          @else
                          @endif
                        </p>
                      </div>
                      <div class="col-md-3">
                        <div class="has-background-danger text-center rounded mb-0">
                          <h5 class="text-white">Contact Details</h5>
                        </div>
                        <div class="my-3"></div>
                        <p><i class="fa fa-user" aria-hidden="true"></i>        Posted By: Tharindu</p>
                        <button onclick="showPnox()" class="button is-text"><i class="fas fa-envelope" aria-hidden="true"></i>   Email : trs@gmail.com</button>
                        <p id="pnox" class="has-text-dark customerpno">15246</p>
                        <p><i class="fa fa-mobile" aria-hidden="true"></i>      Phone Number : 0715486956</p>
                      </div>
                    </div>
                    <div class="my-3"></div>
                    <div class="columns">
                      <div class="column">
  
                      </div>
                      {{-- <div class="column text-center">
                        <!-- Linkedin -->
                        <a class="px-2 fa-lg li-ic"><i class="fab fa-linkedin-in"></i></a>
                        <!-- Twitter -->
                        <a class="px-2 fa-lg tw-ic"><i class="fab fa-twitter"></i></a>
                        <!-- Dribbble -->
                        <a class="px-2 fa-lg fb-ic"><i class="fab fa-facebook-f"></i></a>
                      </div> --}}
                      <div class="column is-pulled-right">
                        <a href="http://" class="button is-success is-pulled-right">More Details</a>
                      </div>
                    </div>
                
                  </div>
                
                </div>
            </div>
          </div>
          <div class="my-5"></div>             
        @endforeach
      </div>
    </div>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src={{asset('js/sweetalert.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/sweetalert2.all.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/bootstrap.min.js')}}></script>
    @include('sweet::alert')
</body>
</html>
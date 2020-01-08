<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add single room request</title>

    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/bulma/bulma-checkradio.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/bulma/argon-dashboard.css')}}">
    <link rel="stylesheet" href={{asset('datatables.net-select-bs4/css/select2.min.css')}} rel="stylesheet">
    <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
    <link href={{asset('css/sweetalert2.min.css')}} rel="stylesheet">

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src={{asset('js/select2/select2.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/sweetalert.min.js')}}></script>
    <script type="text/javascript" src={{asset('js/sweetalert2.all.min.js')}}></script>
    
    <script type="text/javascript" src={{asset('js/datatables.net/js/jquery.dataTables.min.js')}}></script>
    <script type="text/javascript" src={{asset('datatables.net-select-bs4/js/select.bootstrap4.min.js')}}></script>
    <script src="{{asset('js/jquery-confirm.js')}}"></script>

    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
    <style>
        .select, .select select{
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="section is-medium">
        {{-- @include('incfile.navibar') --}}
        <div class="columns is-mobile is-centered">
            <div class="column is-8">
                {{-- @include('layouts.errors') --}}
                @if(session()->has('message'))
                <div class="notification is-success">
                    <button class="delete"></button>
                    <h1 class="is-size-4"><b> {{ session()->get('message') }}</b></h1>
                </div>
                @endif
            </div>
        </div>
        <div class="">
            <form action="/add/singelroomrequest" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="columns">
                    <div class="column is-12">
                        <div class="box has-background-white-bis">
                            <div class="my-3"></div>
                            <div class="columns is mobile is-centered">
                                <label class="label has-text-centered">Request Type</label>
                            </div>
                            <div class="my-4"></div>
                            <div class="columns">
                                    <div class="column is-3">
                                        
                                    </div>
                                <div class="column is-3">
                                    <label class="label has-text-centered">Request Type</label>
                                </div>
                                <div class="column is-3">
                                    <div class="control is-6">
                                        <div class="select is-primary">
                                            <select name="boardingType">
                                                <option value="Singel_Room">Singel Room</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-3">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="columns is-centered">
                        <div class="column is-6">
                            <div class="box has-background-white-bis"> 
                                <div class="my-5"></div>
                                <div class="columns is mobile is-centered">
                                    <label class="label is-center">Fetures You Want</label>
                                </div>
                                <div class="columns is mobile">
                                    <div class="column is-6">
                                        <label class="label has-text-centered">No of Bed</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control is-6 has-icon-left">
                                                    <div class="select is-primary">
                                                        <select name="NoOfBed">
                                                            <option>Select No of Bed</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="More">More</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <label class="label has-text-centered">AC Avalability</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control">
                                                    <div class="field">
                                                        <div class="columns">
                                                            <div class="column is-6 justify-content-center">
                                                                <input class="is-checkradio is-success"  type="radio" value="Yes" name="Acavalability">
                                                                <label for="exampleRtlRadioInline1">Yes</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success"  type="radio" value="No" name="Acavalability">
                                                                <label for="exampleRtlRadioInline2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-5"></div>
                                <div class="columns">
                                    
                                </div>
                                <div class="columns">
                                    <div class="my-5"></div>
                                    <div class="column is-6">
                                            <hr>
                                            <div class="my-5"></div>
                                            <label class="label has-text-centered">With Furniture</label>
                                            <div class="my-3"></div>
                                            <div class="column">
                                                <div class="columns">
                                                    <div class="column">
                                                        <div class="control">
                                                            <div class="field">
                                                                <div class="columns is-centered">
                                                                    <div class="column is-6 is-centered">
                                                                        <input class="is-checkradio is-success" id="exampleRtlRadioInline10"  type="radio" value="Yes" name="Withfurniture">
                                                                        <label for="exampleRtlRadioInline1">Yes</label>
                                                                    </div>
                                                                    <div class="column is-6">
                                                                        <input class="is-checkradio is-success" id="exampleRtlRadioInline15"  type="radio" value="No" name="Withfurniture">
                                                                        <label for="exampleRtlRadioInline2">No</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>                                           
                                        </div>
                                    <div class="column is-6">
                                        <hr>
                                        <label class="label has-text-centered">For Whome</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control">
                                                    <div class="field">
                                                        <div class="columns">
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="School_boys">
                                                                <label for="exampleRtlRadioInline1">School boys</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline2" type="checkbox" name="School_girls">
                                                                <label for="exampleRtlRadioInline2">School girls</label>
                                                            </div>
                                                        </div>
                                                        <div class="columns">
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline3" type="checkbox" name="Uni_boys">
                                                                <label for="exampleRtlRadioInline1">Uni boys</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline4" type="checkbox" name="Uni_girls">
                                                                <label for="exampleRtlRadioInline2">Uni girls</label>
                                                            </div>
                                                        </div>
                                                        <div class="columns">
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline5" type="checkbox" name="Office_boys">
                                                                <label for="exampleRtlRadioInline1">Office boys</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline6" type="checkbox" name="Office_girls">
                                                                <label for="exampleRtlRadioInline2">Office girls</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="my-5"></div>
                                <div class="columns is mobile is-centered">
                                    <label class="label has-text-centered">Payment and Other</label>
                                </div>
                                <div class="my-5"></div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <label class="label">Approximate monthly rent</label>
                                    </div>
                                    <div class="column is-6">
                                        <div class="control has-icons-left has-icons-right">
                                            <input class="form-control form-control-alternative form-control form-control-alternative {{ $errors->has('MonthlyRent') ? ' is-invalid' : ''}}" type="text" placeholder="Text input" name="MonthlyRent">

                                            @if ($errors->has('MonthlyRent'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-danger">{{ $errors->first('MonthlyRent') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4"></div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <label class="label">Approximate Key Money</label>
                                    </div>
                                    <div class="column is-6">
                                        <div class="control has-icons-left has-icons-right">
                                            <input class="form-control form-control-alternative {{ $errors->has('KeyMoney') ? ' is-invalid' : ''}}" type="text" placeholder="Text input" name="KeyMoney">                                           
                                            
                                            @if ($errors->has('KeyMoney'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong class="text-danger">{{ $errors->first('KeyMoney') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>                                                              
                                <div class="my-4"></div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label">Description</label>
                                            <div class="field">
                                                <textarea class="form-control form-control-alternative " placeholder="Textarea" name="Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column is-6">
                            <div class="box has-background-white-bis">
                                <div class="my-4"></div>
                                <div class="columns is mobile is-centered">
                                        <label class="label has-text-centered">Location Details</label>
                                </div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label">Province</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <div class="form-group {{ $errors->has('Province') ? ' is-invalid' : ''}}">
                                                    <select name="Province" class="form-control form-control-lg" id="province">
                                                        <option value="Central Province">Central Province</option>
                                                        <option  value="Eastern Province">Eastern Province</option>
                                                        <option  value="Northern Province">Northern Province</option>
                                                        <option  value="Southern Province">Southern Province</option>
                                                        <option  value="Western Province">Western Province</option>
                                                        <option  value="Western Province">North Western Province</option>
                                                        <option  value="Western Province">North Central Province</option>
                                                        <option  value="Western Province">Uva Province</option>
                                                        <option  value="Western Province">Sabaragamuwa Province</option>
                                                    </select>
                                                    <script>
                                                        $("#province").select2(); 
                                                    </script>
                                                    @if ($errors->has('Province'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $errors->first('Province') }}</strong>
                                                    </span>
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label">District</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <div class="form-group {{ $errors->has('District') ? ' is-invalid' : ''}}">
                                                    <select name="District" class="form-control form-control-alternative" id="distric">
                                                        <option value="Ampara">Ampara</option>
                                                        <option  value="Anuradhapura">Anuradhapura</option>
                                                        <option  value="Badulla">Badulla</option>
                                                        <option  value="Batticaloa">Batticaloa</option>
                                                        <option  value="Colombo">Colombo</option>
                                                        <option  value="Galle">Galle</option>
                                                        <option  value="Gampaha">Gampaha</option>
                                                        <option  value="Hambantota">Hambantota</option>
                                                        <option  value="Kalutara">Kalutara</option>
                                                        <option  value="Kandy">Kandy</option>
                                                        <option  value="Kegalle">Kegalle</option>
                                                        <option  value="Kilinochchi">Kilinochchi</option>
                                                        <option  value="Kurunegala">Kurunegala</option>
                                                        <option  value="Mannar">Mannar</option>
                                                        <option  value="Matale">Matale</option>
                                                        <option  value="Matara">Matara</option>
                                                        <option  value="Monaragala">Monaragala</option>
                                                        <option  value="Mullaitivu">Mullaitivu</option>
                                                        <option  value="Nuwara Eliya">Nuwara Eliya</option>
                                                        <option  value="Polonnaruwa">Polonnaruwa</option>
                                                        <option  value="Puttalam">Puttalam</option>
                                                        <option  value="Ratnapura">Ratnapura</option>
                                                        <option  value="Trincomalee">Trincomalee</option>
                                                        <option  value="Vavuniya">Vavuniya</option>                                   
                                                    </select>
                                                    <script>
                                                        $("#distric").select2(); 
                                                    </script>  
                                                    
                                                    @if ($errors->has('District'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $errors->first('District') }}</strong>
                                                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label">City</label>
                                            <div class="control has-icons-left has-icons-right">
                                                <input class="form-control form-control-alternative {{ $errors->has('City') ? ' is-invalid' : ''}}" type="text" placeholder="Text input" name="City">
                                                
                                                @if ($errors->has('City'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong class="text-danger">{{ $errors->first('City') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="columns">
                                <div class="column is-12">
                                <div class="box has-background-white-bis">
                                    <div class="my-4"></div>
                                    <div class="columns is mobile is-centered">
                                        <div class="container">
                                            <label class="label has-text-centered">Map</label>
                                            <div>
                                                <img src="images/map.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label class="label">Codination</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="input" type="text" placeholder="Text input">
                                                    <span class="icon is-small is-left">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                    <span class="icon is-small is-right">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="columns">
                            <div class="column is-12">
                                <div class="box has-background-white-bis">
                                    <div class="my-4"></div>
                                    <div class="columns is mobile is-centered">
                                        <label class="label has-text-centered">Personal Details</label>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label class="label">Your Name</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="form-control form-control-alternative" type="text" placeholder="Text input" name="Name">
                                                    <span class="icon is-small is-left">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                    <span class="icon is-small is-right">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label class="label">Your Email Address</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="form-control form-control-alternative" type="text" placeholder="Text input" name="Email">
                                                    <span class="icon is-small is-left">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                    <span class="icon is-small is-right">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label class="label">Your Telephone No</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="form-control form-control-alternative" type="text" placeholder="Text input" name="Telephone">
                                                    <span class="icon is-small is-left">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                    <span class="icon is-small is-right">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>             
                </div>
                <div class="columns">
                    <div class="column is-12 is-pulled-right">
                        <button type="submit" class="button is-primary is-pulled-right" id="addSucc" style="margin-left:10px">Upload Post</button>            
                        <button type="" class=" button is-warning is-pulled-right" id="confm-a">Clear</button>
                    </div> 
                </div>
            </form>
        </div>
    </div>
</body>
</html>
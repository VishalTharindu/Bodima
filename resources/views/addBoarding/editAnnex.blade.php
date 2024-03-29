<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AddBoarding</title>

    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/bulma/bulmaCheckradio/dist/css/bulma-checkradio.min')}}">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    {{-- <link href={{asset('css/css/material-kit.css')}} rel="stylesheet"> --}}
    <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/jquery-confirm.min.css')}}">

    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/jquery-confirm.js')}}"></script>

    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
    <style>
        .select, .select select{
            width: 100%;
        }
    </style>

</head>
<body class="has-background-white-ter">
        @include('incfile.navibar')

    <div class="section is-medium">
        <div class="">
            <form action="/update/anexs" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="columns is-centered">
                        <div class="column is-6">
                            <div class="box has-background-white-bis">
                                <div class="my-5"></div>
                                <div class="columns is mobile is-centered">
                                    <label class="label has-text-centered">Boarding Type</label>
                                <input type="text" name="boardingid" value="{{$anex->boarding->id}}" hidden>
                                    <input type="text" name="annexid" value="{{$anex->id}}" hidden>
                                </div>
                                <div class="my-4"></div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <label class="label has-text-centered">Boarding Type</label>
                                    </div>
                                    <div class="column is-6">
                                        <div class="control is-6">
                                            <div class="select is-primary">
                                                <select name="boardingType">
                                                    <option value="Anex">Annex</option>                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="my-5"></div>
                                <div class="columns is mobile is-centered">
                                    <label class="label is-center">Fetures You Have</label>
                                </div>
                                <div class="columns is mobile">
                                    <div class="column">
                                        <label class="label has-text-centered">No of Rooms</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control is-6 ">
                                                    <div class="select is-primary">
                                                        <select name="NoOfRooms">
                                                            <option value="1"
                                                                @if($anex->NoOfRooms == '1')
                                                                selected
                                                                @endif
                                                            >1</option>
                                                            <option value="2"
                                                                @if($anex->NoOfRooms == '2')
                                                                selected
                                                                @endif
                                                            >2</option>
                                                            <option value="3"
                                                                @if($anex->NoOfRooms == '3')
                                                                selected
                                                                @endif
                                                            >3</option>
                                                            <option value="4"
                                                                @if($anex->NoOfRooms == '4')
                                                                selected
                                                                @endif
                                                            >4</option>
                                                            <option value="More"
                                                                @if($anex->NoOfRooms== 'More')
                                                                selected
                                                                @endif
                                                            >More</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <label class="label has-text-centered">No of Bed</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control is-6 has-icon-left">
                                                    <div class="select is-primary">
                                                        <select name="NoOfBed">
                                                            <option>Select No of Bed</option>
                                                            
                                                            <option value="1"
                                                                @if($anex->NoOfBed == '1')
                                                                selected
                                                                @endif
                                                            >1</option>
                                                            <option value="2"
                                                                @if($anex->NoOfBed == '2')
                                                                selected
                                                                @endif
                                                            >2</option>
                                                            <option value="3"
                                                                @if($anex->NoOfBed == '3')
                                                                selected
                                                                @endif
                                                            >3</option>
                                                            <option value="4"
                                                                @if($anex->NoOfBed == '4')
                                                                selected
                                                                @endif
                                                            >4</option>
                                                            <option value="More"
                                                                @if($anex->NoOfBed== 'More')
                                                                selected
                                                                @endif
                                                            >More</option>                                                                                                                       
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-5"></div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <label class="label has-text-centered">AC Avalable</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control">
                                                    <div class="field">
                                                        <div class="columns is-centered">
                                                            <div class="column is-6 is-centered">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" value="Yes" name="Acavalability" 
                                                                @if ($anex->Acavalability  == 'Yes')
                                                                    checked
                                                                @endif>
                                                                
                                                                <label for="exampleRtlRadioInline1">Yes</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" value="No" name="Acavalability"
                                                                 @if ($anex->Acavalability  == 'No')
                                                                checked
                                                            @endif>
                                                                <label for="exampleRtlRadioInline2">No</label>
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-6">
                                        <label class="label has-text-centered">Kitchen Avalability</label>
                                        <div class="my-3"></div>
                                        <div class="columns">
                                            <div class="column">
                                                <div class="control">
                                                    <div class="field">
                                                        <div class="columns is-centered">
                                                            <div class="column is-6 is-centered">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" value="Yes" name="kitchenavalability"
                                                                @if ($anex->kitchenavalability  == 'Yes')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline1">Yes</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" value="No" name="kitchenavalability"
                                                                @if ($anex->kitchenavalability  == 'No')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline2">No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="columns">
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
                                                                    <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="radio" value="Yes" name="Withfurniture"
                                                                    @if ($anex->Withfurniture   == '1')
                                                                        checked
                                                                    @endif>
                                                                    <label for="exampleRtlRadioInline1">Yes</label>
                                                                </div>
                                                                <div class="column is-6">
                                                                    <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" value="No" name="Withfurniture"
                                                                    @if ($anex->Withfurniture   == '0')
                                                                        checked
                                                                    @endif>
                                                                    <label for="exampleRtlRadioInline2">No</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="School_boys"
                                                                @if ($anex->boarding->School_boys  == '1')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline1">School boys</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="School_girls"
                                                                @if ($anex->boarding->School_girls  == '1')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline2">School girls</label>
                                                            </div>
                                                        </div>
                                                        <div class="columns">
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="Uni_boys"
                                                                @if ($anex->boarding->Uni_boys  == '1')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline1">Uni boys</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="Uni_girls"
                                                                @if ($anex->boarding->Uni_girls   == '1')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline2">Uni girls</label>
                                                            </div>
                                                        </div>
                                                        <div class="columns">
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-success" id="exampleRtlRadioInline1" type="checkbox" name="Office_boys"
                                                                @if ($anex->boarding->Office_boys  == '1')
                                                                    checked
                                                                @endif>
                                                                <label for="exampleRtlRadioInline1">Office boys</label>
                                                            </div>
                                                            <div class="column is-6">
                                                                <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="checkbox" name="Office_girls"
                                                                @if ($anex->boarding->Office_girls  == '1')
                                                                    checked
                                                                @endif>
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
                                    <label class="label has-text-centered">Payment Details</label>
                                </div>
                                <div class="my-5"></div>
                                <div class="columns">
                                    <div class="column is-6">
                                        <label class="label">Approximate monthly rent</label>
                                    </div>
                                    <div class="column is-6">
                                        <div class="control has-icons-left has-icons-right">
                                        <input class="input" type="text" placeholder="Text input" name="MonthlyRent" value="{{$anex->boarding->MonthlyRent}}">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-user"></i>
                                            </span>
                                            <span class="icon is-small is-right">
                                                <i class="fas fa-check"></i>
                                            </span>
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
                                            <input class="input" type="text" placeholder="Text input" value="{{$anex->boarding->MonthlyRent}}" name="KeyMoney">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-user"></i>
                                            </span>
                                            <span class="icon is-small is-right">
                                                <i class="fas fa-check"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="my-5"></div>
                                <div class="columns is mobile is-centered">
                                    <label class="label has-text-centered">Other Details</label>
                                </div>
                                <div class="my-4"></div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label">Address</label>
                                            <div class="field">
                                                <div class="control">
                                                <textarea class="textarea" placeholder="Textarea" name="Address">{{$anex->boarding->Address}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-4"></div>
                                <div class="columns">
                                    <div class="column is-12">
                                        <div class="field">
                                            <label class="label">Description</label>
                                            <div class="field">
                                                <div class="control">
                                                    <textarea class="textarea" placeholder="Textarea" name="Description">{{$anex->boarding->Description}}</textarea>
                                                </div>
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
                                                <div class="form-group">
                                                    <select name="Province" class="form-control form-control-lg" id="province">
                                                        <option value="Central Province"
                                                                @if($anex->boarding->Province == 'Central Province')
                                                                selected
                                                                @endif
                                                        >Central Province</option>
                                                        <option  value="Eastern Province"
                                                            @if($anex->boarding->Province == 'Eastern Province')
                                                            selected
                                                            @endif
                                                        >Eastern Province</option>
                                                        <option  value="Northern Province"
                                                            @if($anex->boarding->Province == 'Northern Province')
                                                            selected
                                                            @endif
                                                        >Northern Province</option>
                                                            <option  value="Southern Province"
                                                            @if($anex->boarding->Province == 'Southern Province')
                                                            selected
                                                            @endif
                                                        >Southern Province</option>
                                                        <option  value="Western Province"
                                                            @if($anex->boarding->Province == 'Western Province')
                                                            selected
                                                            @endif
                                                        >Western Province</option>
                                                        <option  value="North Western Province"
                                                            @if($anex->boarding->Province == 'North Western Province')
                                                            selected
                                                            @endif
                                                        >North Western Province</option>
                                                        <option  value="North Central Province"
                                                            @if($anex->boarding->Province == 'North Central Province')
                                                            selected
                                                            @endif
                                                        >North Central Province</option>
                                                        <option  value="Uva Province"
                                                            @if($anex->boarding->Province == 'Uva Province')
                                                            selected
                                                            @endif
                                                        >Uva Province</option>
                                                        <option  value="Sabaragamuwa Province"
                                                            @if($anex->boarding->Province == 'Sabaragamuwa Province')
                                                            selected
                                                            @endif
                                                        >Sabaragamuwa Province</option>
                                                    </select>
                                                    <script>
                                                        $("#province").select2(); 
                                                    </script>             
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
                                                <div class="form-group">
                                                    <select name="District" class="form-control form-control-lg" id="distric">
                                                        <option value="Ampara"
                                                            @if($anex->boarding->District == 'Ampara')
                                                            selected
                                                            @endif
                                                        >Ampara</option>
                                                        <option  value="Anuradhapura"
                                                            @if($anex->boarding->District == 'Anuradhapura')
                                                            selected
                                                            @endif
                                                        >Anuradhapura</option>
                                                        <option  value="Badulla"
                                                            @if($anex->boarding->District == 'Badulla')
                                                            selected
                                                            @endif
                                                        >Badulla</option>
                                                        <option  value="Batticaloa"
                                                            @if($anex->boarding->District == 'Batticaloa')
                                                            selected
                                                            @endif
                                                        >Batticaloa</option>
                                                        <option  value="Colombo"
                                                            @if($anex->boarding->District == 'Colombo')
                                                            selected
                                                            @endif
                                                        >Colombo</option>
                                                        <option  value="Galle"
                                                            @if($anex->boarding->District == 'Galle')
                                                            selected
                                                            @endif
                                                        >Galle</option>
                                                        <option  value="Gampaha"
                                                            @if($anex->boarding->District == 'Gampaha')
                                                            selected
                                                            @endif
                                                        >Gampaha</option>
                                                        <option  value="Hambantota"
                                                            @if($anex->boarding->District == 'Hambantota')
                                                            selected
                                                            @endif
                                                        >Hambantota</option>
                                                        <option  value="Kalutara"
                                                            @if($anex->boarding->District == 'Kalutara')
                                                            selected
                                                            @endif
                                                        >Kalutara</option>
                                                        <option  value="Kandy"
                                                            @if($anex->boarding->District == 'Kandy')
                                                            selected
                                                            @endif
                                                        >Kandy</option>
                                                        <option  value="Kegalle"
                                                            @if($anex->boarding->District == 'Kegalle')
                                                            selected
                                                            @endif
                                                        >Kegalle</option>
                                                        <option  value="Kilinochchi"
                                                            @if($anex->boarding->Province == 'Kilinochchi')
                                                            selected
                                                            @endif
                                                        >Kilinochchi</option>
                                                        <option  value="Kurunegala"
                                                            @if($anex->boarding->District == 'Kurunegala')
                                                            selected
                                                            @endif
                                                        >Kurunegala</option>
                                                        <option  value="Mannar"
                                                            @if($anex->boarding->District == 'Mannar')
                                                            selected
                                                            @endif
                                                        >Mannar</option>
                                                        <option  value="Matale"
                                                            @if($anex->boarding->District == 'Matale')
                                                            selected
                                                            @endif
                                                        >Matale</option>
                                                        <option  value="Matara"
                                                            @if($anex->boarding->District == 'Matara')
                                                            selected
                                                            @endif
                                                        >Matara</option>
                                                        <option  value="Monaragala"
                                                            @if($anex->boarding->District == 'Monaragala')
                                                            selected
                                                            @endif
                                                        >Monaragala</option>
                                                        <option  value="Mullaitivu"
                                                            @if($anex->boarding->District == 'Mullaitivu')
                                                            selected
                                                            @endif
                                                        >Mullaitivu</option>
                                                        <option  value="Nuwara Eliya"
                                                            @if($anex->boarding->District == 'Nuwara Eliya')
                                                            selected
                                                            @endif
                                                        >Nuwara Eliya</option>
                                                        <option  value="Polonnaruwa"
                                                            @if($anex->boarding->District == 'Polonnaruwa')
                                                            selected
                                                            @endif
                                                        >Polonnaruwa</option>
                                                        <option  value="Puttalam"
                                                            @if($anex->boarding->District == 'Puttalam')
                                                            selected
                                                            @endif
                                                        >Puttalam</option>
                                                        <option  value="Ratnapura"
                                                            @if($anex->boarding->District == 'Ratnapura')
                                                            selected
                                                            @endif
                                                        >Ratnapura</option>
                                                        <option  value="Trincomalee"
                                                            @if($anex->boarding->District == 'Trincomalee')
                                                            selected
                                                            @endif
                                                        >Trincomalee</option>
                                                        <option  value="Vavuniya"
                                                            @if($anex->boarding->District == 'Vavuniya')
                                                            selected
                                                            @endif
                                                        >Vavuniya</option>                                   
                                                    </select>
                                                    <script>
                                                        $("#distric").select2(); 
                                                    </script>             
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
                                                <input class="input" type="text" placeholder="Text input" name="City" value="{{$singleRoom->boarding->City}}" required>
                                                <span class="icon is-small is-left">
                                                    <i class="fas fa-user"></i>
                                                </span>
                                                <span class="icon is-small is-right">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                @if ($errors->has('City'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('City') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columns">
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
                                                    <input class="input" type="text" placeholder="Text input" name="latitude" value="{{$house->boarding->latitude }}">
                                                    <span class="icon is-small is-left">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                    <span class="icon is-small is-right">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                    <input class="input" type="text" placeholder="Text input" name="longitude" value="{{$house->boarding->longitude}}">
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
                        <div class="columns">
                            <div class="column is-12">
                                <div class="box has-background-white-bis">
                                    <div class="my-4"></div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label class="label">Upload Image</label>
                                                <div class="contetnt">
                                                    <div class="row columns">
                                                            @foreach (json_decode($anex->boarding->filename ) as $image)
                                                            <div class="column"><img src="/images/uploads/boardingimg/{{$image}}" /></div>
                                                            @endforeach
                                                    </div>
                                                </div>
                                                <div class="my-5"></div>
                                                <div class="input-group control-group increment">
                                                    <input type="file" name="filename[]" class="form-control">
                                                    <div class="input-group-btn">
                                                        <button class="button is-success addmore" type="button"><i
                                                                class="glyphicon glyphicon-plus"></i>More</button>
                                                    </div>
                                                </div>
                                                <div class="clone hide">
                                                    <div class="control-group input-group" style="margin-top:10px">
                                                      <input type="file" name="filename[]" class="form-control">
                                                      <div class="input-group-btn"> 
                                                        <button class="button is-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-5"></div>
                                    <div class="columns is mobile is-centered">
                                        <label class="label has-text-centered">Personal Details</label>
                                    </div>
                                    <div class="my-3"></div>
                                    <div class="columns">
                                        <div class="column is-12">
                                            <div class="field">
                                                <label class="label">Your Email Address</label>
                                                <div class="control has-icons-left has-icons-right">
                                                    <input class="input" type="text" placeholder="Text input" name="Email" value="{{$anex->boarding->Email}}">
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
                                                    <input class="input" type="text" placeholder="Text input" name="Telephone" value="{{$anex->boarding->Telephone}}">
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
                        <button type="submit" class="button is-primary is-pulled-right" onclick="boardingAdded()" style="margin-left:10px">Upload Post</button>            
                        <button type="submit" class=" button is-warning is-pulled-right">Clear</button>
                    </div> 
                </div>
            </form>
            {{-- <div class="columns">
                    <div class="column is-6">
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="control">
                                <input class="input" type="text" placeholder="Text input">
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <div class="field">
                            <label class="label">Username</label>
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
            
            <div class="field">
                <label class="label">Email</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-danger" type="email" placeholder="Email input">
                    <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                    </span>
                    <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                    </span>
                </div>
                <p class="help is-danger">This email is invalid</p>
            </div>
            
            <div class="field">
                <label class="label">Subject</label>
                <div class="control">
                    <div class="select">
                    <select>
                        <option>Select dropdown</option>
                        <option>With options</option>
                    </select>
                    </div>
                </div>
            </div>
            <div class="field">
                <label class="label">Message</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Textarea"></textarea>
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <label class="checkbox">
                    <input type="checkbox">
                    I agree to the <a href="#">terms and conditions</a>
                    </label>
                </div>
            </div> 
            <div class="field">
                <div class="control">
                    <label class="radio">
                    <input type="radio" name="question">
                    Yes
                    </label>
                    <label class="radio">
                    <input type="radio" name="question">
                    No
                    </label>
                </div>
            </div>
            
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Submit</button>
                </div>
                <div class="control">
                    <button class="button is-link is-light">Cancel</button>
                </div>
            </div> --}}
        </div>
    </div>
    {{-- <script src="{{asset('css/bulma/bulmaCheckradio/gulpfile.js')}}"></script> --}}

    <div class="footsec">
            <div class="container">
                <div class="block">
                    <div class="columns">
                        <div class="column">
                            <div class="ftsec fstcl">
                                <h2>About bodima.lk</h2>
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
                                <h2>Links</h2>
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
                                <h2>Services</h2>
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
                                <h2 class="ftco-heading-2">Have a Questions?</h2>
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


        <script type="text/javascript">
            $(document).ready(function() {
        
              $(".addmore").click(function(){ 
                  var html = $(".clone").html();
                  $(".increment").after(html);
              });
        
              $("body").on("click",".is-danger",function(){ 
                  $(this).parents(".control-group").remove();
              });
        
            });
        </script>

        <script>
            function boardingAdded() {
            // event.preventDefault();
            // var form = event.target.form;
            $.alert({
                title: 'Success',
                content: 'You have successfully added',
                animation: 'zoom',
                closeAnimation: 'scale',
                icon: 'fa fa-trash-alt',
                theme: 'material',
                closeIcon: true,
                type: 'red',
                animateFromElement: false,
                // buttons: {
                //     confirm: function() {
                //         $.alert('Deleted');
                //         form.submit();
                //     },
                //     cancel: function() {
                //         $.alert('Canceled');
                //     }
                // }
            });
        }
</script>
</body>
</html>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AddBoarding</title>

    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
    <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">

</head>
<body>
        @include('incfile.navibar')
    <div class="section is-medium">
        <div class="container">
            <div class="columns">
                <div class="column is-6">
                    <div class="box has-background-white-ter">
                        <div class="columns is mobile is-centered">
                            <label class="label is-center">Boarding Type</label>
                        </div>
                        <div class="columns">
                                <div class="column">
                                    <label class="label is-center">Boarding Type</label>
                                </div>
                            <div class="column">
                                <div class="control is-6">
                                    <div class="select is-rounded is-primary">
                                        <select>
                                            <option>Boarding For Rent</option>
                                            <option>Boarding For Share</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box has-background-white-ter">
                        <div class="columns is mobile is-centered">
                            <label class="label is-center">Fetures You Have</label>
                        </div>
                        <div class="columns is mobile">
                            <div class="column">
                                <label class="label is-center">No of Rooms</label>
                            </div>
                            <div class="column">
                                 <label class="label is-center">No of Bed</label>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="control is-6 ">
                                    <div class="select is-rounded is-primary">
                                        <select>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>Boarding For Share</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="control is-6">
                                    <div class="select is-rounded is-primary">
                                        <select>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>Boarding For Share</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns is mobile">
                            <div class="column">
                                <label class="label is-center">No of Rooms</label>
                            </div>
                            <div class="column">
                                 <label class="label is-center">No of Bed</label>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <div class="field">
                                        <input class="is-checkradio is-rtl" id="exampleRtlRadioInline1" type="radio" name="exampleRtlRadioInline" checked="checked">
                                        <label for="exampleRtlRadioInline1">Option 1</label>
    
                                        <input class="is-checkradio is-rtl" id="exampleRtlRadioInline2" type="radio" name="exampleRtlRadioInline">
                                        <label for="exampleRtlRadioInline2">Option 2</label>
                                    </div>
                                </div>
                            </div>
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
            <div class="columns">
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
            </div>
        </div>
    </div>
</body>
</html>
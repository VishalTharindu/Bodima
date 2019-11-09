<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Bodims</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">

    <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">

    <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}">
</head>
<body>

    @include('incfile.navibar')

    <div class="">
        <section class="post">
            <div class="block">
                <div class="columns">
                    <div class="column">
                        {{-- <div class="tile is-parent">
                            <article class="tile is-child notification is-defoult">
                                <p class="subtitle">Location:Kurunegala</p>
                                <p class="subtitle">Contac:0712565896</p>
                                <figure class="image is-4by3">
                                    <img src="images/B3.jpg">
                                </figure>
                            </article>
                        </div> --}}
                        <div class="recom-img">
                            <div class="postdt">
                                <div class="one mr-2">
                                    <span class="day">05</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">March</span>
                                </div>
                            </div>
                            <img src="images/B1.jpg">
                        </div>
                        <div class="dets">
                            <p><i class="fa fa-search-location"></i> &nbsp Location &nbsp  &nbsp : &nbsp Kurunegala</p>
                            <p><i class="fa fa-id-card-alt"></i> &nbsp Contact &nbsp &nbsp  &nbsp : &nbsp 0712565896</p>
                            <p><i class="fa fa-search-location"></i> &nbsp Discription  &nbsp:  &nbsp <span>description about the bodim which are going to rent</span></p>
                        </div>
                        <div class="readmr">
                            <button type="submit" class="btn btn-primary">Read more</button>
                        </div>
                    </div>
                    <div class="column">
                            {{-- <div class="tile is-parent">
                                <article class="tile is-child notification is-primary">
                                    <p class="title">Location:Kurunegala</p>
                                    <p class="subtitle">With an image</p>
                                    <figure class="image is-4by3">
                                        <img src="images/B3.jpg">
                                    </figure>
                                </article>
                            </div> --}}
                        <div class="recom-img">
                            <div class="postdt">
                                <div class="one mr-2">
                                    <span class="day">05</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">March</span>
                                </div>
                            </div>
                            <img src="images/B1.jpg">
                        </div>
                        <div class="dets">
                            <p><i class="fa fa-search-location"></i> &nbsp Location &nbsp  &nbsp : &nbsp Kurunegala</p>
                            <p><i class="fa fa-id-card-alt"></i> &nbsp Contact &nbsp &nbsp  &nbsp : &nbsp 0712565896</p>
                            <p><i class="fa fa-search-location"></i> &nbsp Discription  &nbsp:  &nbsp <span>description about the bodim which are going to rent</span></p>
                        </div>
                        <div class="readmr">
                            <button type="submit" class="btn btn-primary">Read more</button>
                        </div>
                    </div>
                    <div class="column">
                        <div class="recom-img">
                            <div class="postdt">
                                <div class="one mr-2">
                                    <span class="day">05</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2019</span>
                                    <span class="mos">March</span>
                                </div>
                            </div>
                            <img src="images/B1.jpg">
                        </div>
                        <div class="dets">
                            <p><i class="fa fa-search-location"></i> &nbsp Location &nbsp  &nbsp : &nbsp Kurunegala</p>
                            <p><i class="fa fa-id-card-alt"></i> &nbsp Contact &nbsp &nbsp  &nbsp : &nbsp 0712565896</p>
                            <p><i class="fa fa-search-location"></i> &nbsp Discription  &nbsp:  &nbsp <span>description about the bodim which are going to rent</span></p>
                        </div>
                        <div class="readmr">
                            <button type="submit" class="btn btn-primary">Read more</button>
                        </div>
                    </div>
                </div>
                <hr style="background-color:black">
                <div class="columns">
                        <div class="column">
                            {{-- <div class="tile is-parent">
                                <article class="tile is-child notification is-defoult">
                                    <p class="subtitle">Location:Kurunegala</p>
                                    <p class="subtitle">Contac:0712565896</p>
                                    <figure class="image is-4by3">
                                        <img src="images/B3.jpg">
                                    </figure>
                                </article>
                            </div> --}}
                            <div class="recom-img">
                                <div class="postdt">
                                    <div class="one mr-2">
                                        <span class="day">05</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">2019</span>
                                        <span class="mos">March</span>
                                    </div>
                                </div>
                                <img src="images/B1.jpg">
                            </div>
                            <div class="dets">
                                <p><i class="fa fa-search-location"></i> &nbsp Location &nbsp  &nbsp : &nbsp Kurunegala</p>
                                <p><i class="fa fa-id-card-alt"></i> &nbsp Contact &nbsp &nbsp  &nbsp : &nbsp 0712565896</p>
                                <p><i class="fa fa-search-location"></i> &nbsp Discription  &nbsp:  &nbsp <span>description about the bodim which are going to rent</span></p>
                            </div>
                            <div class="readmr">
                                <button type="submit" class="btn btn-primary">Read more</button>
                            </div>
                        </div>
                        <div class="column">
                            <div class="recom-img">
                                <div class="postdt">
                                    <div class="one mr-2">
                                        <span class="day">05</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">2019</span>
                                        <span class="mos">March</span>
                                    </div>
                                </div>
                                <img src="images/B1.jpg">
                            </div>
                            <div class="dets">
                                <p><i class="fa fa-search-location"></i> &nbsp Location &nbsp  &nbsp : &nbsp Kurunegala</p>
                                <p><i class="fa fa-id-card-alt"></i> &nbsp Contact &nbsp &nbsp  &nbsp : &nbsp 0712565896</p>
                                <p><i class="fa fa-search-location"></i> &nbsp Discription  &nbsp:  &nbsp <span>description about the bodim which are going to rent</span></p>
                            </div>
                            <div class="readmr">
                                <button type="submit" class="btn btn-primary">Read more</button>
                            </div>
                        </div>
                        <div class="column">
                            <div class="recom-img">
                                <div class="postdt">
                                    <div class="one mr-2">
                                        <span class="day">05</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">2019</span>
                                        <span class="mos">March</span>
                                    </div>
                                </div>
                                <img src="images/B1.jpg">
                            </div>
                            <div class="dets">
                                <p><i class="fa fa-search-location"></i> &nbsp Location &nbsp  &nbsp : &nbsp Kurunegala</p>
                                <p> </p>
                                <p><i class="fa fa-id-card-alt"></i> &nbsp Contact &nbsp &nbsp  &nbsp : &nbsp 0712565896</p>
                                <p><i class="fa fa-search-location"></i> &nbsp Discription  &nbsp:  &nbsp <span>description about the bodim which are going to rent</span></p>
                            </div>
                            <div class="row">
                                <div class=" col-md-6 readmr">
                                    <button type="submit" class="btn btn-primary">Read more</button>
                                </div>
                                <div class="col-md-6">
                                    {{-- <i class="fa fa-id-card-alt"> --}}
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </section>
        @include('incfile.footersec')
    </div>
{{-- footer section start here --}}
    



</body>
</html>
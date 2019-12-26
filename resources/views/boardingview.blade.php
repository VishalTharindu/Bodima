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

</head>
<body>
  <nav class="navbar is-transparent has-shadow" style="height: 80px;">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://versions.bulma.io/0.7.0">
        {{-- <img src="https://versions.bulma.io/0.7.0/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28"> --}}
      </a>
      <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  
    <div id="navbarExampleTransparentExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="/">
          Home
        </a>
        @if ((auth()->user()->name)==1)
          <a class="navbar-item has-text-success" href="#">
            Primium User
          </a>
        @else
          <a class="navbar-item has-text-danger" href="#">
            Free User
          </a>
          <a class="navbar-item has-text-primary" href="#">
            Become Primium
          </a>
        @endif
        
        {{-- <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link" href="/documentation/overview/start/">
            Docs
          </a>
          <div class="navbar-dropdown is-boxed">
            <a class="navbar-item" href="/documentation/overview/start/">
              Overview
            </a>
            <a class="navbar-item" href="https://versions.bulma.io/0.7.0/documentation/modifiers/syntax/">
              Modifiers
            </a>
            <a class="navbar-item" href="https://versions.bulma.io/0.7.0/documentation/columns/basics/">
              Columns
            </a>
            <a class="navbar-item" href="https://versions.bulma.io/0.7.0/documentation/layout/container/">
              Layout
            </a>
            <a class="navbar-item" href="https://versions.bulma.io/0.7.0/documentation/form/general/">
              Form
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item" href="https://versions.bulma.io/0.7.0/documentation/elements/box/">
              Elements
            </a>
            <a class="navbar-item is-active" href="https://versions.bulma.io/0.7.0/documentation/components/breadcrumb/">
              Components
            </a>
          </div>
        </div> --}}
      </div>
  
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="field is-grouped">
            <p class="control">
                <a class="button is-primary" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
              {{-- <a class="button is-primary" href="https://github.com/jgthms/bulma/releases/download/0.6.2/bulma-0.6.2.zip">
                <span class="icon">
                  <i class="fas fa-download"></i>
                </span>
                <span>Logout</span>
              </a> --}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </nav>
    <div class="mycbulmacard has-background-white-ter">
        <div class="columns">
            @foreach ($Boadrings as $post)
            <div class="column is-4 center-responsive">
                <div class="card">
                    <div class="card-image">
                      <figure class="image is-4by3">
                        <img src="images/B1.jpg" alt="Placeholder image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <div class="media">
                        <div class="media-left">
                          <figure class="image is-48x48">
                            <img src="images/prof.jpg" alt="Placeholder image">
                          </figure>
                        </div>
                        <div class="media-content">
                          <p class="title is-5"><span>{{$post->boardingType}}</span> For Rent</p>
                          <hr>
                          <h4 class="title is-6 has-text-dark">Rs: <span>{{$post->MonthlyRent}} Per Month</span></h4>
                          <p class="subtitle is-6">@<span>{{$post->user->name}}</span></p>
                        </div>
                      </div>
                  
                      <div class="content">
                        {{str_limit(str_replace("&nbsp;",'',strip_tags($post->Description)),100)}}
                        <br>
                        <div class="my-3"></div>
                        <time datetime="2016-1-1">{{$post->created_at->isoFormat('LLLL')}}</time>
                        <div class="my-2"></div>
                        <a href="/view/{{getBoardingTypeIdById($post->id)}}/{{getPropertyTypeIdById($post->id)}}"><button class="button is-success is-pulled-right">See More</button></a>
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
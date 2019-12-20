<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>

  <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/x.y.z/css/bulma.css" /> --}}

</head>
  <body>

    {{-- navibar section strat here --}}

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

      {{-- navibar section end here --}}
    
    <div class="section">
      <div class="columns">
        <aside class="column is-2 has-background-grey-lighter">
          <div class="column is-centered">
            <figure class="image is-128x128 is-center">
              <img class="is-rounded" src="images/prof.jpg">
            </figure>
          </div>
          <nav class="menu">
            <p class="menu-label has-text-black is-size-6">
              General
            </p>
            <ul class="menu-list">
              <li><a class="is-active ">Profile</a></li>
              <li><a>My Favorit</a></li>
              <li><a>My Inbox</a></li>
            </ul>
            <p class="menu-label has-text-black is-size-6">
              Administration
            </p>
            <ul class="menu-list">
              <li><a>My Boarding</a></li>
              <li><a class="">My Request</a></li>
              <li><a>Add Boarding</a></li>
              <li><a>Post Request</a></li>
            </ul>
            <p class="menu-label has-text-black is-size-6">
              Transactions
            </p>
            <ul class="menu-list">
              <li><a>Payments</a></li>
              <li><a>Transfers</a></li>
              <li><a>Balance</a></li>
            </ul>
          </nav>
        </aside>
        
        <main class="column">
          <div class="level">
            <div class="level-left">
              <div class="level-item">
                <div class="title">Dashboard</div>
              </div>
            </div>
            <div class="level-right">
              <div class="level-item">
                <button type="button" class="button is-small">
                  March 8, 2017 - April 6, 2017
                </button>
              </div>
            </div>
          </div>
          
          <div class="columns is-multiline">
            <div class="column">
              <div class="box">
                <div class="heading">Top Seller Total</div>
                <div class="title">56,950</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Sales $</div>
                      <div class="title is-5">250,000</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Overall $</div>
                      <div class="title is-5">750,000</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Sales %</div>
                      <div class="title is-5">25%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="box">
                <div class="heading">Top Seller Total</div>
                <div class="title">56,950</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Sales $</div>
                      <div class="title is-5">250,000</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Overall $</div>
                      <div class="title is-5">750,000</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Sales %</div>
                      <div class="title is-5">25%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="box">
                <div class="heading">Top Seller Total</div>
                <div class="title">56,950</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Sales $</div>
                      <div class="title is-5">250,000</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Overall $</div>
                      <div class="title is-5">750,000</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Sales %</div>
                      <div class="title is-5">25%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="column">
              <div class="box">
                <div class="heading">Orders / Returns</div>
                <div class="title">75% / 25%</div>
                <div class="level">
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Orders $</div>
                      <div class="title is-5">425,000</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Returns $</div>
                      <div class="title is-5">106,250</div>
                    </div>
                  </div>
                  <div class="level-item">
                    <div class="">
                      <div class="heading">Success %</div>
                      <div class="title is-5">+ 28,5%</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="columns is-multiline">
              @foreach ($Boadrings as $item)
              <div class="column is-3">
                <div class="box is-paddingless">
                  <figure class="image is-1by1">
                    <img src="images/B1.jpg">
                  </figure>
                  <div class="panel-block">
                      <ul class="is-clearfix">
                        <li>Location:{{$item->District}}</li>
                        <li>Price:{{$item->MonthlyRent}} pre month</li>
                        <li>Rooms:{{$item->NoOfRooms}} rooms</li>
                      </ul>
                    </div>
                    <div class="panel-block">
                      <div class="">
                        <button class="button is-success"><a href="/seemore/{{$item->id}}" class="button is-success is-small">See More</a></button>
                        <button class="button is-danger"><a href="" class="button is-danger is-small">Delete</a></button>
                      </div>
                    </div>
                </div>
              </div>   
            @endforeach
            <div class="columns">
              <div class="column is-4"></div>
              <div class="column is-4">
                {{$Boadrings->links()}}
              </div>
              <div class="column is-4"></div>
            </div>
        </main>
      </div>
    </div>
  </body>
</html>
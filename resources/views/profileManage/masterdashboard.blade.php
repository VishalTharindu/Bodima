<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>

  <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
  <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
  <link href={{asset('css/toastr.min.css')}} rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
  <link rel="stylesheet" href="{{asset('css/bulma/argon-dashboard.css')}}">
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/x.y.z/css/bulma.css" /> --}}


  {{-- <script type="text/javascript" src={{asset('js/jquery-3.4.1.min.js')}}></script> --}}
</head>
  <body>

    {{-- navibar section strat here --}}

    <nav class="navbar is-transparent has-shadow" style="height: 80px;">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://versions.bulma.io/0.7.0">
          
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
          @if ((auth()->user()->usertype)==1)
            <a class="navbar-item has-text-success" href="#">
              Primium User
            </a>
            <a class="navbar-item has-text-info" href="/membertype">
              RenewPremium
            </a>
          @else
            <a class="navbar-item has-text-danger" href="#">
              Free User
            </a>
            <a class="navbar-item has-text-primary" href="/membertype">
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

      {{-- sidebar section end here --}}
    
    <div class="section">
      <div class="columns">
        <aside class="column is-2 bg-success">
          <div class="column is-centered">
            <figure class="image is-128x128 is-center">
              <img class="is-rounded" src="/images/prof.jpg">
            </figure>
          </div>
          <nav class="menu">
            <p class="menu-label has-text-black heading is-size-6">
              General
            </p>
            <ul class="menu-list">
              <li><a href="/user/profile" class="text-dark heading-medium">Profile</a></li>
              <li><a class="text-dark heading-medium" href="/my/favorite">My Favorit</a></li>
              <li><a class="text-dark heading-medium" href="/user/message">My Inbox</a></li>
            </ul>
            <p class="menu-label has-text-black heading is-size-6">
              Administration
            </p>
            <ul class="menu-list">
              <li><a href="/user/boarding" class="text-dark heading-medium">My Boarding</a></li>
              <li><a class="text-dark heading-medium">My Request</a></li>
              <li><a href="/addboarding" class="text-dark heading-medium">Add Boarding</a></li>
              <li><a class="text-dark heading-medium">Post Request</a></li>
            </ul>
            <p class="menu-label has-text-black heading is-size-6">
              Transactions
            </p>
            <ul class="menu-list">
              <li><a class="text-dark heading-medium">Payments</a></li>
              <li><a class="text-dark heading-medium">Transfers</a></li>
              <li><a class="text-dark heading-medium">Balance</a></li>
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
                    {{\Carbon\Carbon::now()}}
                    </button>
                </div>
                </div>
            </div>
            @if(Request::is('dashboard'))
            @include('profileManage.dashboard')
            @elseif(Request::is('user/profile'))
            @include('profileManage.profile')
            @elseif(Request::is('user/boarding'))
            @include('profileManage.userboarding')
            @elseif(Request::is('my/favorite'))
            @include('profileManage.userfavouritehandler')
            @elseif(Request::is('user/message/all'))
            @include('profileManage.allmessage')
            @elseif(Request::is('user/message'))
            @include('profileManage.message')
            @elseif(Request::is('user/message/*/view'))
            @include('profileManage.viewmassage')
            @else
            @include('profileManage.dashboard')
            @endif
            <div class="columns">
                
                <div class="columns">
                <div class="column is-4"></div>
                <div class="column is-4">
                
                </div>
                <div class="column is-4"></div>
                </div>
            </div>
        </main>
      </div>
    </div> 
  </body>
  <script type="text/javascript" src={{asset('js/jquery-3.3.1.min.js')}}></script>
  <script src="{{asset('js/toastr.min.js')}}"></script>
  <script type="text/javascript" src={{asset('js/sweetalert2.all.min.js')}}></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {

// Get all "navbar-burger" elements
      const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

      // Check if there are any navbar burgers
      if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach( el => {
          el.addEventListener('click', () => {

            // Get the target from the "data-target" attribute
            const target = el.dataset.target;
            const $target = document.getElementById(target);

            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');

          });
        });
      }

    });
</script>
<script>
  function deleteMe() {
  event.preventDefault();
  var form = event.target.form;
  Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: "hsl(141, 71%, 48%)",
      cancelButtonColor: "hsl(348, 100%, 61%)",
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel!',
      reverseButtons: true
  }).then((result) => {
      if (result.value) {
          
          form.submit();

      } else if (
          // Read more about handling dismissals
          result.dismiss === Swal.DismissReason.cancel
      ) {
          Swal.fire(
              'Cancelled',
              'Boarding is safe :)',
              'info'
          )
        }
      });
    }
  </script>
  @toastr_render
  @include('sweet::alert')
</html>
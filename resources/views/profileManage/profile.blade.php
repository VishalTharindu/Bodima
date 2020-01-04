
<div class="row">
  <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
    <div class="card card-profile shadow">
      <div class="row justify-content-center">
        <div class="justify-content-center">
          <div class="my-3"></div>
          <span class="heading">Profile Info</span>
        </div>
      </div>
      <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
        <div class="d-flex justify-content-between">
        </div>
      </div>
      <div class="card-body pt-0 pt-md-4">
        <div class="row">
          <div class="col-md-12 d-flex justify-content-center">
              <figure class="image is-128x128">
                <img class="is-rounded" src="/images/prof.jpg">
              </figure>         
          </div>
          <div class="col-md-12">
            <div class="card-profile-stats d-flex justify-content-between">
              <div>
                <span class="heading">22</span>
                <span class="description">Friends</span>
              </div>
              <div>
                <span class="heading">10</span>
                <span class="description">Photos</span>
              </div>
              <div>
                <span class="heading">89</span>
                <span class="description">Comments</span>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <h3>
          {{Auth::user()->name}}<span class="font-weight-light">, 27</span>
          </h3>
          <div class="h5 font-weight-300">
            <i class="ni location_pin mr-2"></i>Bucharest, Romania
          </div>
          <div class="h5 mt-4">
            <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
          </div>
          <div>
            <i class="ni education_hat mr-2"></i>University of Computer Science
          </div>
          <hr class="my-4" />
          <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.</p>
          <a href="#">Show more</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-8 order-xl-1">
    <div class="card bg-secondary shadow">
      <div class="card-header bg-white border-0">
        <div class="row align-items-center">
          <div class="col-12">
            <h3 class="mb-0">My account</h3>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="column is-half">
          @if(session()->has('message'))
          <div class="notification is-success">
              <button class="delete"></button>
              <h1 class="is-size-7"><b> {{ session()->get('message') }}</b></h1>
          </div>
          @endif
      </div>
        <script>
          document.addEventListener('DOMContentLoaded', () => {
              (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                  $notification = $delete.parentNode;
                  $delete.addEventListener('click', () => {
                      $notification.parentNode.removeChild($notification);
                  });
              });
          });
      </script>
        <form action="/profile/UpdateAccount" method="POST">
          @csrf
          <h6 class="heading-small text-muted mb-4">User information</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">

                  <label class="form-control-label" for="input-username">Username</label>

                  <input type="text" name="name" id="input-username" class="form-control form-control-alternative" {{ $errors->has('name') ? ' is-invalid' : '' }}"
                  placeholder="{{ __('Username') }}" value="{{ old('name') }}"
                  required autofocus>

                  @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-email">Email address</label>
                  <input type="email" name="email" id="input-email" class="form-control form-control-alternative" {{ $errors->has('email') ? ' is-invalid' : '' }}"
                  placeholder="{{ __('Email') }}" value="{{ old('email') }}"
                  required autofocus>

                  @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-first-name">First name</label>
                  <input type="text" name="first_name" id="input-first-name" class="form-control form-control-alternative" {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                  placeholder="{{ __('First name') }}" value="{{ old('first_name') }}"
                  required autofocus>

                  @if ($errors->has('first_name'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('first_name') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label" for="input-last-name">Last name</label>

                  <input type="text" name="last_name" id="input-last-name" class="form-control form-control-alternative" {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                  placeholder="{{ __('Last name') }}" value="{{ old('last_name') }}"
                  required autofocus>

                  @if ($errors->has('last_name'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('last_name') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
          </div>
          <hr class="my-4" />
          <!-- Address -->
          <h6 class="heading-small text-muted mb-4">Contact information</h6>
          <div class="pl-lg-4">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-control-label" for="input-address">Address</label>

                  <input type="text" name="address" id="input-addresse" class="form-control form-control-alternative" {{ $errors->has('address') ? ' is-invalid' : '' }}"
                  placeholder="{{ __('Address') }}" value="{{ old('address') }}"
                  required autofocus>

                  @if ($errors->has('address'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('address') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-city">City</label>

                  <input type="text" name="city" id="input-city" class="form-control form-control-alternative" {{ $errors->has('city') ? ' is-invalid' : '' }}"
                  placeholder="{{ __('City') }}" value="{{ old('city') }}"
                  required autofocus>

                  @if ($errors->has('city'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('city') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-country">Country</label>

                  <input type="text" name="country" id="input-country" class="form-control form-control-alternative" {{ $errors->has('country') ? ' is-invalid' : '' }}"
                  placeholder="{{ __('Country') }}" value="{{ old('country') }}"
                  required autofocus>

                  @if ($errors->has('country'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('country') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" for="input-country">Postal code</label>

                  <input type="text" name="postalcode" id="input-country" class="form-control form-control-alternative" {{ $errors->has('postalcode') ? ' is-invalid' : '' }}"
                  placeholder="{{ __('Postal Code') }}" value="{{ old('postalcode') }}"
                  required autofocus>

                  @if ($errors->has('postalcode'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('postalcode') }}</strong>
                  </span>
                  @endif
                </div>
              </div>
            </div>
          </div>
          <hr class="my-4" />
          <!-- Description -->
          <h6 class="heading-small text-muted mb-4">About me</h6>
          <div class="pl-lg-4">
            <div class="form-group">
              <label>About Me</label>
              <textarea rows="4" name="description" class="form-control form-control-alternative"" {{ $errors->has('description') ? ' is-invalid' : '' }}"
                placeholder="{{ __('A few words about you ...') }}" value="{{ old('description') }}"
                required autofocus></textarea>

                @if ($errors->has('description'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('description') }}</strong>
                  </span>
                  @endif
            </div>
          </div>
          <div class="field">
            <p class="control has-text-centered">
              <button type="submit" class="button is-success">
                    <span class="buttonspace">Save</span>
              </button>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

 
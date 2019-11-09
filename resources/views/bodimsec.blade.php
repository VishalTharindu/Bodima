<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>

      <link rel="stylesheet" href="{{asset('css/bulma/bulma/css/bulma.css')}}">
      <link rel="stylesheet" href="{{asset('css/mainstyle.css')}}">
      <link rel="stylesheet" href="{{asset('css/fontawesome/fontawesome/css/all.css')}}">
      <link href={{asset('css/css/bootstrap.min.css')}} rel="stylesheet">
      <link href="{{asset('css/css/mdb.css')}}" rel="stylesheet">

  </head>
  <body> 
    @include('incfile.navibar')
    <div class="bodim">
      <div class="container">
        <div class="grid">
          <div class="row text-center">
            <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
              <div class="view overlay rounded z-depth-1">
                <img src="images/B1.jpg" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <div class="card-body pb-0">
                <h4 class="font-weight-bold my-3">Title of the news</h4>
                
                <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i> View project</a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
              <div class="view overlay rounded z-depth-1">
                <img src="images/B2.jpg" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <div class="card-body pb-0">
                <h4 class="font-weight-bold my-3">Title of the news</h4>
                <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                  eveniet ut et voluptates repudiandae.
                </p>
                <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i> View project</a>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
              <div class="view overlay rounded z-depth-1">
                <img src="images/B3.jpg" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <div class="card-body pb-0">
                <h4 class="font-weight-bold my-3">Title of the news</h4>
                <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                  eveniet ut et voluptates repudiandae.
                </p>
                <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i> View project</a>
              </div>
            </div>
          </div>
        </div>
          <div class="grid">
            <div class="row text-center">
              <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
                <div class="view overlay rounded z-depth-1">
                  <img src="images/B1.jpg" class="img-fluid" alt="Sample project image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <div class="card-body pb-0">
                  <h4 class="font-weight-bold my-3">Title of the news</h4>
                  <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                    eveniet ut et voluptates repudiandae.
                  </p>
                  <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i> View project</a>
                </div>
              </div>
                <!-- Grid column -->
              
                <!-- Grid column -->
            <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
              <div class="view overlay rounded z-depth-1">
                <img src="images/B2.jpg" class="img-fluid" alt="Sample project image">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!--Excerpt-->
              <div class="card-body pb-0">
                <h4 class="font-weight-bold my-3">Title of the news</h4>
                <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                  eveniet ut et voluptates repudiandae.
                </p>
                <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i> View project</a>
              </div>
            </div>
              <div class="col-lg-4 col-md-6">
                <!--Featured image-->
                <div class="view overlay rounded z-depth-1">
                  <img src="images/B3.jpg" class="img-fluid" alt="Sample project image">
                  <a>
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--Excerpt-->
                <div class="card-body pb-0">
                  <h4 class="font-weight-bold my-3">Title of the news</h4>
                  <p class="grey-text">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                    eveniet ut et voluptates repudiandae.
                  </p>
                  <a class="btn btn-indigo btn-sm"><i class="fas fa-clone left"></i> View project</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    @include('incfile.footersec')
  </body>
</html>
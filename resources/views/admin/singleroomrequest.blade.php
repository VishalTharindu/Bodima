<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">All SingleRoom Request</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>User Name</th>
              <th>District</th>
              <th>Monthly Rent</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($SingleRoomRequests as $singleroomrequests)
              <tr>
              <td>{{$singleroomrequests->boardingrequest->user->name}}</td>
                <td>{{$singleroomrequests->boardingrequest->District}}</td>
                <td><span>Rs : </span>{{$singleroomrequests->boardingrequest->MonthlyRent}}</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>
                  <div class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bars"></i>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a href="/admin/view/{{getBoardingrequestTypeIdById($singleroomrequests->boardingrequest->id)}}/{{getPropertyrequestTypeIdById($singleroomrequests->boardingrequest->id)}}" class="dropdown-item"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;</i>More</a>
                      <a href="" class="dropdown-item"><i class="fas fa-edit"></i>&nbsp;&nbsp;Update</a>
                      <form action="" method="post">
                        @csrf
                        <a class="dropdown-item" onclick="deleteMe();"><i class="far fa-trash-alt">&nbsp;&nbsp;&nbsp;Delete</i></a>
                      </form>                    
                    </div>
                  </div>
                </td>
              </tr>  
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
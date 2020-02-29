<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">All House Request</h6>
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
              @foreach ($HouseRequests as $houserequests)
              <tr>
              <td>{{$houserequests->boardingrequest->user->name}}</td>
                <td>{{$houserequests->boardingrequest->District}}</td>
                <td><span>Rs : </span>{{$houserequests->boardingrequest->MonthlyRent}}</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>
                    <a href="" class="btn btn-success">More</a>
                    <a href="#" class="btn btn-danger btn-circle float-right"><i class="fas fa-trash"></i></a>
                    <a href="#" class="btn btn-warning float-right"><i class="fas fa-lock"></i></a>
                </td>
              </tr>  
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
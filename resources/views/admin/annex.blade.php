<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">All Annex</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Owner Name</th>
              <th>District</th>
              <th>Monthly Rent</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($Anex as $anex)
              <tr>
              <td>{{$anex->boarding->user->name}}</td>
                <td>{{$anex->boarding->District}}</td>
                <td><span>Rs : </span>{{$anex->boarding->MonthlyRent}}</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>
                    <a href="/view/{{getBoardingTypeIdById($anex->boarding->id)}}/{{getPropertyTypeIdById($anex->boarding->id)}}" class="btn btn-success">More</a>
                    <a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                </td>
              </tr>  
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
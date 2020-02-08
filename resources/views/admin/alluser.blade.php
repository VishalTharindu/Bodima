<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>User Name</th>
              <th>Email</th>
              <th>Phone No</th>
              <th>User Type</th>
              <th>Start date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($Users as $users)
              <tr>
              <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->phone}}</td>
                <td>
                    @if (($users->usertype )== 1)
                        <span>Primeum User</span>
                    @else
                        <span>Free User</span>
                    @endif
                </td>
                <td>2011/04/25</td>
                <td>
                    <a href="" class="btn btn-success">More</a>
                    <a href="#" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
                </td>
              </tr>  
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
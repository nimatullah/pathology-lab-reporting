<div class="row">
    <div class="col-md-12">
        <div class="panel panel-body">
            <div class="page-header"> <h4>Patients List</h4></div>
            <a href="{{url('user/create')}}" class="btn btn-default add-user"> Add New User</a>
            <table class="table table-responsive table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbdoy>
                    @if($user)
                        @foreach($user as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->user_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="{{url('user/'.$user->id)}}" class="btn">View</a>
                                    <a href="#" class="btn">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbdoy>
            </table>
        </div>
    </div>
</div>
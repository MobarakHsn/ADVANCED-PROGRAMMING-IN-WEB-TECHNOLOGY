<div>
    @if(!Session::get('username'))
    <a class="btn btn-primary" href="{{route('Login')}}">Login</a>
    @endif
    @if(Session::get('username'))
        <!-- <a class="btn btn-warning" href="{{route('CreateStudent')}}">Create Student</a>
        <a class="btn btn-success" href="{{route('StudentList')}}">Student List</a>
        <a class="btn btn-danger" href="{{route('EditStudent')}}">Edit student</a>
        <a class="btn btn-secondary" href="{{route('department.list')}}">Departments</a> -->
        <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
    @endif
</div>
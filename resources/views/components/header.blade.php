<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">TheSmartSchool</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">About us <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">Contact us <span class="sr-only">(current)</span></a>
      </li>

      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
    </form>

&nbsp;

    @if(Session::has('user'))
   <span style="color: white;"> {{Session::get('user')['name']}}</span>
    &nbsp;
    <a href="enroll"><button type="button" class="btn btn-danger" >Enroll Now</button></a>
&nbsp;
    <a href="logout "><button type="button" class="btn btn-danger" >Logout</button></a>
    @else
    <a href="enroll"><button type="button" class="btn btn-danger" >Enroll Now</button></a>
    &nbsp;
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap">Login</button>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="login" method="POST">
          @csrf
          <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Log In</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
@endif
  </div>
</nav>

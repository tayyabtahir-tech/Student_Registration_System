<h2>Login Page</h2>
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
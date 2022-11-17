<div class="container">
  <h2 class="align_center">Login</h2>
  <form class="form-horizontal" method="post" action="login_action.php">

    <div class="form-group">
      <label class="control-label col-md-offset-2 col-md-3 col-sm-4" for="username">Username:</label>
      <div class="col-md-3 col-sm-6">
        <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-offset-2 col-md-3 col-sm-4" for="password">Password:</label>
      <div class="col-md-3 col-sm-6">
        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
      </div>
    </div>

    <div class="form-group">
      <div class="col-md-offset-5 col-md-3 col-sm-offset-4 col-sm-6">
        <button type="submit" id="login" name="login" class="btn btn-default">Login</button>
      </div>
    </div>

  </form>
</div>


<div class="container">
  <form action="{{ route('register') }}" method="post">>
    <!--<div class="d-flex flex-column align-items-center">-->
      <div class="mb-3">
        <div class="col-6">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
      </div>
      <div class="mb-3">
        <div class="col-6">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    <!--</div>-->
  </form>
</div>

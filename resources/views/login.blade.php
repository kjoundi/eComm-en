@extends("master")
@section("content")
<div class="row custom-login">
        <div class="container-fluid">
            <div class="col-md-6 offset-md-3">
                <form>
                    <div class="mb-3">
                      <label for="email" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="email"   name="email">
                      
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>




@endsection
  
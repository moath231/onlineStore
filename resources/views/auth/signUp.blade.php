<x-front.front title="{{ $title }}">

  <section class="section-pagetop bg">
    <div class="container">
      <h2 class="title-page">reguster</h2>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">reguster</li>
        </ol>
      </nav>
    </div>
  </section>

  <section class="section-content padding-y">
    <div class="container">
      <div class="col-md-6 mx-auto">
        <div class="card">
          <header class="card-header">
            <h4 class="card-title mt-2">Sign up</h4>
          </header>
          <article class="card-body">
            <form method="" accept="">
              <div class="form-row">
                <div class="col form-group">
                  <label>First name</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
                <div class="col form-group">
                  <label>Last name</label>
                  <input type="text" class="form-control" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" placeholder="">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" value="option1">
                  <span class="form-check-label"> Male </span>
                </label>
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" value="option2">
                  <span class="form-check-label"> Female</span>
                </label>
              </div>
              <div class="form-group">
                <label>Address</label>
                <input class="form-control" type="text">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label>City</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                  <label>Country</label>
                  <select id="inputState" class="form-control">
                    <option> Choose...</option>
                    <option>Uzbekistan</option>
                    <option>Russia</option>
                    <option selected="">United States</option>
                    <option>India</option>
                    <option>Afganistan</option>
                  </select>
                </div>
                <!-- form-group end.// -->
              </div>
              <!-- form-row.// -->
              <div class="form-group">
                <label>Create password</label>
                <input class="form-control" type="password">
              </div>
              <!-- form-group end.// -->
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Register </button>
              </div>
              <!-- form-group// -->
              <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of
                use and Privacy Policy.</small>
            </form>
          </article>
          <!-- card-body end .// -->
          <div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
        </div>
        <!-- card.// -->
      </div>
    </div>
  </section>

</x-front.front>

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
            <form method="post" action="/register">
              @csrf
              <div class="form-row">
                <div class="col form-group">
                  <x-form.input name="FirstName" />
                </div>
                <div class="col form-group">
                  <x-form.input name="LastName" />
                </div>
              </div>
              <div class="form-group">
                <x-form.input name="email" type="email" autocomplete="off" />
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" value="male">
                  <span class="form-check-label">Male</span>
                </label>
                <label class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" value="female">
                  <span class="form-check-label">Female</span>
                </label>
                <x-form.error name="gender" />
              </div>
              <div class="form-group">
                <x-form.input name="address" type="text" />
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <x-form.input name="city" type="text" />
                </div>
                <div class="form-group col-md-6">
                  <label>Country</label>
                  <select id="inputState" name="country" class="form-control">
                    <option disabled selected> Choose...</option>
                    @foreach ($country as $Count)
                      <option value="{{ $Count->name }}">{{ $Count->name }}</option>
                    @endforeach
                  </select>
                  <x-form.error name="country" />
                </div>
              </div>
              <div class="form-group">
                <x-form.input name="password" type="password" autocomplete="off"/>
              </div>
              <div class="form-group">
                <x-form.input name="password_confirmation" type="password" />
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Register </button>
              </div>
              <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of
                use and Privacy Policy.</small>
            </form>
          </article>
          <div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
        </div>
      </div>
    </div>
  </section>

</x-front.front>

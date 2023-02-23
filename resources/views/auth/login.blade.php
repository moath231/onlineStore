<x-front.front title="{{ $title }}">
  
  <x-section.breadcrumb title="login">
    <li class="breadcrumb-item"><a href="{{ route('login') }}">login</a></li>
  </x-section.breadcrumb>

  <section class="section-content padding-y">
    <div class="container">
      <div class="col-md-6 mx-auto">
        <div class="card">
          <header class="card-header">
            <h4 class="card-title mt-2">login</h4>
          </header>
          <article class="card-body">
            <form method="POST" action="/login">
              @csrf

              <a href="#" class="btn btn-faceboo btn-block mb-2"> <i class="fab fa-facebook-f"></i> &nbsp  Sign in with Facebook</a>
              <a href="#" class="btn btn-google btn-block mb-4"> <i class="fab fa-google"></i> &nbsp  Sign in with Google</a>
              <div class="form-group">
                <x-form.input name="email" type="email" autocomplete="off" />
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <x-form.input name="password" type="password" autocomplete="off"/>
              </div>
              <div class="form-group mt-5">
                <button type="submit" class="btn btn-primary btn-block"> login </button>
              </div>
            </form>
          </article>
          <div class="border-top card-body text-center">if you don't have account ! <a href="{{ route('regster') }}">register</a></div>
        </div>
      </div>
    </div>
  </section>

</x-front.front>

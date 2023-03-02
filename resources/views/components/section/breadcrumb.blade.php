<section class="section-pagetop bg">
  <div class="container">
    <h2 class="title-page">{{ $title ?? '' }}</h2>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">home</a></li>
        {{ $slot }}
      </ol>
    </nav>
  </div>
</section>

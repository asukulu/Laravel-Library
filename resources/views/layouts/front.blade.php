<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Blog Template · Bootstrap</title>


 <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('extra-script')

   

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">


   
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      /* stylelint-disable selector-list-comma-newline-after */

    .blog-header {
    line-height: 1;
    border-bottom: 1px solid #e5e5e5;
    }

    .blog-header-logo {
    font-family: "Playfair Display", Georgia, "Times New Roman", serif;
    font-size: 2.25rem;
    }

    .blog-header-logo:hover {
    text-decoration: none;
    }

    .display-4 {
    font-size: 2.5rem;
    }
    @media (min-width: 768px) {
    .display-4 {
        font-size: 3rem;
    }
    }

    .nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
    }

    .nav-scroller .nav {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
    }

    .nav-scroller .nav-link {
    padding-top: .75rem;
    padding-bottom: .75rem;
    font-size: .875rem;
    }

    .card-img-right {
    height: 100%;
    border-radius: 0 3px 3px 0;
    }

    .flex-auto {
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    }

    .h-250 { height: 250px; }
    @media (min-width: 768px) {
    .h-md-250 { height: 250px; }
    }

    /* Pagination */
    .blog-pagination {
    margin-bottom: 4rem;
    }
    .blog-pagination > .btn {
    border-radius: 2rem;
    }

    /*
    * Blog posts
    */
    .blog-post {
    margin-bottom: 4rem;
    }
    .blog-post-title {
    margin-bottom: .25rem;
    font-size: 2.5rem;
    }
    .blog-post-meta {
    margin-bottom: 1.25rem;
    color: #999;
    }

    /*
    * Footer
    */
    .blog-footer {
    padding: 2.5rem 0;
    color: #999;
    text-align: center;
    background-color: #f9f9f9;
    border-top: .05rem solid #e5e5e5;
    }
    .blog-footer p:last-child {
    margin-bottom: 0;
}
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
  
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      <!-- the cart function to count the number of booking in the booking list -->
        <a class="text-muted" href="{{ route('booking.index') }}">Cart <span class="badge badge-pill badge-dark">{{ Cart::count() }}</span></a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="{{ route('events.index')}} ">Aston Events</a>
 


      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
      @include('components.search')
     
        <a class="text-muted" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">

    <a class="p-2 text-muted" href="{{ route('events.index') }}">Sports</a>
      <a class="p-2 text-muted" href="#"></a>

 
      <a class="p-2 text-muted" href="{{ route('events.index') }}">Culture</a>
      <a class="p-2 text-muted" ></a>

    
    
      <a class="p-2 text-muted"  href="{{ route('events.index') }}">Other</a>
     

      <!-- <a class="p-2 text-muted" href="#">Sports</a>
      <a class="p-2 text-muted" href="#"></a>

      <a class="p-2 text-muted" href="#">Design</a>
      <a class="p-2 text-muted" href="#">Culture</a>
      <a class="p-2 text-muted" href="#">Business</a>
      <a class="p-2 text-muted" href="#">Politics</a>
      <a class="p-2 text-muted" href="#">Opinion</a>
      <a class="p-2 text-muted" href="#">Other</a>
      <a class="p-2 text-muted" href="#">Health</a>
      <a class="p-2 text-muted" href="#">Style</a>
      <a class="p-2 text-muted" href="#">Travel</a> -->
    </nav>
  </div>

  @if (session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif

@if (request()->input())
<h4> {{ $events->total() }} result(s) for "{{ request()->q }} "</h4>
@endif




  <div class="row mb-2">
@yield('content')

  </div>
</div>

<!-- <main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        From the Firehose
      </h3>
 -->
   

<footer class="blog-footer">
  <p><a href="">Aston Active</a> </p>
    <a href="#">Back to top</a>
  </p>
</footer>
@yield('extra-js')
</body>
</html>

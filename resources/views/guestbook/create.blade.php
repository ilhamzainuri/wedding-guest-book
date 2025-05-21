<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Alexander & Laura</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="/build/" rel="icon">
  <link href="/build/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/build/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/build/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/build/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/build/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="/build/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/build/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="resume-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <h1 class="sitename">Alexander & Laura</h1>
      </a>
    </div>

    <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/index.html" class="active">Home</a></li>
          <li><a href="../about.html">About</a></li>
          <li><a href="/guestbook/create">Guest</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
  </header>

  <main class="main">
    <section id="resume" class="resume section">
      <div class="container mt-5">
        <div class="text-center mb-4">
          <h2>💌 Wedding Guest Book 💌</h2>
          <p class="lead">Leave your wishes and love for Alexander & Laura</p>
        </div>

        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <div class="card shadow-sm">
          <div class="card-body">
            <form action="{{ route('guestbook.store') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
              </div>
              <div class="mb-3">
                <label for="notes" class="form-label">How do you know the couple?</label>
                <input type="text" class="form-control" id="notes" name="notes" value="{{ old('notes') }}">
              </div>
              <button type="submit" class="btn btn-primary">Send Wish 💌</button>
            </form>
          </div>
        </div>

      </div>
    </section>
  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Ilham Zainuri</strong> <span>All Rights Reserved<br></span></p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href=“https://themewagon.com>ThemeWagon
      </div>
    </div>

  </footer>



  <!-- Optional: footer, scroll-top, JS, etc -->
  <script src="{{ asset('/build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'AdminLTE - Dilesin')</title>

  <!-- Google Font (Poppins) -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  @vite('resources/js/app.js')

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: #f4f6f9;
    }
    .brand-link {
      font-size: 1.1rem;
      font-weight: 500;
      letter-spacing: .3px;
    }
    .nav-sidebar .nav-link.active {
      background: linear-gradient(135deg, #4e73df, #224abe);
      box-shadow: 0 2px 8px rgba(78,115,223,.5);
    }
    .nav-sidebar .nav-link {
      transition: .3s ease;
    }
    .nav-sidebar .nav-link:hover {
      background: rgba(255,255,255,0.08);
      transform: translateX(4px);
    }
    .content-wrapper {
      border-radius: 8px;
      background: white;
      box-shadow: 0 4px 12px rgba(0,0,0,0.05);
      padding: 25px;
      margin: 15px;
    }
    .navbar {
      box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- NAVBAR -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Beranda</a>
      </li>
    </ul>
  </nav>

  <!-- SIDEBAR -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <img src="{{ asset('images/logo.png') }}" class="brand-image img-circle elevation-3" style="opacity:.9">
      <span class="brand-text font-weight-light">Dilesin Admin</span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column">

          <li class="nav-item">
            <a href="{{ url('/admin/dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <!-- CONTENT -->
  <div class="content-wrapper">
    <section class="content-header mb-2">
      <h4 class="mb-0 font-weight-bold">@yield('title')</h4>
    </section>

    @yield('content')
  </div>

</div>
</body>
</html>

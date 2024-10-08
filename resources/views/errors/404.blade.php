<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - 404 Halaman Tidak Ditemukan</title>
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet">
</head>

<body>
  <br/><br/><br/><br/><br/>
  <div id="wrapper">
    <!-- Sidebar -->
    <div class="container-fluid">
        <div class="text-center">
          <img src="{{ asset('img/error.svg') }}" style="max-height: 100px;" class="mb-3">
          <h3 class="text-gray-800 font-weight-bold">Oopss!</h3>
          <p class="lead text-gray-800 mx-auto">Halaman Tidak Ditemukan</p>
          <a href="{{ url()->previous() }}">&larr; Kembali ke halaman sebelumnya</a>
        </div>
     

      </div>
  </div>

  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/ruang-admin.min.js') }}"></script>

</body>

</html> 




<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sunset-Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="">
</head>

<body>

  <!-- Primo Container -->
  <div class="container">
    <!-- Header -->
    <header>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg bg-secondary shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">{{env('APP_NAME')}}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto text-center mb-2 pe-5 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('noi')}}">Chi siamo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Servizi</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Details
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
            <p class="text-center mt-2">SunsetStudio.Company</p>
          </div>
        </div>
        <!-- Fine Navbar -->
      </nav>
    </header>
    <!-- Fine Header -->
  </div>
  <!-- Fine Primo Container -->


  <!-- Main -->
  <!-- H1 e sottotitolo -->
  <main>
    <div class="row m-0">
      <div class="container py-5 d-flex flex-column justify-content-center align-items-center">
        <h1 class="text-center">Eccoci</h1>
        
      </div>
    </div>

     
    <div class="row m-0 py-5 justify-content-center">
      
      <div class="col-md-3 overflow-hidden p-3">
        <img src="{{$pagina['image']}}{{$pagina['id']}}" alt="" class="img-fluid rounded-3">
         </div>

         <div class="col-md-5 p-3 d-flex flex-column justify-content-between align-items-center">
            <p class="text-muted">{{$pagina['nome']}}</p>
            <p>Biografia</p>
          
         </div>



      </div>

    

















  </main>










































  <!-- Footer -->
  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
      </ul>
      <p class="text-center text-body-secondary">&copy; SunsetStudio Company, Inc</p>
    </footer>
  </div>

  <!-- Fine Footer -->







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>




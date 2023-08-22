<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{env('APP_NAME')}} | @yield('title')</title>

  {{-- CDNs --}}
  @yield('cdns')
  {{-- styles --}}
  @vite('resources/js/app.js')
  <body class="bg-dark text-white">
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">MovieDB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Genres</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">New Releases</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2 bg-dark text-white" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <main class="container my-4">
      @yield('main')
    </main>
    <footer class="text-center text-white mt-4 footer">
      <p>&copy; 2023 MovieDB. All rights reserved.</p>
    </footer>
  </body>
</html>
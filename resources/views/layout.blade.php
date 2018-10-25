<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
    <title></title>
  </head>
  <body>
    @yield('notice')
    <div class="container">
      <header>Il favolo blog di Boolean</header>
      <main>
        @include('partials.nav')
        <div>
          @yield('content')
        </div>
        <div class="clear"></div>
      </main>
      <footer>made with love</footer>
    </div>
  </body>
</html>

<!DOCTYPE>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https: //fonts.googleapis.com/css2? family=Lato:wght@300 & family= Roboto" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <link rel="stylesheet" href="css/style.css">
        <script src="/js/scripts.js"></script>

        <title>@yield('title')</title>

    </head>
    <body >
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">HDC Events</a>
                    <ul class="navbar-nav">
                       <li class="nav-item">
                           <a href="/" class="nav-link">Eventos</a>
                       </li>
                       <li class="nav-item">
                           <a href="/events/create" class="nav-link">Criar Eventos</a>
                       </li>
                       <li class="nav-item">
                           <a href="/events/login" class="nav-link">Entrar</a>
                       </li>
                       <li class="nav-item">
                           <a href="#" class="nav-link">cadastrar</a>
                       </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            <div class="content-fluid">
                <div class="row">
                    @if(session('msg'))
                        <p class="msg">{{session('msg')}}</p>
                    @endif

                    @yield('content')
                </div>
            </div>
        </main>

        <footer>
            <p>HDC Events &copy; 2020</p>
        </footer>

        <script  type = "module"  src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script>
        <script nomodule src="https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
    </body>
</html>

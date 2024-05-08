<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo')</title>
        <!-- Compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <style type="text/css">
            .nav-link{
                color: black !important;
            }
            .dropdown-menu{
                background-color: orange;
            }
            .nav-underline{
                background-color: orange;
                color: black !important;
            }
        </style>


    </head>
    <body>
        <nav class="navbar" style = "background-color: #ffa500;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/list">List</a>
                    <a class="navbar-brand" href="/">Inicio</a>
                    <a class="navbar-brand" href="/categoria/cadastro">Nova Categoria</a>
                    <a class="navbar-brand me-0" href="/chamado/cadastro">Novo Chamado</a>
                </div>
        </nav>
        
        @yield('conteudo')
        
        <footer class="d-flex justify-content-center fixed-bottom mt-2">         
            <nav class="navbar flex-sm-fill justify-content-center" style = "background-color: #ffa500;">
                <div>
                <a class="navbar-brand text-sm-center" href="#">@Copyrith 2023</a>
                </div>
            </nav>   
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
    </body>
</html>
    
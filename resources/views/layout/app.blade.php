<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>@yield('Boite à idée')</title>
    <style>
        /* header Styles */
        nav {
            padding: 10px 20px;
            border-bottom: 1px solid #e9ecef;
            background-color: #333;
            overflow: hidden;
        }
    
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
    
        .nav-logo a {
            font-size: 24px;
            font-weight: bold;
            color: #ffffff;
            text-decoration: none;
        }
    
        .nav-links {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
    
        .nav-links li {
            margin-left: 20px;
        }
    
        .nav-links li a {
            display: block;
            color: #ffffff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
    
        
        .active-link {
        width: 25%;
        text-decoration: underline;
        color:#ffffff;
        text-underline-offset: 6px; 
}

        
    </style>
</head>
<body>
    <header>
    <nav class="sticky-top">
        <div class="nav-container">
            <div class="nav-logo">
                <a style="font-weight:700;font-size:30px;" href="/">La Parcelloise</a>
            </div>
            <ul class="nav-links">
                <li class="{{ Route::is('idees.index') ? 'active-link' : '' }}"><a style=" font-weight:400;font-size:24px;" href="{{ url('/') }}">Accueil</a></li>
                <li class="{{ Route::is('categories.index') ? 'active-link' : '' }}"><a style=" font-weight:400;font-size:24px;"  href="/categories">Catégories</a></li>
            </ul>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                @guest<a href="/login" class="btn  btn-sm" style=" font-weight:400;font-size:16px;  background-color:#ffffff;
                color:#333;">Espace perso</a>@endguest
                @auth<a href="#" onclick="document.getElementById('logout-form').submit()" class="btn  btn-sm" style=" font-weight:400;font-size:16px; background-color:#ffffff;
                color:#333;">
                <form action="/logout" action="post" id="logout-form">@csrf</form>
                 Se Déconnecter
                 </a>@endauth
                <!--<form class="form-inline my-2 my-lg-0 ml-auto" action="{*{ route('livres.search') }}" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Rechercher un livre" aria-label="Rechercher" name="query">
                </form>-->
        </div>
    </nav>    
    </header>

     <!-- Banner Section 
     @*yield('banner')-->

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">La parceloise</h5>
                    <p>
                        Votre espace qui vous permet de donner votre avis pour le développement des Parcelles Assainies
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Liens utiles</h5>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="/" class="text-dark">Accueil</a>
                        </li>
                        @auth<li>
                            <a href="/categories" class="text-dark">Catégories</a>
                        </li>@endauth
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contact</h5>
                    <ul class="list-unstyled mb-0 ">
                        <li>
                            <a href="#!" class="text-dark" style="text-decoration: none">Email: contact@parcelleassainie.sn</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark" style="text-decoration: none">Téléphone: +221  33 835 51 20</a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark" style="text-decoration: none">Adresse: Unité 17 rue 17-19 x rue Serigne Abdoul Aziz Sy, Dakar, Sénégal</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: #333; color:#ffffff">
            © 2024 Mareme Thiaw. Tous droits réservés.
        </div>
    </footer>
    

    <!-- Include your JS files here -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

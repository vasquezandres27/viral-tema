<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viral</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="syle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/assets\css\viral.css">
</head>
<body>
    <header class="row header">
        <section class="col-6 header__main">
            <section class="col-12 header__logo"> 
                <figure class="header__logo__img" style="
                margin: 1em auto;
                ">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets\img\logo.png" class="img-fluid" alt="Viral Logo"/>
                </figure>
            </section>
            <nav class="col-12 header__nav"> 
                <ul class="nav nav__main j-center">
                    <li class="nav-item nav__item">
                        <a class="nav-link nav__link t-black" href="#">Tecnología</a>
                    </li>
                    <li class="nav-item nav__item">
                        <a class="nav-link nav__link t-black" href="#">YouTube</a>
                    </li>
                    <li class="nav-item nav__item">
                        <a class="nav-link nav__link t-black" href="#">Música</a>
                    </li>
                    <li class="nav-item nav__item">
                        <a class="nav-link nav__link t-black" href="#">Cine</a>
                    </li>
                    <li class="nav-item nav__item">
                        <a class="nav-link nav__link t-black" href="#">Series</a>
                    </li>
                </ul>
            </nav>
        </section>
        <section class="col-6 header__sec d-flex a-center">
        <div class="row full-width">
        <nav class="col-5 nav_social">
                <ul class="nav nav__main">
                    <li class="nav-item nav__item">
                        <a class="nav-link active nav__link" href="#">
                        <i class="t-black fab fa-facebook"></i><a href="https://facebook.com"></a> 
                        </a>
                    </li>
                    <li class="nav-item nav__item">
                        <a class="nav-link active nav__link" href="#">
                        <i class="t-black fab fa-instagram"></i><a href="https://instagram.com"></a>
                        </a>
                    </li>
                    <li class="nav-item nav__item">
                        <a class="nav-link active nav__link" href="#">
                        <i class="t-black fab fa-twitter-square"></i><a href="https://twitter"></a>
                        </a>
                    </li>
                    <li class="nav-item nav__item">
                        <a class="nav-link active nav__link" href="#">
                        <i class="t-black fab fa-youtube-square"></i><a href="https://youtube.com"></a>

                        </a>
                    </li>
                    <li class="nav-item nav__item">
                        <a class="nav-link active nav__link" href="#">
                        
                        </a>
                    </li>
                </ul>
            </nav>
           <section class="col-7 input__search">
            <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </section>
        </section>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row"> 
            <div class="principal col-8">
            </div>
            <div class="principal col-8">
            Tecnología
            </div>
            <div class="sidebar col-4">
            Publicidad
            </div>
            </div>
    <footer class="row"> 
            <section class="col-12 header__logo" style="
                background-color: black;"> 
                <figure class="header__logo__img" style="
                margin: 1em auto; 
                ">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets\img\logo2.png" class="img-fluid" alt="Viral Logo"/>
                </figure>
            </section>
    </footer>  
</body>
</html>

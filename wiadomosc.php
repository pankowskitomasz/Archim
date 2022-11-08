<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="przeglądy,nadzór,usługi nadzoru, przeglądy obiektu budowlanego">
    <meta name="description" content="Archim to nie tylko oferta pełnego zakresu usług w obszarze 
        projektowania, ale również profesjonalny nadzór na inwestycją niezależnie od wielkości 
        obiektu budowlanego">
    <meta property="og:title" content="Archim">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:locale" content="pl_PL">
    <link rel="icon" href="img/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="css/styles.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <title>Archim | Potwierdzenie</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light border-bottom border-secondary shadow-lg">
        <a href="index.html" class="navbar-brand">
            <img src="img/logo_big.jpg" alt="archim logo">
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#main-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-auto text-uppercase font-f1">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Oferta</a>
                    <div class="dropdown-menu mt-0 mt-md-3">
                        <a href="nadzor.html" class="dropdown-item">Nadzór</a>
                        <a href="przeglady.html" class="dropdown-item">Przeglądy</a>
                        <a href="inne.html" class="dropdown-item">Inne</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="onas.html" class="nav-link">O Nas</a>
                </li>
                <li class="nav-item">
                    <a href="kontakt.html" class="nav-link">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="container-fluid d-flex minh-100 align-items-center">
        <div class="col-10 mx-auto my-auto">
            <div class="row border-bottom border-secondary">
                <h4>Potwierdzenie</h4>
            </div>
            <div class="row my-4">
                <div class="col-11 mx-auto contact-data">
                    <div class="row px-2">					
                        <ul class="list-inline p-1 p-md-4 text-secondary">
                            <li class="list-inline-item"><span class="font-weight-bold">Imię i Nazwisko</span>
                            <li class="list-inline-item"><?php
                                if(isset($_POST['fname'])){
                                echo htmlspecialchars($_POST['fname']); 
                                }?>
                            </li>		
                        </ul>
                    </div>
                    <div class="row px-2">					
                        <ul class="list-inline p-1 p-md-4 text-secondary">
                            <li class="list-inline-item"><span class="font-weight-bold">Email</span>
                            <li class="list-inline-item"><?php
                                if(isset($_POST['femail'])){
                                echo htmlspecialchars($_POST['femail']); 
                                }?>
                            </li>		
                        </ul>
                    </div>
                    <div class="row px-2">					
                        <ul class="list-inline p-1 p-md-4 text-secondary">
                            <li class="list-inline-item"><span class="font-weight-bold">Telefon</span>
                            <li class="list-inline-item"><?php
                                if(isset($_POST['ftel'])){
                                echo htmlspecialchars($_POST['ftel']); 
                                }?>
                            </li>		
                        </ul>
                    </div>                
                    <div class="row px-2">					
                        <ul class="list-inline p-1 p-md-4 text-secondary">
                            <li class="list-inline-item"><span class="font-weight-bold">Wiadomość</span>
                            <li class="list-inline-item"><?php
                                if(isset($_POST['fmessage'])){
                                echo htmlspecialchars($_POST['fmessage']); 
                                }?>
                            </li>		
                        </ul>
                    </div>
			    </div>
            </div>
        </div>        
    </section>
    <footer class="container-fluid bg-red px-3 text-white border-top border-dark">
        <div class="row">
            <div class="col-12 col-sm-6 d-flex align-items-end order-2 order-sm-1">
                <ul class="list-unstyled my-auto pl-3 border-left border-light pb-4">
                    <li><small>Archim Sp. z o.o.</small></li>
                    <li><small>00-000 Warszawa</small></li>
                    <li><small>ul.: Marszałkowska 1</small></li>
                    <li><small>tel.: (+48) 123 456 789</small></li>
                    <li><small>email: archim&#64;mail.com</small></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 order-1 order-sm-2">                
                <ul class="list-unstyled list-var mx-auto text-center text-sm-right mt-2 p-3">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/" target="_blank" class="icon-item mx-1 mr-sm-0" rel="noreferrer"><span class="fa fa-facebook-official"></span></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/" target="_blank" class="icon-item mx-1 mr-sm-0" rel="noreferrer"><span class="fa fa-instagram"></span></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.twitter.com/" target="_blank" class="icon-item mx-1" rel="noreferrer"><span class="fa fa-twitter"></span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row px-3 text-center pb-1">
            <small class="mx-auto pt-2 border-top border-light w-100">
                Copyright &copy; 2019-2021 Tomasz Pankowski 
                <a href="privacy.html" class="text-light">
                    Privacy policy
                </a>
            </small>
        </div>
    </footer>
    <script src="js/main.min.js"></script>
    <script src="js/gpdr__bootstrap.js"></script>
</body>
</html>
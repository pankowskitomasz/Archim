<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="max-age=3600">
    <meta name="keywords" content="przeglądy,nadzór,usługi nadzoru, przeglądy obiektu budowlanego">
    <meta name="description" content="Archim to nie tylko oferta pełnego zakresu usług w obszarze 
        projektowania, ale również profesjonalny nadzór na inwestycją niezależnie od wielkości 
        obiektu budowlanego">
    <link rel="icon" href="img/favicon.jpg">
    <link rel="stylesheet" type="text/css" href="css/styles.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <title>Archim | Potwierdzenie</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light border-bottom border-red shadow-lg">
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
                    <div class="dropdown-menu mt-0 mt-md-2 py-0">
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
    <section class="container-fluid d-flex">
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
    <footer class="container-fluid bg-red p-3 text-white border-top border-dark">
        <div class="row">
            <div class="col-12 col-sm-6 d-flex">
                <ul class="list-unstyled my-auto pl-3 border-left border-light">
                    <li>Archim Sp. z o.o.</li>
                    <li>00-000 Warszawa</li>
                    <li>ul.: Marszałkowska 1</li>
                    <li>tel.: (+48) 123 456 789</li>
                    <li>email: archim&#64;mail.com</li>
                </ul>
            </div>
            <div class="col-12 col-sm-6">                
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
        <div class="row px-3 text-center">            
            <small class="mx-auto w-100 border-top border-light text-white my-0">
                Website demo, Copyright &copy; 2019-2020 | 
                <a href="privacy.html" class="text-white">Privacy</a>
            </small>
        </div>
    </footer>
    <div class="modal" id="privacyModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="font-header text-red">GPDR Declaration</h4>
                </div>
                <div class="modal-body">
                    <p class="initialism">
                        This website is a <span class="text-danger"> demo version </span> of real website,  It doesn't collect and process,
                        in long term meaning (longer than needed for website operation during visitor's
                        presence), any user (visitor) data. All information collected during visitor's 
                        presence on this website is used only for technical purposes, required for 
                        correct operation of website or demonstration purposes related to technical 
                        mechanisms and presentation of its operation... 
                        <a href="privacy.html" class="label label-primary">More about privacy</a>
                    </p>                        
                    <p class="initialism">
                        If you accept privacy policy please click button "accept". If you 
                        refuse it, leave page by closing it in your web browser, please.
                    </p>
                </div>
                <div class="modal-footer">
                    <div class="text-center w-100">
                        <button class="btn btn-success"
                            onclick="acceptPrivacyPolicy()">
                            Accept
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    <script type="text/javascript" src="js/main.min.js"></script>
</body>
</html>
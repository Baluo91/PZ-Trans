<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <title>PZtrans - komplexné sťahovacie služby</title>

    <!--Favicon-->
    <link rel="icon" type="image/jpg" href="/Images/logo_web_pz 1favilogo.png">
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--BOOTSTRAP ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!--LIGHTBOX-->
    <link rel="stylesheet" href="/css/lightbox.min.css">
    <!--CSS-->
    <link rel="stylesheet" href="/css/style.css">
    <!--JS-->
    <script src="/js/lightbox-plus-jquery.min.js"></script>
</head>
<body>
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg fs-3 fw-semibold py-4" style="background-color: rgba(255, 255, 255, 0.9);" data-bs-theme="light">
        <div class="container">
            <a href="/index.php" class="navbar-brand">
                <img class="logo" src="\Images\logo_web_pz.jpg" alt="logo">
            </a>

            <button class="navbar-toggler mt-4" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item px-3">
                        <a href="/index.php" class="nav-link">Služby</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="/gallery.html" class="nav-link">Galéria</a>
                    </li>
                    <li class="nav-item px-3">
                        <a href="/pricelist.php" class="nav-link">Cenník</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!--Header-->
    <header class="main-header">
        <div class="bg-dark text-light p-5 text-center">
            <div class="container">
                <div class="d-md-flex align-items-center justify-content-between">
                    <div>
                        <h1 class="text-start">Kvalitné komplexné <br> <span class="text-warning">sťahovacie služby</span> &nbsp; <br> v rámci celej EU</h1>
                        <p class="lead my-4 fs-3 text-start">Vaše cenné veci budú premiestnené na nové miesto <span class="text-warning fw-bold">bezpečne</span></p>
                    </div>
                        <img class="img-fluid w-50 d-none d-sm-block" src="/images/web_FOTO_pz.jpg" alt="">
                </div>
            </div>
        </div>
    </header>

    <!--Price list-->
    <section class="bg-warning">
        <div class="container">
            <div class="row py-5 px-5 text-dark fw-semibold g-4">
                <div class="col-md">
                    <h2 class="text-center display-1"><i class="bi bi-truck"></i></h2>                    
                    <div class="card-body">
                      <p class="card-text fs-3 text-center px-5">Preprava v rámci mesta <span class="text-white fs-1 fw-medium">45€</span></p>
                    </div>
                  </div>
        
                  <div class="col-md bg-dark text-light center-showcase">
                    <h2 class="text-center display-1"><i class="bi bi-box"></i></h2>                    
                    <div class="card-body">
                      <p class="card-text fs-3 text-center">Cena prepravy mimo mesta <span class="text-warning fs-1 fw-medium">0,70€/km</span></p>
                    </div>
                  </div>
            </div>
        </div>
        
    </section>
 
    <!--Formulár-->
  <section class="form" id="contact-form">
    <form action="mailer.php" method="post" class="box">

    <?php /* už funkčný kód */

    if (isset($_GET['success']))  {
       
       if($_GET['success'] == 1){
           echo "<div class=\"form-result success\">Odoslanie prebehlo v poriadku</div>";
       };
       

       if($_GET['success'] == -1){
           echo "<div class=\"form-result error\">Chyba pri odoslaní. Skúste znova</div>";
       };

      }
      ?>


      <!-- <div class="form-result success">
        Odoslanie prebehlo v poriadku
      </div>
      <div class="form-result error">
        Chyba pri odoslaní. Skúste znovu
      </div> -->

      <h1 class="form-head pb-2 display-5">Nezáväzná cenová ponuka <br> s možnosťou obhliadky úplne zadarmo.</h1>
      <p class="fs-5 fw-lighter text-black">V správe uvádzajte aj váš <span class="text-warning fw-bold">telefonický kontakt</span>  pre jednoduchšiu komunikáciu a <br> efektívnejšie vytvorenie cenovej ponuky.</p>
      <input type="text" name="name" placeholder="Meno a priezvisko">
      <input type="email" name="email" placeholder="Email">
      <textarea name="message" placeholder="Popis sťahovania" cols="30" rows="8"></textarea>
      
      <p class="fs-6 fw-lighter text-black w-50 mx-auto">Vaše osobné údaje spracovávame iba za účelom komunikácie a cenovej ponuky. <br> Vaše osobné údaje nebudú poskytnuté žiadnym tretím osobám a nebudú využité na iné, ako vyššie uvedené účely. <br> <a href="/gdpr.html" class="text-decoration-none text-warning fw-bold">Viac informácií nájdete tu.</a></p>
      <input class="btn submit" type="submit" value="Odoslať">
    </form>

  </section>


    <!--Footer-->
    <footer class="bg-dark py-3 mt-0" id="footer">
        <div class="container text-light text-center">
            <p class="display-5 mb-1"><a href="/index.php" class="text-decoration-none text-white">PZtrans</a></p>
            <p class="fs-3"><a href="tel:+421 951 779 662" class="text-decoration-none text-warning " >+421 951 779 662</a></p>
            <p class="text-white">Každý tovar je pred prepravou poistený do 50 000 EUR.</p>
            <p class="fs-6"><a href="/gdpr.html" class="fw-lighter text-decoration-none text-warning" >Zásady ochrany osobných údajov</a></p>
            <small class="text-white-50">&copy; Copyright by StrawHog. All rights reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>
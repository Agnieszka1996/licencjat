<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tablet Gutenberga</title>    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Suez+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <div class="container-fluid">

        <div class="header">
            <img src="assets/banner.png">
        </div>
        <div class="row d-flex header__menu">
            <div class="col-12 col-md-2 header__menu__item">
                <a href="./wiedza.html">
                    wiedza
                </a>
            </div>
            <div class="col-12 col-md-2 header__menu__item">
                <a href="./blog.php">
                    blog
                </a>
            </div>
            <div class="col-12 col-md-2 header__menu__item dropdown">
                praktyka
                    <div class="dropdown-content">
                        <a href="./typograficzna-mapa-europy.php">typograficzna mapa Europy</a>
                        <a href="./miniedytor.html">miniedytor tekstu</a>
                    </div>
            </div>
            <div class="col-12 col-md-2 header__menu__item">
                <a href="./materiały.html">
                    materiały
                </a>
            </div>
            <div class="col-12 col-md-2 header__menu__item">
                <a href="./o-serwisie.html">
                    o serwisie
                </a>
            </div>
        </div>
    </div>

    <div class="container">
        <main>

            <section>

                <div class="row d-flex justify-content-center wiedza-praktyka">

                    <div class="col-12 col-lg-6 wiedza-praktyka wiedza">
                        <h2>baza wiedzy</h2>
                        <div class="wiedza-praktyka wiedza__inner"></div>                         
                        <div class="wiedza-praktyka wiedza__desc">wiedza o typografii w jednym miejscu</div>
                    </div>

                    <div class="col-12 col-lg-6 wiedza-praktyka praktyka">
                        <h2 class="wiedza-praktyka praktyka__header">typografia w praktyce</h2>
                        <div class="wiedza-praktyka praktyka__inner"></div>                        
                        <div class="wiedza-praktyka praktyka__desc">zobacz, jak działa typografia</div>                        
                    </div>

                </div>

            </section>
            
            <section>

                <div class="row d-flex justify-content-center blog">
                <h2>co nowego na blogu?</h2>

                <?php
                    include "autoryzacja.php";
                    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
                    or die("Błąd polączenia z bazą");
                    mysqli_set_charset($conn, "utf8");

                    $result=mysqli_query($conn, "SELECT * FROM blog LIMIT 3");

                    while($row=mysqli_fetch_array($result))
                        {
                            echo '<div class="col-12 col-lg-4 blog__item">
                                    <a href="./artykul.php?id='.$row['id'].'">
                                        <img src="'.$row['grafika'].'"/>                                   
                                        <div class="blog__item blog__item__desc">'.$row['tytul'].'</div>  
                                     </a>                          
                                  </div>';                        
                        }
                ?>

                </div>
            </section>

        </main>
    </div>
    
    <div class="container-fluid footer">
        <div class="container">
            <div class="row d-flex">
                <div class="col">
                    <div class="footer__links">
                        <div class="col footer__link">
                            <a href="./index.php">
                                strona główna
                            </a>
                        </div>
                        <div class="col footer__link">
                            <a href="./wiedza.html">
                                wiedza
                            </a>
                        </div>
                        <div class="col footer__link">
                            <a href="./blog.php">
                                blog
                            </a>
                        </div>
                        <div class="col footer__link">
                            <a href="./typograficzna-mapa-europy.php">
                                typograficzna mapa Europy
                            </a>
                        </div>
                        <div class="col footer__link">
                            <a href="./miniedytor.html">
                                miniedytor tekstu
                            </a>
                        </div>
                        <div class="col footer__link">
                            <a href="./materiały.html">
                                materiały
                            </a>
                        </div>
                        <div class="col footer__link">
                            <a href="./o-serwisie.html">
                                o serwisie
                            </a>
                        </div>
                    </div>
                </div>
            

                <div class="col">
                    <div class="footer__copy">
                        <img src="assets/logo.png">
                        <p>Copyright by Agnieszka Bień 2021</p>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tablet Gutenberga</title>    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Suez+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <div class="container-fluid">

        <div class="header">
            <a href="http://brzoza.wzks.uj.edu.pl/~18_bien/aplikacja/">
                <img src="assets/banner.png">
            </a>
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
                        <a href="./typograficzna-mapa-europy.php">Typograficzna Mapa Europy</a>
                        <a href="./miniedytor.html">Miniedytor tekstu</a>
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
            
            <h2>Wpisy blogowe</h2>

            <div class="row wpisy-blogowe">

                <?php
                    include "autoryzacja.php";

                    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
                    or die("Błąd połączenia z bazą");
                    mysqli_set_charset($conn, "utf8");

                    $result=mysqli_query($conn, "SELECT * FROM blog");

                    while($row=mysqli_fetch_array($result))
                    {
                    echo '<div class="col-12 d-flex wpisy-blogowe wpisy-blogowe__wpis">
                            
                                <div class="col-4 wpisy-blogowe wpisy-blogowe__wpis wpisy-blogowe__wpis__cover">
                                    <a href="./artykul.php?id='.$row['id'].'">
                                        <img src="'.$row['grafika'].'"/>
                                    </a>
                                </div>
                                
                                <div class="col-5 wpisy-blogowe wpisy-blogowe__wpis wpisy-blogowe__wpis__tekst">
                                    <a href="./artykul.php?id='.$row['id'].'">
                                        <div class="wpisy-blogowe wpisy-blogowe__wpis wpisy-blogowe__wpis__tekst wpisy-blogowe__wpis__tekst--tytul">'.$row['tytul'].'</div>
                                        <div class="wpisy-blogowe wpisy-blogowe__wpis wpisy-blogowe__wpis__tekst wpisy-blogowe__wpis__tekst--lead">'.$row['lead'].'</div>
                                        <div class="wpisy-blogowe wpisy-blogowe__wpis wpisy-blogowe__wpis__tekst wpisy-blogowe__wpis__tekst--tagi"><span class="wpisy-blogowe wpisy-blogowe__wpis wpisy-blogowe__wpis__tekst wpisy-blogowe__wpis__tekst--tagi wpisy-blogowe__wpis__tekst wpisy-blogowe__wpis__tekst--tagi--bold">Tagi:</span> '.$row['tagi'].'</div>
                                    </a>
                                </div>                            
                        </div>';
                    
                    }

                    ?>

            </div>
            
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
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
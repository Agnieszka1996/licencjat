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

<main>

    <?php
include "autoryzacja.php";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
or die("Błąd połączenia z bazą!");
mysqli_set_charset($conn, "utf8");

if($_GET['id']!="") 
{
    $result=mysqli_query($conn, "SELECT * FROM historia WHERE id=".$_GET['id']);
}

while($row=mysqli_fetch_array($result))
{
    echo '<div class="container">

        <div class="row">

            <div class="col-12 col-lg-8 article">
                    <div class="historia historia__wpis historia__wpis__title">'.$row['tytul'].'</div>                    
                    <div class="historia historia__wpis historia__wpis__lead">'.$row['lead'].'</div>
                    <div class="historia historia__wpis historia__wpis__tresc">'.$row['tresc'].'</div>                
            </div>
            

            <div class="col-12 col-lg-4 article__zajawki">

                <h3>Zobacz także</h3>';
}

                $result=mysqli_query($conn, "SELECT * FROM historia WHERE id<>".$_GET['id']);

                while($row=mysqli_fetch_array($result))
                {
                echo '<div class="d-flex article__zajawki article__zajawki__zajawka">
                    <a href="./artykul.php?id='.$row['id'].'">  
                        <div class="article__zajawki article__zajawki__zajawka article__zajawki__zajawka__tytul">'.$row['tytul'].'</div>
                    </a>
                </div>';
                }
                echo '
            </div>
        </div>';
    
    ?>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
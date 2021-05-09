<!DOCTYPE html>
<html lang="pl">
<head>
Â  Â  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
Â  Â  <meta http-equiv="X-UA-Compatible" content="ie=edge">
Â  Â  <title>Tablet Gutenberga</title>    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Suez+One&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
<main>

    <?php
include "autoryzacja.php";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)
or die("Błąd połączenia z bazą!");
mysqli_set_charset($conn, "utf8");

if($_GET['id']!="") 
{
    $result=mysqli_query($conn, "SELECT * FROM blog WHERE id=".$_GET['id'].";");
}

while($row=mysqli_fetch_array($result))
{
    echo '<div class="container-fluid">
        <div class="article__banner" style="background-image: url('.$row['grafika'].');background-size: cover;"><div class="article__overlay"><h2 class="article__title">'.$row['tytul'].'</h2></div>
    </div>
    <div class="container">

        <div class="row">

            <div class="col-12 col-lg-8 article">

                <div class="container">                    
                    <div class="article__data">'.$row['data'].'</div>
                    <div class="article__lead">'.$row['lead'].'</div>
                    <div class="article__tresc">'.$row['tresc'].'</div>
                    <div class="article__tagi"><span class="article__tagi article__tagi--bold">Tagi:</span>'.$row['tagi'].'</div>
                </div>
            </div>
            

            <div class="col-12 col-lg-4 article__zajawki">

                <h3>Zobacz także</h3>';
}

                $result=mysqli_query($conn, "SELECT * FROM blog");

                while($row=mysqli_fetch_array($result))
                {
                echo '<div class="d-flex article__zajawki article__zajawki__zajawka">
                    <a href="./artykul.php?id='.$row['id'].'">
                        <div>                        
                            <img src="'.$row['grafika'].'" class ="article__zajawki__zajawka__img"/>                       
                        </div>                    
                        <div class="article__zajawki article__zajawki__zajawka article__zajawki__zajawka__tytul">'.$row['tytul'].'</div>
                    </a>
                </div>

            </div>
        </div>
    
    </div>';
    }
    
    ?>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
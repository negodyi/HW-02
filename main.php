<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HW-02 </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

        <div class ="header">
             <?php include 'logo.inc.php' ?>
             <?php include 'menu.inc.php' ?>

        </div>

        <div class ="about_me">

          <h1>  <?php echo $p ?> </h1>
            <h3> <?php echo $p2 ?></h3>

            <body>
            <button type="button" class="button">Полетели!</button>
            </body>



            <div class ="data">
                <div class ="myImg">
                    <?php
                    echo '<img src="img/00.jpeg"  width="800" height="450">';
                    ?>

                </div>

                <div class="fullname">
                     <p> Меня зовут
                     <?php echo $name, ' ',$surname . '<br>';
                           echo 'город', ' ', $city; ?>
                     </p>

                     <p> Мне
                     <?php echo $age;  ?>
                     лет </p>
                     <p> Весёлое и опасное путешествие по небесным просторам в компании весёлого пилота </p>
                     <p> От винта </p>
                </div>

                <div class="img"></div>

            </div>

            <div class="knowledge">

                 <?php include 'knowledge.inc.php'; ?>
                 <?php
                 echo  $a, ' ', $b,' ', $c;
                 ?> <br>

                 <?php
                     $a = 10;
                     $b = 20;
                     $c = $a + $b;
                     echo $c;
                 ?> <br>
                  <?php
                     echo $d;
                 ?>

            </div>

            <div class="article">
                 <p class="text">
                     Немного о себе - старасюь учусь, материал по тихоньку осваиваю.
                     Информация заходит со скрипом).
                     Но мы тут для того что бы познавть новое.
                 </p>

            </div>

        </div>

             <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>


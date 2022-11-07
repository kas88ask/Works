<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project1</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php
                    echo '<img src="/img/php.jpg">';
                    ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
                    <p> Мы научились создавать переменные и изучили простые операции с ними, например: </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>

                    <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                       
                    <?php
                        $a = 35;
                        $b = 87;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>

                     <?php
                        echo $d;
                    ?>   <br>

                    <?php echo gettype($number);
                    ?>   <br>

                    <?php
                    echo $z;
                    ?>   <br>

                    <?php echo $k;
                    ?>   <br>

            </div>

            <div class="article">
                <p class="text">
                    Новые знания всегда вызывают опасения и сложности. Зачастую это пугает. Но если добавить дополнительное время для самообучения, то чувствуешь себя сильнее и увереннее.
                    На самом деля я рад что ввязался в эту "авантюру", имею ввиду курс "Белый хакер"от SKILLFACTORY.
                    Спасибо всем без иключения из команды SKILLFACTORY за Ваш труд и поддержку.
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>

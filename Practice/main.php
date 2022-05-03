<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
        
          <h1><?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo  '<img src="/img/beard.jpg" width="300" height="300" alt="Бородатый хакер" title="бородатый хакер">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <h3><?php   echo $a, ' ', $b, ' ', $c; ?></h3> <br><hr>
                    
                    
                    <p><h3><?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c; 
                        
                    ?></h3></p><br><hr>
                      
                    <br>              
                     
                     <h4><?php
                        echo $d;
                    ?></h4>
                    <hr>

                    <h3><?php 
                        echo $tx . $txe . $txv;
                        ?></h3> <hr>
                     
            </div>

            <div class="article">
            <center><video src="/img/1.MP4" controls width="400" height="350"></video></center>
                <p class="text"><h2>
                В этом тексте я бы хотел рассказать о том, как сильно я мечтаю и жажду стать специалистом в сфере ИБ.
                И конкретнее в проведении тестирования на проникновения. Да я уже не молод, но мой жизненный опыт и опыт проведения оперативно-розыскных мероприятий,
                подходит как нельзя лучше для проведения пентеста в формате RedTeam. Я хочу и буду заниматься любимым делом!!!ОСУ!!!
                </h2>
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>






        

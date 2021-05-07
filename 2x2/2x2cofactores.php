<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cofactores 2x2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/main.css'>
        <!-- Google Font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
        <!-- animate.style-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        
</head>
<body>
    <div class="Main-Header">
        <hi class="tittle-header">CalTIC</hi>
    </div>
    <div>
        <div class="Tittle-Main">
            <h1 class="animate__animated animate__fadeInUp">Cofactores</h1>
        </div>
        <div class="determinante-menu">
            <div class="matriz3x3">
                <form action="2x2cofactores.php" method="POST">
                    <table class="tg">
                        <tbody>
                            <tr>
<<<<<<< HEAD:2x2/2x2cofactores.php
                            <th class="tg-0pky"><input type="number" name="n1" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="n2" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name="n3" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="n4" max="10000"></td>
=======
                            <th class="tg-0pky"><input type="number" name="name" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="name" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name=" name" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="name" max="10000"></td>
>>>>>>> 511f1a6aa767b53fba9ec889d4d5aa08349d65c8:2x2/2x2cofactores.html
                          </tr>
                        </tbody>
                    </table>
                    <input type="submit" value="Calcular">
                </form>
                <?php

                $a1=$_POST["n1"];
                $a2=$_POST["n2"];
                $b1=$_POST["n3"];
                $b2=$_POST["n4"];

                $ca1 = pow((-1),2)*$b2;
                $cb1 = pow((-1),3)*$a2;
                $ca2 = pow((-1),3)*$b1;
                $cb2 = pow((-1),4)*$a1;
             
                ?>
            </div>
            <!--<img class="equal" src="img/igual.PNG" alt="igual">-->
            <hi class="equal">=</hi>
            <div class="result-determinante3x3">
                <form action="#" method="post">
                    <table class="tg">
                        <tbody>
                            <tr>
<<<<<<< HEAD:2x2/2x2cofactores.php
                            <th class="tg-0pky"><input type="number" value="<?php echo $ca1 ?>" max="10000"></th>
                            <th class="tg-0pky"><input type="number" value="<?php echo $ca2 ?>" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" value="<?php echo $cb1 ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $cb2 ?>" max="10000"></td>
=======
                            <th class="tg-0pky"><input type="number" name="name" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="name" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name=" name" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="name" max="10000"></td>
>>>>>>> 511f1a6aa767b53fba9ec889d4d5aa08349d65c8:2x2/2x2cofactores.html
                          </tr>
                        </tbody>
                    </table>
                </form>
                
            </div>
        </div> 
        <div class="Sub-menu">
            <div>
                <a href="../index.html">
                    <img src="../img/1x/home_white_24dp.svg" class="Button-home">
                    </a>
            </div>
            <div class="back-button">  
<<<<<<< HEAD:2x2/2x2cofactores.php
                <a href="../2x2-main.html">
                    <img src="../img/1x/undo_white_24dp.svg" class="Button-home">
=======
                <a href="..\2x2-main.html">
                    <img src="..\img\1x\undo_white_24dp.svg" class="Button-home">
>>>>>>> 511f1a6aa767b53fba9ec889d4d5aa08349d65c8:2x2/2x2cofactores.html
                    </a>
            </div>

        </div>


        <footer class="Main-Footer">
            <div>
                <h1>Copyright© 2021</h1>
            </div>
        </footer>
	</div>
</body>
</html>
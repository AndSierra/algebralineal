<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
<<<<<<< HEAD:2x2/2x2resta.php
    <title>Resta de matrices 2x2 </title>
=======
    <title>Transpuesta 2x2</title>
>>>>>>> 511f1a6aa767b53fba9ec889d4d5aa08349d65c8:2x2/2x2transpuesta.html
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
<<<<<<< HEAD:2x2/2x2resta.php
            <h1 class="animate__animated animate__fadeInUp">Resta de matrices 2x2</h1>
=======
            <h1 class="animate__animated animate__fadeInUp">Transpuesta</h1>
>>>>>>> 511f1a6aa767b53fba9ec889d4d5aa08349d65c8:2x2/2x2transpuesta.html
        </div>
        <div class="basic2x2-menu">
            <div class="basic2x2">
                <form action="2x2resta.php" method="POST">
                    <table class="tg">
                        <tbody>
                            <tr>
<<<<<<< HEAD:2x2/2x2resta.php
                            <th class="tg-0pky"><input type="number" name="na1" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="na2" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name="na3" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="na4" max="10000"></td>
                          </tr>
                        </tbody>
                    </table>
            </div>
            <hi class="equal">+</hi>
            <div class="basic2x2">
                    <table class="tg">
                        <tbody>
                            <tr>
                            <th class="tg-0pky"><input type="number" name="nb1" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="nb2" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name="nb3" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="nb4" max="10000"></td>
=======
                            <th class="tg-0pky"><input type="number" name="name" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="name" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name=" name" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="name" max="10000"></td>
>>>>>>> 511f1a6aa767b53fba9ec889d4d5aa08349d65c8:2x2/2x2transpuesta.html
                          </tr>
                        </tbody>
                    </table>
                    <input type="submit" value="Calcular">
                </form>
                <?php 
                
                $na1=$_POST["na1"];
                $na2=$_POST["na2"];
                $na3=$_POST["na3"];
                $na4=$_POST["na4"];
                $nb1=$_POST["nb1"];
                $nb2=$_POST["nb2"];
                $nb3=$_POST["nb3"];
                $nb4=$_POST["nb4"];

                $m1=$na1-$nb1;
                $m2=$na2-$nb2;
                $m3=$na3-$nb3;
                $m4=$na4-$nb4; 
                ?>
            </div>
            <!--<img class="equal" src="img/igual.PNG" alt="igual">-->
            <hi class="equal">=</hi>
            <div class="result-basic2x2">
                <form action="#" method="post">
                    <table class="tg">
                        <tbody>
                            <tr>
<<<<<<< HEAD:2x2/2x2resta.php
                            <th class="tg-0pky"><input type="number" value="<?php echo $m1 ?>" max="10000"></th>
                            <th class="tg-0pky"><input type="number" value="<?php echo $m2 ?>" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" value="<?php echo $m3 ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $m4 ?>" max="10000"></td>
=======
                            <th class="tg-0pky"><input type="number" name="name" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="name" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name=" name" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="name" max="10000"></td>
>>>>>>> 511f1a6aa767b53fba9ec889d4d5aa08349d65c8:2x2/2x2transpuesta.html
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
<<<<<<< HEAD:2x2/2x2resta.php
                <a href="../2x2-main.html">
                    <img src="../img/1x/undo_white_24dp.svg" class="Button-home">
=======
                <a href="..\2x2-main.html">
                    <img src="..\img\1x\undo_white_24dp.svg" class="Button-home">
>>>>>>> 511f1a6aa767b53fba9ec889d4d5aa08349d65c8:2x2/2x2transpuesta.html
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
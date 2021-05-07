<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Resta de matrices 3x3 </title>
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
            <h1 class="animate__animated animate__fadeInUp">Resta de matrices 3x3</h1>
        </div>
        <div class="suma3x3-menu">
            <div class="suma3x3">
                <form action="3x3suma.php" method="POST">
                    <table class="tg">
                        <tbody>
                            <tr>
                            <th class="tg-0pky"><input type="number" name="na1" max="10000" maxlength="number"></th>
                            <th class="tg-0pky"><input type="number" name="na2" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="na3" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name="na4" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="na5" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="na6" max="10000"></td>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name="na7" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="na8" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="na9" max="10000"></td>
                          </tr>
                        </tbody>
                    </table>
            </div>
            <hi class="equal">+</hi>
            <div class="suma3x3">
                    <table class="tg">
                        <tbody>
                            <tr>
                            <th class="tg-0pky"><input type="number" name="nb1" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="nb2" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="nb3" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name="nb4" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="nb5" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="nb6" max="10000"></td>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name="nb7" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="nb8" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="nb9" max="10000"></td>
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
                $na5=$_POST["na5"];
                $na6=$_POST["na6"];
                $na7=$_POST["na7"];
                $na8=$_POST["na8"];
                $na9=$_POST["na9"];

                $nb1=$_POST["nb1"];
                $nb2=$_POST["nb2"];
                $nb3=$_POST["nb3"];
                $nb4=$_POST["nb4"];
                $nb5=$_POST["nb5"];
                $nb6=$_POST["nb6"];
                $nb7=$_POST["nb7"];
                $nb8=$_POST["nb8"];
                $nb9=$_POST["nb9"];

                $r=$na1-$nb1;
                $r2=$na2-$nb2;
                $r3=$na3-$nb3;
                $r4=$na4-$nb4;
                $r5=$na5-$nb5;
                $r6=$na6-$nb6;
                $r7=$na7-$nb7;
                $r8=$na8-$nb8;
                $r9=$na9-$nb9;
                
                ?>
            </div>
            <!--<img class="equal" src="img/igual.PNG" alt="igual">-->
            <hi class="equal">=</hi>
            <div class="result-suma3x3">
                    <table class="tg">
                        <tbody>
                            <tr>
                            <th class="tg-0pky"><input type="number" value="<?php echo $r ?>" max="10000"></th>
                            <th class="tg-0pky"><input type="number" value="<?php echo $r2 ?>" max="10000"></th>
                            <th class="tg-0pky"><input type="number" value="<?php echo $r3 ?>" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" value="<?php echo $r4 ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $r5 ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $r6 ?>" max="10000"></td>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" value="<?php echo $r7 ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $r8 ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $r9 ?>" max="10000"></td>
                          </tr>
                        </tbody>
                    </table>
            </div>

        </div> 
        <div class="submit-3x3">
            <button type="submit" form="form1" value="Submit">Calcular</button>
        </div>

        <div class="Sub-menu">
            <div>
                <a href="../index.html">
                    <img src="../img/1x/home_white_24dp.svg" class="Button-home">
                    </a>
            </div>
            <div class="back-button">  
                <a href="../3x3-main.html">
                    <img src="../img/1x/undo_white_24dp.svg" class="Button-home">
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
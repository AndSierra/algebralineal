<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cofactores 3x3</title>
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
                <form action="#" method="get">
                    <table class="tg">
                        <tbody>
                            <tr>
                            <th class="tg-0pky"><input type="number" name="na1" max="10000"></th>
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
                    <input type="submit" value="Calcular">
                    <?php
                    
                    $a1=$_POST["na1"];
                    $b1=$_POST["na2"];
                    $c1=$_POST["na3"];
                    $a2=$_POST["na4"];
                    $b2=$_POST["na5"];
                    $c2=$_POST["na6"];
                    $a3=$_POST["na7"];
                    $b3=$_POST["na8"];
                    $c3=$_POST["na9"];
                    
                    $ca1 = pow((-1),2)*(($b2*$c3)-($c2*$b3));
                    $cb1 = pow((-1),3)*(($a2*$c3)-($c2*$a3));
                    $cc1 = pow((-1),4)*(($a2*$b3)-($b2*$a3));
                    $ca2 = pow((-1),3)*(($b1*$c3)-($c1*$b3));
                    $cb2 = pow((-1),4)*(($a1*$c3)-($c1*$a3));
                    $cc2 = pow((-1),5)*(($a1*$b3)-($b1*$a3));
                    $ca3 = pow((-1),4)*(($b1*$c2)-($c1*$b2));
                    $cb3 = pow((-1),5)*(($a1*$c2)-($c1*$a2));
                    $cc3 = pow((-1),6)*(($a1*$b2)-($b1*$a2));
                    ?>
                </form>
            </div>
            <!--<img class="equal" src="img/igual.PNG" alt="igual">-->
            <hi class="equal">=</hi>
            <div class="result-determinante3x3">
                <form action="#" method="post">
                <table class="tg">
                        <tbody>
                            <tr>
                            <th class="tg-0pky"><input type="number" value="<?php echo $ca1 ?>" max="10000"></th>
                            <th class="tg-0pky"><input type="number" value="<?php echo $cb1 ?>" max="10000"></th>
                            <th class="tg-0pky"><input type="number" value="<?php echo $cc1 ?>" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" value="<?php echo $ca2 ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $cb2 ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $cc2 ?>" max="10000"></td>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" value="<?php echo $ca3 ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $cb3 ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $cc3 ?>" max="10000"></td>
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
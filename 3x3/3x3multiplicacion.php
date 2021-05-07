<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Multiplicacion de matrices 3x3 </title>
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
            <h1 class="animate__animated animate__fadeInUp">Multiplicacion de matrices 3x3</h1>
        </div>
        <div class="suma3x3-menu">
            <div class="suma3x3">
                <form action="3X3multiplicacion.php" method="POST">
                    <table class="tg">
                        <tbody>
                            <tr>
                            <th class="tg-0pky"><input type="number" name="n1" max="10000" maxlength="number"></th>
                            <th class="tg-0pky"><input type="number" name="n2" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="n3" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name="n4" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="n5" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="n6" max="10000"></td>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name="n7" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="n8" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="n9" max="10000"></td>
                          </tr>
                        </tbody>
                    </table>
            </div>
            <hi class="equal">*</hi>
            <div class="suma3x3">
                    <table class="tg">
                        <tbody>
                            <tr>
                            <th class="tg-0pky"><input type="number" name="n10" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="n11" max="10000"></th>
                            <th class="tg-0pky"><input type="number" name="n12" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name="n13" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="n14" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="n15" max="10000"></td>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" name="n16" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="n17" max="10000"></td>
                            <td class="tg-0lax"><input type="number" name="n18" max="10000"></td>
                          </tr>
                        </tbody>
                    </table>
                    <input type="submit" value="Calcular">
                </form>
                <?php

                    $n1=$_POST["n1"];
                    $n2=$_POST["n2"];
                    $n3=$_POST["n3"];
                    $n4=$_POST["n4"];
                    $n5=$_POST["n5"];
                    $n6=$_POST["n6"];
                    $n7=$_POST["n7"];
                    $n8=$_POST["n8"];
                    $n9=$_POST["n9"];
                    $n10=$_POST["n10"];
                    $n11=$_POST["n11"];
                    $n12=$_POST["n12"];
                    $n13=$_POST["n13"];
                    $n14=$_POST["n14"];
                    $n15=$_POST["n15"];
                    $n16=$_POST["n16"];
                    $n17=$_POST["n17"];
                    $n18=$_POST["n18"];

                    $m1=$n1*$n10+$n2*$n13+$n3*$n16;
                    $m2=$n1*$n11+$n2*$n14+$n3*$n17;
                    $m3=$n1*$n12+$n2*$n15+$n3+$n18;

                    $m4=$n4*$n10+$n5*$n13+$n6*$n16;
                    $m5=$n4*$n11+$n5*$n14+$n6*$n17;
                    $m6=$n4*$n12+$n5*$n15+$n6+$n18;

                    $m7=$n7*$n10+$n8*$n13+$n9*$n16;
                    $m8=$n7*$n11+$n8*$n14+$n9*$n17;
                    $m9=$n7*$n12+$n8*$n15+$n9+$n18;

                ?>
            </div>
            <!--<img class="equal" src="img/igual.PNG" alt="igual">-->
            <hi class="equal">=</hi>
            <div class="result-suma3x3">
                <form action="#" method="post">
                    <table class="tg">
                        <tbody>
                            <tr>
                            <th class="tg-0pky"><input type="number" value="<?php echo $m1; ?>" max="10000"></th>
                            <th class="tg-0pky"><input type="number" value="<?php echo $m2; ?>" max="10000"></th>
                            <th class="tg-0pky"><input type="number" value="<?php echo $m3; ?>" max="10000"></th>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" value="<?php echo $m4; ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $m5; ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $m6; ?>" max="10000"></td>
                          </tr>
                          <tr>
                            <td class="tg-0lax"><input type="number" value="<?php echo $m7; ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $m8; ?>" max="10000"></td>
                            <td class="tg-0lax"><input type="number" value="<?php echo $m9; ?>" max="10000"></td>
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
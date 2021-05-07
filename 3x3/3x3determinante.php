<?php error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Determinante 3x3</title>
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
            <h1 class="animate__animated animate__fadeInUp">Determinantes</h1>
        </div>
        <div class="determinante-menu">
            <div class="matriz3x3">
                <form action="3x3determinante.php" method="POST">
                    <table class="tg">
                        <tbody>
                            <tr>
                            <th class="tg-0pky"><input type="number" name="n1" max="10000"></th>
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
                    <input type="submit" value="Calcular">
                </form>

                <?php
                $a1=$_POST["n1"];
                $b1=$_POST["n2"];
                $c1=$_POST["n3"];
                $a2=$_POST["n4"];
                $b2=$_POST["n5"];
                $c2=$_POST["n6"];
                $a3=$_POST["n7"];
                $b3=$_POST["n8"];
                $c3=$_POST["n9"];
                $det1 = ($a1*(($b2*$c3)-($c2*$b3)))-($b1*(($a2*$c3)-($c2*$a3)))+($c1*(($a2*$b3)-($b2*$a3)));
                ?>

            </div>
            <!--<img class="equal" src="img/igual.PNG" alt="igual">-->
            <hi class="equal">=</hi>
            <div class="result-determinante3x3">
                <form action="#" method="post">
                    <table class="tg">
                        <thead>
                          <tr>
                            <th class="tg-0lax"><input type="number" value="<?php echo $det1; ?>" max="10000"></th>
                          </tr>
                        </thead>
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
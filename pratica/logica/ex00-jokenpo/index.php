<?php
$user = 0;
$comp = 0;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOKENPÔ</title>
    <link rel="stylesheet" href="../../style.css">
    <style>
        .user-mark {
            background-color: green;
            color: white;
            padding: 10px 15px;
        }
        .computer-mark {
            background-color: red;
            color: white;
            padding: 10px 15px;
        }
        .winner {
            text-align: center;
            margin: 30px 0px 0px 0px;
        }
    </style>
</head>

<body>
    <header>
        <h1>Let's play JOKENPÔ</h1>
    </header>
    <section>
        <ul>
            <li>Nº 1 = Pedra</li>
            <li>Nº 2 = Papel</li>
            <li>Nº 3 = Tesoura</li>
        </ul>
        <form action="#" method="POST">
            <label for="num">Informe um número conforme na tabela:</label>
            <input type="number" name="num" id="num" min="1" max="3">
            <button type="submit">JOGAR</button>
        </form>
        <?php
            if (isset($_POST['num'])) {
                $num = $_POST['num'];
                $com = random_int(1, 3);
                switch ($num) {
                    case 1:
                        ?>
                            <span class="user-mark">Você: Pedra</span>
                        <?php
                        break;
                    case 2:
                        ?>
                            <span class="user-mark">Você: Papel</span>
                        <?php
                        break;
                    case 3:
                        ?>
                            <span class="user-mark">Você: Tesoura</span>
                        <?php
                }
                if ($com == 1) {
                    ?>
                        <span class="computer-mark">Computador: Pedra</span>
                    <?php
                }
                if ($com == 2) {
                    ?>
                        <span class="computer-mark">Computador: Papel</span>
                    <?php
                }
                if ($com == 3) {
                    ?>
                        <span class="computer-mark">Computador: Tesoura</span>
                    <?php
                }
                if (($num == 1) && ($com == 1)) {
                    echo "<p class='winner'>Pedra x Pedra: Both Wins \u{1F619}!</p>";
                    $comp++;
                    $user++;
                } else {
                    if (($num == 1) && ($com == 2)) {
                        echo "<p class='winner'>Pedra x Papel: Computer Wins \u{1F61F}!</p>";
                        $comp++;
                    } else {
                        if (($num == 1) && ($com == 3)) {
                            echo "<p class='winner'>Pedra x Tesoura: You Win \u{1F60F}!</p>";
                            $user++;
                        }
                    }
                } 
                if (($num == 2) && ($com == 1)) {
                    echo "<p class='winner'>Papel x Pedra: You Win \u{1F60F}!</p>";
                    $user++;
                } else {
                    if (($num == 2) && ($com == 2)) {
                        echo "<p class='winner'>Papel x Papel: Both Wins \u{1F619}!</p>";
                        $user++;
                        $comp++;
                    } else {
                        if (($num == 2) && ($com == 3)) {
                            echo "<p class='winner'>Papel x Tesoura: Computer Wins \u{1F61F}!</p>";
                            $comp++;
                        }
                    }
                }
                if (($num == 3) && ($com == 1)) {
                    echo "<p class='winner'>Tesoura x Pedra: Computer Wins \u{1F61F}!</p>";
                    $comp++;
                } else {
                    if (($num == 3) && ($com == 2)) {
                        echo "<p class='winner'>Tesoura x Papel: You Win \u{1F60F}";
                        $user++;
                    } else {
                        if (($num == 3) && ($com == 3)) {
                            echo "<p class='winner'>Tesoura x Tesoura: Both Wins \u{1F619}!";
                            $user++;
                            $comp++;
                        }
                    }
                }
                echo "<p class='winner'>Your Points: $user<br>";
                echo "Computer's Points: $comp</p>";
            }
        ?>
    </section>
</body>

</html>
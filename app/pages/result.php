<?php

if (!isSet($_POST['height']) || !isSet($_POST['weight'])) Header('Location: http://localhost:3000?page=home');

$userHeight = (float) $_POST['height'];
$userWeight = (float) $_POST['weight'];

$userImc = calculateIMC($userHeight, $userWeight);

$message = [
    'underWeight'           => "Seu IMC é $userImc. Você está <strong class=\"red\">abaixo do peso</strong>!",
    'normalImc'             => "Seu IMC é $userImc. Você está com <strong class=\"green\" >o peso ideal</strong>!",
    'overHeight'            => "Seu IMC é $userImc. Você está <strong class=\"orange\">acima do peso</strong>!",
    'obesityFirstLevel'     => "Seu IMC é $userImc. Você está com <strong class=\"red-level-one\" >obesidade grau &#8544</strong>!",
    'obesitySecondLevel'    => "Seu IMC é $userImc. Você está com <strong class=\"red-level-two\" >obesidade grau &#8544&#8544</strong>!",
    'obesityThirdLevel'     => "Seu IMC é $userImc. Você está com <strong class=\"red-level-three\" >obesidade grau &#8544&#8544&#8544</strong>!"
];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style/result.css">
    <title>Resultado | PHP</title>

</head>
<body>
    <main>
        <div class="result-container">
            <h2>
                <?php

                if ($userImc <= 18.4)
                {
                    print $message['underWeight'];
                }

                else if ($userImc >= 18.5 && $userImc <=24.9)
                {
                    print $message['normalImc'];
                }

                else if ($userImc >= 25 && $userImc <= 29.9)
                {
                    print $message['overHeight'];
                }

                else if ($userImc >= 30 && $userImc <= 34.9)
                {
                    print $message['obesityFirstLevel'];
                }

                else if ($userImc >= 35 && $userImc <= 40)
                {
                    print $message['obesitySecondLevel'];
                }

                else if ($userImc > 40)
                {
                    print $message['obesityThirdLevel'];
                }

                ?>
            </h2>

            <div class="back-btn-area">
                <a class="home-btn" href="http://localhost:3000">Voltar</a>
            </div>
        </div>
    </main>
</body>
</html>
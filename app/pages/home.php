<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>Calcular IMC</title>
    
</head>
<body>
    <main>

        <div class="container">
            <div class="form-title">
                    <h1>Calculadora de <strong>IMC</strong></h1>
                </div>

            <div class="form-container">

                <form action="http://localhost:3000/?page=result" method="POST">
                    <div class="height-input-area">
                        <label for="height-input">Digite a sua <strong>altura</strong>: </label>
                        <input id="height-input" type="number" step="0.01" name="height">
                    </div>

                    <div class="weight-input-area">
                        <label for="weight-input">Digite o seu <strong>peso</strong>: </label>
                        <input  id="weight-input" type="number" step="0.01" name="weight">
                    </div>

                    <div class="submit-btn-area">
                        <input type="submit" value="Enviar" class="submit-btn">
                    </div>
                </form>

            </div>
        </div>

    </main>
</body>
</html>
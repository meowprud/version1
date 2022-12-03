
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./info-cadastro-login/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="logo-lateral">
        <img src="../img/logos/logo_branca.png" alt="" srcset="">
    </div>
    <div class="container">
        <div class="login-c">
            <h2 class="title">Login</h2>
            <div class="inputs">
                <form action="confirmalogin.php" method="POST" autocomplete="yes">
                    <div class="input-box">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" id="usuario" placeholder="Informe seu usuário">
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
                    </div>
                
                </div>
                
            <div class="login-btn">
                <input type="submit" id="submit" name="submit" value="Enviar">
            </div>

        </form>
        </div>
        
    </div>
</body>
</html>
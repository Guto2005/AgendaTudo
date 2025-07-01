<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="assets/css/login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgendaTudo</title>
</head>

<body>

    <main class="login">
        <div class="login-box">
            <div class="title-box">
                <h2 class="title">Seja Bem-vindo</h2>
                <h3 class="title-description">Acesse com seu e-mail e senha</h3>
            </div>
                <form class="login-form" action="/login" method="POST">
                    <label for="email" class="login-label">Email</label>
                    <input type="email" id="email" name="email" class="login-input" required>

                    <label for="password" class="login-label">Senha</label>
                    <input type="password" id="password" name="password" class="login-input" required>
                    
                    <a href="create-account.php" class="link-option">Não tem uma conta? Cadastre-se</a>
                    <a href="forgot-password.php" class="link-option">Esqueceu sua senha?</a>

                    <button type="submit" class="login-button">Entrar</button>
                </form>


        </div>
    </main>

</body>

</html>
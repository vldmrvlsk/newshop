<head>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="wrapper">
    <div class="title-text">
    </div>
    <div class="form-container">
        <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <label for="login" class="slide login">Войдите, пожалуйста</label>
            <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
            <form method="post" action="../index.php">
                <div class="field">
                    <input type="text" placeholder="Ваш логин" name="login" id="id1">
                </div>
                <div class="field">
                    <input type="password" placeholder="Пароль" name="password" id="id2">
                </div>
                <div class="pass-link">
                    <a href="#">Забыли пароль?</a>
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Войти" onclick="alert('Данные отправляются...');return true;">
                </div>
            </form>
        </div>
    </div>
</div>
</body>

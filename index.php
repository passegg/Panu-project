<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="container-logo">
                <img src="#" alt="logo-imge">
        </div>
    </div>
    <div class="content">
        <div class="container-menu">
        
            <div class="menu-box">
                <div class="topic-box">
                    <h1>Login</h1>
                </div>
                <form action="script.php" method="post">
                    <label for="name">name</label>
                    <input type="text" name="name" require>

                    <label for="email">email</label>
                    <input type="email" name="email" require>

                    <label for="password">password</label>
                    <input type="password" name="password" require>
                    
                    <button type="submit">finish</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container-footer">
            <p>©Panu P. Ks 2025</p>
        </div>
    </div>
</body>
</html>
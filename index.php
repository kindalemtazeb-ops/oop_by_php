<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div>
                <h1>kindalem krossing</h1>
                <ul class='menu-main>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">CURRENT SALES</a></li>
                    <li><a href="#">MEMBERS+</a></li>
                </ul>
            </div>
            <ul class='menu-members'>
                <li><a href="#">SIGN UP</a></li>
                <li><a href="#" class="header-login-a>LOGIN</a></li>
        </nav>
    </header>
    <section class="index-intro">
        <div class="index-intro-bg">
            <div class="wraper">
                <div class="index-intro-c1">
                <div class="vido">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                         Natus, accusamus accusantium asperiores quos rerum 
                         placeat est in optio consequuntur
                         consequatur veniam omnis sint voluptatem ab harum qui
                          repellendus voluptatibus minima.</p>
                </div>
                <div class="index-intro-c2">
                  <h1>we make<br>profesional<br>gear</h1>
                  <a href="">FIND OUR GEAR HERE</a>
                </div>
             </div>
            </div>
        </div>
        
    
</section>
<section class="index-login">
    <div class="wraper">
        <div class="index-login-sign-up">
            <h1>SIGN UP</h1>
            <P>do not have an account yet? sign up here!</P>

            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="username" placeholder="enter username">
                <input type="password" name="passward" placeholder="enter passward">
                <input type="password" name="confirmpassword" placeholder="confirmpassword">
                <input type="EMAIL" name="email" placeholder="enter email">
                <button type="submit" value="submit">SIGN UP</button>
            </form>
        </div>
        <div class="index-login-login">
            <h4>LOGIN</h4>
            <P>do not have an account yet? SIGN UP here</P>
            <form action="login.inc.php" method="post">
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="password">
                <button type="submit" name="submit">login</button>
            </form>
        </div>
</section>
</body>
</html>
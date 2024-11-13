<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holopets | Home</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container-fluid">
        
        

        
        <div class="background row"></div>

        
        <div class="container">
            <div class="row content">
                <div class= "logo-section">
                    <h2 class="logo">
                        <img class="badge" src="Logo.png" alt="Logo" width="100px" height="100px">
                        HoloPets
                    </h2>
                </div>
                <div class ="text-sci">
                    <h2>Welcome!<br><span>To Our New Website.</span></h2>
<<<<<<< HEAD
                    <p> Here at HoloPets, we're redefining companionship with cutting-edge holographic technology. Our goal is simple: to give you the experience of having any pet—real or imagined—right at your fingertips. With a sleek, interactive hologram that responds to your touch, HoloPets brings your perfect pet to life without the mess or responsibility. It's the future of pet ownership, designed to fit seamlessly into your modern lifestyle.</p>
=======
                    <p>At HoloPets, we're redefining companionship with cutting-edge holographic technology. Our goal is simple: to give you the experience of having any pet—real or imagined—right at your fingertips. With a sleek, interactive hologram that responds to your touch, HoloPets brings your perfect pet to life without the mess or responsibility. It's the future of pet ownership, designed to fit seamlessly into your modern lifestyle.</p>
>>>>>>> c16431bb21e1b008496b9c58be5a61967eb50793
                    <div class="social-icons">
                        <a href="#"><i class='bx bxl-linkedin'></i></a>
                        <a href="#"><i class='bx bxl-github'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                    </div>
                </div>
            </div>
<!-- Login/Register Box Section -->
<div class="row logreg-box">
                <div class="col-12 col-md-6 form-box login">
                    
                       <form action="lncludes/login.inc.php" method="POST">
                        <h2>Login</h2>
                        <div class="input-box">
                            <span class="icon"><i class="bx bxs-envelope"></i></span>
                            <input name="mailuid" type="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                            <input name="pwd" type="password" required>
                            <label>Password</label>
                        </div>
                        <button type="submit" name="login-submit" class="btn">Login</button>
                        <div class="login-register">
                            <p>Make an account here! >>> <a href="#" class="register-link">Sign Up</a></p>
                        </div>
                    </form>
                
                </div>

                <div class="col-12 col-md-6 form-box register">
                    <form action="lncludes/signup.inc.php" method="POST">
                        <h2>Sign Up</h2>

                        <div class="input-box">
                            <span class="icon"><i class='bx bxs-user'></i></span>
                            <input type="text" name="uid" placeholder="username" required>
                        </div>
                        <div class="input-box">
                        <span class="icon"><i
                        class='bx bxs-envelope'></i></span>
                        <input type="text" name="mail" placeholder="E-mail" required>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i
                        class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="pwd" placeholder="Password" required>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="pwd-repeat" placeholder="Repeat Password" required>
                    </div>
                        <button type="submit" class="btn" name="signup-submit">Sign Up</button>
                        <div class="login-register">
                            <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
    <script src="script.js"></script>
</body>

</body>
</html>
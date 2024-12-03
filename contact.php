<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="images/Logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="tablestyle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script 
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
        ></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class="container">
        <dic class="form">
            <div class="contact-info"></div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="contact.php">
                    <h3 class="title"> Contact us</h3>
                    <div class="input-container ">
                        <input type="text" name="name" class="input">
                        <label for ="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input">
                        <label for ="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input">
                        <label for ="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input"></textarea>
                        <label for ="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" value="send" class="btn" />
                </form>
            </div>
        </dic>
    </div>



    <script src ="app.js"></script>
</body>
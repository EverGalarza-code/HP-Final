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



    <main class="bg-dark">
    <div class="col-sm-12 align-self-center bg-dark"><br>
    <a href="Home.php#Home">Go Back to Home page</a>
      <h1>Contact us</h1>
    </div>
    <form class="contact-form" action="contactform.inc.php" method="POST">
        <div class="row justify-content-center">
        <h3>Your Name</h3>
        <input type="text" name="name" placeholder="Enter Your Name" required>
        </input>
        <h3>Email</h3>
        <input type="email" name="mail" placeholder="Enter Your Email" required>
        <h3>Subject</h3>
        <input type="text" name="subject" placeholder="Enter a Subject" required></input>
        <h3>Message</h3>
        <textarea name="message" placeholder="Enter Your Message"></textarea><br><br>
        <button popovertarget="popover" type="submit" name="submit" class="btn btn-primary">Send Mail!</button>
        <div popover id="popover">
            Message Sent!
        </div>
</form>

    </div>
</main>




</body>
</html>
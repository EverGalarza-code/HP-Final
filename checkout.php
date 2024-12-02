<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="checkout.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="content-container">
            <h1>checkout form</h1>
            <p>paragraph placeholder.</p>
            <button class="cta-btn" id="open">checkout</button>

        </div>
    </main>

    <section class="modal-container" id="modal">
        <section class="modal">
            <button class="close-btn" id="close">x</button>
            <div class="modal-content">
                <h1></h1>
                <form action="" class="modal-form">
                    <div>
                        <label for="name">name</label>
                        <input type="text" id="name" placeholder="Enter Name" class="form-input"/>
                    </div>
                    <div>
                        <label for="email">email</label>
                        <input type="text" id="email" placeholder="Enter Email" class="form-input"/>
                    </div>
                    <div>
                        <label for="password">password</label>
                        <input type="text" id="password" placeholder="Enter password" class="form-input"/>
                    </div>
                    <div>
                        <label for="pwdrepeat">repeat password</label>
                        <input type="text" id="pwdrepeat" placeholder="repeat password" class="form-input"/>
                    </div>
                    <input type="submit" value="Submit" class="submit-btn"/>
                </form>
            </div>
        </section>
    </section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Email</title>
</head>
<body>
    <div class="header">
        <h1>Send a email</h1>
    </div>
    <div>
        <div class="container-title">
            <p>New Message</p>
        </div>    
        <form class="container-mail" action="mail.php" method="post">
            <input type="mail" name="recipient" placeholder="Recipient">
            <hr>
            <input type="text" name="subject" placeholder="Subject">
            <hr>
            <textarea name="message"></textarea>
            <br>
            <button type="submit" name="send">Send</button>
        </form>
    </div>
</body>
</html>
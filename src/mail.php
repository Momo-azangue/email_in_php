<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Mail From Localhost | codingNepal</title>
    <link rel="stylesheet" href="style.css">

    <!-- bootsrap cdn link  -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
                <h2 class="text-center">Send Message</h2>
                <p class="text-center">Send mail ton anyone for localhost.</p>
                
                    <!-- End of PHP Codes -->
                <form action="mail.php" method="POST" autocomplete="off">
                    <div class="form-group">
                        <input type="email" name="email"  class="form-control" placeholder="Recipients">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="message" cols="30" rows="10" class="form-control textarea" placeholder="Compose message..."></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" class="form-control button btn-primary" value="Send">
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
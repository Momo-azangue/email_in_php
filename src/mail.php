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
                <!-- starting PHP codes -->
                    <?php
                    // if user click on the send button
                    if(isset($_POST['send'])){
                        //getting all user entered data 
                        $recipent = $_POST['email'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];
                        $sender = "From: azanguewill@gmail.com";
                        //if user leave empty field among one of them
                        if(empty($recipent) || empty($subject) || empty($message)){
                        ?>
                            <!-- // display an alert message if one them field is empty -->
                            <div class="alert alert-danger text-center ">
                                <?php echo "All input fields are required!"?>
                            </div>
                            <?php
                            
                        }else{
                            //PHP function email send
                            if(mail($recipent, $subject, $message, $sender)){
                                ?>
                                <!-- // display a success message if once mail sent successfully  -->
                            <div class="alert alert-success text-center ">
                                <?php echo "Your mail sent successfully to $recipient "?>
                            </div>
                                <?php
                            }else{
                                ?>
                                <!-- // display an alert message if somehow mail can't be sent   -->
                            <div class="alert alert-danger text-center ">
                                <?php echo "Failed while sending your mail!"?>
                            </div>
                                <?php

                            }
                        }
                    }
                    ?>
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
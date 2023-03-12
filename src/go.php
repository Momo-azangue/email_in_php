<!-- starting PHP codes
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
                            <!-- display an alert message if one them field is empty  -->
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
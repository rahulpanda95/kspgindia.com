<?php
if(isset($_POST['submit'])){
    $to = "rahul@kspgindia.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your Feedback submission - KSPG India";
    $message = "Name: ".$name ."\nEmail-ID: ".$from."\n\nWrote the following; " . "\n\n" . $_POST['message'];
    $message2 = "Dear ".$name."\n\nThank you for writing us at KSPG India.\nHere is a copy of your message;\n\n". $_POST['message']."\n\nThis is an automated mail.\nWe will reach back to you shortly on this...";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "<h4 style='color: #e1395a' align='center'>We have received your message. Thank you " . $name . ", we will contact you shortly.</h4>";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
}
?>
<html lang="en">
<body>
<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="blog-posts-area">
                    <!-- Related Articles Area -->
                    <div class="related-articles-">

                        <div class="row">
                            <!-- Single Post -->
                            <div class="col-12">
                                <div class="single-blog-post style-3 style-5 d-flex align-items-center mb-50">
                                    <!-- Post Thumb -->
                                    <div class="post-thumb">
                                        <a href="https://www.google.com/maps/place/Utkal+Ashram+Rd,+Brahmapur,+Odisha+760001/@19.3094461,84.7938961,17z/data=!3m1!4b1!4m5!3m4!1s0x3a3d5074befaf47f:0xf5861c1b6cdfbff4!8m2!3d19.308983!4d84.7955136" target="_blank"><img src="img/bg-img/MAP.png" alt="KSPG Publication"></a>
                                    </div>
                                    <!-- Post Data -->
                                    <div class="post-data">
                                        <a href="#" class="post-catagory" style="background-color: #e1395a;">KSPG India Headquarters</a>
                                        <a href="https://www.google.com/maps/place/Utkal+Ashram+Rd,+Brahmapur,+Odisha+760001/@19.3094461,84.7938961,17z/data=!3m1!4b1!4m5!3m4!1s0x3a3d5074befaf47f:0xf5861c1b6cdfbff4!8m2!3d19.308983!4d84.7955136" target="_blank" class="post-title">
                                            <p><strong>13404, 26 Utkal Ashram Road<br>Subarao Square<br>Berhampur, Odisha.<br>PIN: 760001</strong></p>
                                        </a>
                                        <div class="post-meta">
                                            <p class="post-author">Mobile: <a href="mailto:drdebashisha@kspgindia.com">9437617602</a></p>
                                            <p class="post-date">Dr.Debashisha Panda, Co-Founder, KSPG India</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->
<h3 align="center" style="color: #3189e1">Write us your valuable Feedback</h3>
<div align="center">
    <form action="" method="post">
        <p style="color: #e1395a"><strong>Name: <input type="text" name="name"></strong></p>
        <p style="color: #e1395a"><strong>Email: </strong><input type="text" name="email"></p>
        <p style="color: #e1395a"><strong><u>Message</u></strong><br><textarea rows="10" name="message" cols="50" style="border: solid; border-color: #e1395a"></textarea></p>
        <input type="submit" name="submit" value="Submit" style="color: #3189e1">
    </form>
    <br>
</div>
</body>

</html>
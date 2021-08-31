<div class="container mt-4">
    <h4 class="text-center">Contact Us</h4>
    <br><br>    
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.8492596546466!2d104.91853601480787!3d11.562661991790904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513ed775f479%3A0xcac6753bebe2e9d2!2sUniversity%20of%20Puthisastra!5e0!3m2!1sen!2skh!4v1629792502055!5m2!1sen!2skh" 
                        width="600" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy"
                    >
                    </iframe>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <form action="#" method="post">
                <?php
                    if (!isset($_SESSION['email'])) {
                ?>
                <div class="form-group mb-4">
                    <input type="text" name="name" class="form-control form-control-sm" placeholder="Name" required>
                </div>
                <div class="form-group mb-4">
                    <input type="email" name="email" class="form-control form-control-sm" placeholder="Email" required>
                </div>
                <?php
                    }
                ?>
                <div class="form-group mb-4">
                    <input type="text" name="subject" class="form-control form-control-sm" placeholder="Subject" required>
                </div>
                <div class="form-group mb-4">
                    <textarea type="text" name="message" class="form-control form-control-sm" placeholder="Message" required></textarea>
                </div>
                <div class="form-group mb-4">
                    <button type="submit" class="btn btn-primary btn-sm" name="send_message">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

if (isset($_POST['send_message'])) {
    // $name = $_POST['name'];
    // $mailFrom = "From: " . $_POST['email'];
    // $subject = 'Contact Online Computer - ' . $_POST['subject'];
    // $message = $_POST['message'];
    // $mailTo = "nsokkun.student@puthisastra.edu.kh";

    // if (isset($_SESSION['email'])) {
    //     $name = $_SESSION['uname'];
    //     $mailFrom = "From: " . $_SESSION['email'];
    // }

    // if (mail($mailTo, $subject, $message, $mailFrom)) {

    // }

}

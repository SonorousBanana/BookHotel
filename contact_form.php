<?php

include "connection.php";
include "includes/header.php";
include 'includes/functions.php';
?>

<body>
    <div class="container mt-5">
        <?php

        if (!empty($_POST["send"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $subject = $_POST["subject"];
            $message = $_POST["message"];
            // Recipient email
            $toMail = "ioanis.pagonis@gmail.com";
            // Build email header
            $header = "From: " . $name . "<" . $email . ">\r\n";
            // Send email
            if (mail($toMail, $subject, $message, $header)) {
                // Store contactor data in database
                $sql = $connection->query("INSERT INTO contacts_list(name, email, phone, subject, message, sent_date)
                                            VALUES ('$name', '$email', '$phone', '$subject', '$message', now())");
                if (!$sql) {
                    die("MySQL query failed.");
                } else {
                    $response = array(
                        "status" => "alert-success",
                        "message" => "We have received your query and stored your information. We will contact you shortly."
                    );
                }
            } else {
                $response = array(
                    "status" => "alert-danger",
                    "message" => "Message coudn't be sent, try again"
                );
            }
        }
        ?>
        <!-- Messge -->
        <?php if (!empty($response)) { ?>
            <div class="alert text-center <?php echo $response['status']; ?>" role="alert">
                <?php echo $response['message']; ?>
            </div>
        <?php } ?>
        <!-- Contact form -->
        <form action="" name="contactForm" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" id="phone">
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input type="text" class="form-control" name="subject" id="subject">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            </div>
            <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
        </form>
    </div>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script>
        $(function() {
            $("form[name='contactForm']").validate({
                // Define validation rules
                rules: {
                    name: "required",
                    email: "required",
                    phone: "required",
                    subject: "required",
                    message: "required",
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                        number: true
                    },
                    subject: {
                        required: true
                    },
                    message: {
                        required: true
                    }
                },
                // Specify validation error messages
                messages: {
                    name: "Please provide a valid name.",
                    email: {
                        required: "Please enter your email",
                        minlength: "Please enter a valid email address"
                    },
                    phone: {
                        required: "Please provide a phone number",
                        minlength: "Phone number must be min 10 characters long",
                        maxlength: "Phone number must not be more than 10 characters long"
                    },
                    subject: "Please enter subject",
                    message: "Please enter your message"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
</body>

</html>
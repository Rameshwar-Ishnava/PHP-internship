<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- the 2 lines below is needed -->
    <link href="fcf-assets/css/fcf.default.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="shortcut icon" type="image/jpg" href="/php/images/logo.PNG"/>
    <title>Contact Form</title>
</head>

<body>

<?php include ('partials/menu.php'); ?>
    <!-- the lines below are needed -->
      <center>
    <div class="fcf-body">
        <div class="fcf-form-wrap">
            <div id="fcf-form">
                <form class="fcf-form-class" method="post" action="contact_output.php">

                    <div class="fcf-field">
                        <label for="Name" class="fcf-label has-text-weight-normal">Your name</label>
                        <div class="fcf-control">
                            <input type="text" name="Name" id="Name" class="fcf-input is-full-width" maxlength="60"
                               >
                        </div>
                    </div>
                    <div class="fcf-field">
                        <label for="Email" class="fcf-label has-text-weight-normal">Your email address</label>
                        <div class="fcf-control">
                            <input type="email" name="Email" id="Email" class="fcf-input is-full-width" maxlength="100">
                        </div>
                    </div>
                    <div class="fcf-field">
                        <label for="Phone" class="fcf-label has-text-weight-normal">Your phone number</label>
                        <div class="fcf-control">
                            <input type="text" name="Phone" id="Phone" class="fcf-input is-full-width" maxlength="30">
                        </div>
                    </div>
                    <div class="fcf-field">
                        <label for="Message" class="fcf-label has-text-weight-normal">Your message</label>
                        <div class="fcf-control">
                            <textarea name="Message" id="Message" class="fcf-textarea" maxlength="3000" rows="5"
                            ></textarea>
                        </div>
                    </div>
                   
                    <div class="fcf-field">
                        <div class="fcf-buttons">
                            <button id="fcf-button" type="submit" class="fcf-button is-link is-medium is-fullwidth">Send
                                Message</button>
                        </div>
                    </div>
                    <!-- You MUST retain the attribution below -->
                    <div class="fcf-attribution">Contact Form by <a href="https://www.freecontactform.com/"
                            class="fcf-attribution-link">Rameshwar</a></div>
                </form>
            </div>
        </div>
    </div>
</center>
    
<?php include ('partials/footer.php') ?>

</body>
</html>
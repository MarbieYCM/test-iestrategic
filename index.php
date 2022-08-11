<html class="no-js" lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="html-reset.css" type="text/css" />
        <link rel="stylesheet" href="style.css" type="text/css" />

        <title>Test iEstrategic</title>
        <link rel="icon" type="image/x-icon" href="images/logo-icon.png">

        <script type = "text/javascript">
       
            function validateForm() {
            
                if(document.contactForm.Name.value == "" || document.contactForm.Lastname.value == "" || document.contactForm.Phone.value == "" || document.contactForm.Email.value == "" || document.getElementById("Legal").checked === false){
                    document.getElementById("form-error").style.display = "block";

                    if( document.contactForm.Name.value == "" ) {
                        document.contactForm.Name.classList.add('error-input');
                    }else{
                        document.contactForm.Name.classList.remove('error-input');
                    }

                    if( document.contactForm.Lastname.value == "" ) {
                        document.contactForm.Lastname.classList.add('error-input');
                    }else{
                        document.contactForm.Lastname.classList.remove('error-input');
                    }

                    if( document.contactForm.Phone.value == "" ) {
                        document.contactForm.Phone.classList.add('error-input');
                    }else{
                        document.contactForm.Phone.classList.remove('error-input');
                    }

                    if( document.contactForm.Email.value == "" ) {
                        document.contactForm.Email.classList.add('error-input');
                    }else{
                        document.contactForm.Email.classList.remove('error-input');
                    }

                    if( document.getElementById("Legal").checked === false ) {
                        document.getElementById("CheckLegal").classList.add('error-input');
                    }else{
                        document.getElementById("CheckLegal").classList.remove('error-input');
                    }

                    return false;

                }  else {
                    document.getElementById("form-error").style.display = "none";
                    return(true);
                } 
                
            }

            function menuMovil() {
                var menu = document.getElementById("header-mainmenu");
                if (menu.style.display === "block") {
                    menu.style.display = "none";
                } else {
                    menu.style.display = "block";
                }
            }
            
        </script>

    </head>

    <body>
        <?php include 'header.php'; ?>

        <?php include 'content-home.php'; ?>

        <?php include 'footer.php'; ?>
    </body>

</html>
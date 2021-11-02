        <p id="message">
           <?php
                if(isset($_POST['name'], $_POST['email'])){
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars_decode($_POST['email']);

                    echo "Thanks $name for your subscription.<br>";
	                echo "Please confirm it in your inbox of the email $email.";
                }
                else{
                    echo 'You need to provide your name and email address.';
                }
                ?>
        </p>
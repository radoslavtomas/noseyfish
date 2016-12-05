<?php
	if ($_POST["submit"]) {
		if (!$_POST['name']) {
			$error="<br />Ehm, are you sure you've entered your name?";
		}

		if (!$_POST['email']) {
			$error.="<br />Well, let me see... Have you entered your email address?";
		}

		if (!$_POST['comment']) {
			$error.="<br />I might be picky, but are you sure you've written a comment? :)";
		}
		
		if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$error.="<br />O la la, something is telling me you haven't enter a valid email address";
		}

		if ($error) {
			$result='<div class="bad-response text-center"><strong>Oopsy daisy, something went wrong:</strong>'.$error.'</div>';
		} else {
		if (mail("radoslav.tomas@gmail.com", "Comment from website noseyfish.co.uk!", 
											 "Name: ".$_POST['name']. PHP_EOL .
											 "Email: ".$_POST['email']. PHP_EOL .
											 "Comment: ".$_POST['comment'])) {
			$result='<div class="good-response text-center"><strong>Thanks!</strong> Your message has been sent succesfully.</div>';
			} else {
				$result='<div class="bad-response text-center">Oh dear, this is embarrassing!<br/>Something went wrong while sending your message.<br/>Please try again later... :(</div>';
			}
		}
	}
?>
<?php
	if ($_POST['login']) {
		sleep(1); // Give ghe impression that we're processing something.
		$msg = 'Invalid Username/Password. Please try again.';
	} elseif ($_POST['register']) {
		sleep(3); // Give the impression that we're processing something.
		$msg = 'An error occurred. Please try again later.';
	}
?>
<html>
<head>
	<title>Federal Technical Services</title>
	<link rel="stylesheet" type="text/css" href="/css/main.css"/>

	<meta name="description" content="Techincal service platform for federal partners and organizations." />
	<meta name="keywords" content="Federal agency, Survey management, Federal partners, Federal organizations, Suvey distribution, Survey Authentication, Technical Support, Technical Inquiries, Ticket management" />
	<meta name="classification" content="suveys, federal, state, local, tickets, support, IT, information technology" />
	<meta name="distribution" content="Global" />
	<meta name="rating" content="General" />
</head>
<body>
<div class="login-page">
  <div class="form">
    <h3 class="title">Federal Technical Services</h3>
    <?php if ($msg) { ?>
      <h6><?php echo $msg; ?></h6>
    <?php } ?>

    <form class="register-form" method="post">
	<input required type="text" placeholder="username"/>
	<input required type="password" placeholder="password"/>
	<input required type="password" placeholder="confirm password"/>
	<input required type="email" placeholder="email"/>
	<input required type="email" placeholder="confirm email"/>
	<input required type="submit" name="register" class="button" value="register"/>
	<p><a class="toggle" href="#">Login</a></p>

    </form>

    <form class="login-form" method="post">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <p><input type="submit" name="login" class="button" value="login"/></p>
      <p><a class="toggle" href="#">Register</a></p>
    </form>

  </div>
</div>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="/js/main.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs  -->
  <meta charset="utf-8">
  <title>Your page title here :)</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT  -->
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,300italic,300,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

  <!-- CSS  -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Favicon  -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>
  <nav>
    <div class="container">
      <div class="row">
        <div class="six columns">
          <a href="index.html"><img src="./images/michmctaylor-logo.jpg" style="width: 300px; height: auto;"></img></a>
        </div>
        <div class="six columns">
          <ul>
            <li><a href="index.html">Work</a></li>
            <li><a href="about.php">About</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Primary Page Layout -->
  <div class="container about">
    <div class="row pad">
      <div class="eight columns">
        <img src="./images/me-1.jpg" style="width: 100%; height: auto;">
        <h2>About Michelle McTaylor</h2>
        <p>Michelle McTaylor is a graphic designer currently living in Fort Collins, Colorado. She is passionate about everything and anything that is hand drawn and she loves a good looking ampersand. This site is a collection of her most recent work and an overall view of her personal aesthetic. </p>
        <p>As a designer and in her everyday life, Michelle often struggles with keeping a balance between order and chaos. While some parts of her life are very messy and disorganized, other parts seem to have a systemic need to be kept a certain way. This struggle helps her to create balance throughout her work.</p>
        <p>Sometimes, Michelle easily gets wrapped up in the all the small details and frequently has to remind herself of something her mother used to always tell her when she was younger: “Don’t sweat the small stuff.” However, the repetition of this phrase in her life has only made her realize that it is the small stuff sometimes that is just as important, as the <strong>big picture.</strong></p>
      </div>

      <div class="four columns contact">
        <!-- Contact Us -->
        <h3>Contact</h3>
        <p>Whether you are interested in working together, telling me about your favorite beer, or just want to say hi, feel free to contact me below.
          <?php
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $message = isset($_POST['message']) ? $_POST['message'] : '';
            $headers = "From: " . strip_tags($email) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $to = 'michmctaylor@gmail.com';
            $subject = 'Site Contact Form';
            $body = "From: $name\n <br> E-Mail: $email\n <br> <br> $message\n";
            if (isset($_POST['submit'])) {
                $response = mail($to, $subject, $body, $headers);
                if (!response) {
                    echo '<p>Sending Failed! Try again, please?</p>';
                } else {
                    echo '<p>Message Sent Successfully!</p>';
                }
            }
        ?>
        <form action="contact-us" method="POST">
          <input type="text" name="name" placeholder="Your Name" required>
          <input type="text" name="email" placeholder="Your Email" required>
          <textarea name="message" placeholder="Your Message" required></textarea>
          <input id="submit" name="submit" type="submit" value="Send">
        </form>
        <hr>
        <ul class="social">
          <a href="https://dribbble.com/mmctaylor"><li><img src="./images/dribbble-icon.png"></li></a>
          <a href="https://www.instagram.com/michmctaylor/"><li><img src="./images/instagram-icon.png"></li></a>
          <a href="https://www.linkedin.com/in/michelle-taylor-191b70100"><li><img src="./images/linkedin-icon.png"></li></a>
        </ul>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="twelve columns">
          <p>&#169; 2016 Michelle McCallister Taylor<br/>
          <a href="mailto:michmctaylor@gmail.com">Get in touch!</a></p>
        </div>
      </div>
    </div>
  </footer>

<!-- End Document -->
</body>
</html>

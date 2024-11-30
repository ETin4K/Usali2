<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usali - Contact Us</title>
  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
  <meta name="description" content="Get in touch with us at Usali. We're here to help with any questions or concerns you may have.">
  <meta name="keywords" content="Alibaba, contact us, online shopping, e-commerce, Usali">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="top-header">
    <img src="Usali.png" alt="US Based">
    <div class="search-container">
     <input type="search" id="search" placeholder="">
     <button class="search-button">BUY NOW</button>
    </div>
  </header>
  <header>
   <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="products.html">Products</a></li>
      <li><a href="about.html">About Us</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
   </nav>
  </header>
  <main>
   <section>
    <h1>Contact Us</h1>
    <p>If you have any questions or concerns, please don't hesitate to reach out to us. We're here to help.</p>
    <div class="container">
      <h1>Enter contact info to get great deals</h1>
      <form id="contact-form" method="post" action="emailcontact.php">
       <div class="form-group">
         <label for="first-name">First Name:</label>
         <input type="text" id="first-name" name="first-name" value="<?php echo $_REQUEST['first-name'] ?> " disabled> </br>
       </div>
       <div class="form-group">
         <label for="last-name">Last Name:</label>
         <input type="text" id="last-name" name="last-name" value="<?php echo $_REQUEST['last-name'] ?> " disabled> <br>>
       </div>
       <div class="form-group">
         <label for="email">Email Address:</label>
         <input type="email" id="email" name="email" value="<?php echo $_REQUEST['email'] ?> " disabled> <br>>
       </div>
       <div class="form-group">
         <label for="subject">Subject:</label>
         <input type="text" id="subject" name="subject" value="<?php echo $_REQUEST['subject'] ?> " disabled> <br>
       </div>
       <div class="form-group">
         <label for="birth-day">Birth Day:</label>
         <input type="date" id="date" name="date" value="<?php echo $_REQUEST['date'] ?> " disabled> <br>
       </div>
       <div class="form-group">
         <label for="phone">Phone:</label>
         <input type="tel" id="phone" name="phone" value="<?php echo $_REQUEST['phone'] ?> " disabled> <br>
       </div>
       <div class="form-group">
         <label for="comments">Comments</label>
         <textarea id="comments" name="comments" disabled> <?php echo $_REQUEST['comments'] ?> </textarea>
       </div>
       <button type="submit">Submit</button>
      </form>
      <h2>
    <?php
      if (isset($_REQUEST['email'])) { 
  
      
        $admin_email = "shermamn@gmatc.matc.edu"; 

        
        $email = $_REQUEST['email']; 
        $phone = $_REQUEST['phone']; 
        $date = $_REQUEST['date']; 
        $subject = $_REQUEST['subject']; 
        $comments = $_REQUEST['comments'];         
        $name = $_REQUEST['first_name'] . " " .  $_REQUEST['last_name']; 
            
  
        $body  = "From: " . $name . "\n"; 
        $body .= "Email: " . $email . "\n"; 
        $body .= "Phone: " . $phone . "\n"; 
        $body .= "Birth Day " . $date . "\n"; 
        $body .= "Comments " . $comments; 
  
                 
        $headers = "From: " . $name . " <" . $email . "> \r\n"; 
        $headers .= "CC: " . $name . " <" . $email . ">"; 
    
        
        mail($admin_email, $subject, $body, $headers); 
    
        
        echo "Thank you for contacting us!"; 
        }
  
        
        else  { 
        echo "There has been an error!";
        }
     ?>
     </h2>
     </div>
    
    </section>
  </main>
  <footer>
   <p>&copy; 2024 Usali. All rights reserved.</p>
  </footer>
</body>
</html>
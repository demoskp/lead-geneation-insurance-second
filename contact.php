<!DOCTYPE HTML>
<html>
    <head>
        <?php include ('scripts.php') ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Get Cheap Life Isurance Quotes</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/form.css">
        <link rel="stylesheet" href="assets/css/animate.css">

    </head>
    <body>
        <header>
            <div class="bg-faded">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-faded">
                        <a class="navbar-brand" href="http://www.securevillage.co.uk"><img src="assets/img/logo.png" width="auto" height="80"></a>
                        <!-- <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> 
                                <a href="tel:08455281477"><span class="navbar-text phone-sizing"><i class="fa fa-phone-square fa-lg fa-fw navbar-text" aria-hidden="true"></i>  0845 5281477</span></a>
                            </li>    
                        </ul> -->     
                    </nav>
                </div>
            </div>    
        </header>
        
        
        
       <section>
           <?php include ('vmleads_319/content/form.php') ?>
       </section>
        
        <section class="pt-3 pb-3">
               <div class="container contactform">
                    <!-- Change or deletion of the name attributes in the input tag will lead to empty values on record submission-->
                   <form action='phpmailer/send-email.php' name='form' id='needs-validation' method='POST' novalidate>   
                    <h2>Contact Us</h2>
                    <div class="form-group">    
                    <label for="name">Name</label>
                    <input class="form-control form-control-lg" type="text" maxlength="255" name="name" id="name" placeholder="Name" required>
                    <div class="invalid-feedback">Please provide a valid Name.</div>    
                    </div>      
                    <div class="form-group">     
                    <label for="surname">Surname</label>
                    <input class="form-control form-control-lg" type="text" maxlength="255" name="surname" id="surname" fieldType=7 placeholder="Surname" required>
                    <div class="invalid-feedback">Please provide a valid Surname.</div>    
                    </div>     
                    <div class="form-group">     
                    <label for="email">Email</label>
                    <input class="form-control form-control-lg" placeholder="Email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                    <div class="invalid-feedback">Please provide a valid Email address.</div>    
                    </div>     
                    <div class="form-group">   
                    <label for="textbox">Please leave your message</label>
                    <textarea class="form-control" placeholder="Please leave your message here." name="message" maxlength="65535" id="textbox" required></textarea>
                    <div class="invalid-feedback">Please leave your message</div>    
                    </div>       
                    <button class="btn btn-primary" type="submit">Submit</button></form>  
               </div>
        
    
       
      </section>
        
        
       
   
        
        <section>
            <div class="background-image">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>Find the right life insurance for you now.</h1>
                            <a class="btn btn-primary btn-lg" href="#">Compare Now</a>
                        </div>
                    </div>    
                </div>            
            </div>
        </section>
        
        <footer>
            <?php include ('footer.php') ?>
        </footer>
        <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';

  window.addEventListener('load', function() {
    var form = document.getElementById('needs-validation');
    form.addEventListener('submit', function(event) {
      if (form.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  }, false);
})();
</script>
    </body>
</html>


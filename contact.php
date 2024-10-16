<?php session_start();  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to sent mail in php using phpmailer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

<div class="container mt-5">
    <div class="card-header">

        <h4>How to sent mail in php using phpMailer</h4>
        <div class="card-body">

        <form action="sendmail.php" method= "post">

        <div class="mb3">
            <label for="fullname"> Full Name</label>
            <input type="text"name="full_name"id="fullname" required class="form-control"/>
        </div>
        <div class="mb3">
            <label for="email address"> Email Address</label>
            <input type="email "name="email"id="email address" required class="form-control"/>
        </div>
        <div class="mb3">
            <label for="subject"> subject </label>
            <input type="text"name="subject"id="subject" required class="form-control"/>
        </div>
        <div class="mb3">
            <label for="Message">Message</label>
            <textarea name="message" id="message" required class="form-control" row="3"></textarea>
        </div>
        <div class="mb3">
            <button type="submit" name="submitContact" class="btn btn-primary">Send Mail</button>
        </div>
        </form>
        </div>

    </div>

</div>

<script
  src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

  var massageText = "<?= $_SESSION['status'] ?? ''; ?>";
  if(massageText != ''){

    Swal.fire({
         title: "Thank You",
         text: massageText,
         icon: "success"
});
     <?php unset($_SESSION['status']); ?>
  }

</script>

</body>
</html>
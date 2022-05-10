<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Success</title>
</head>
<body>

    <?php
        if(!empty($_POST["send"])){
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $inlineRadioOptions = $_POST["inlineRadioOptions"];
            $Email = $_POST["Email"];
            $message = $_POST["message"];
            $toEmail =  "finadison@gmail.com";

            $mailHeaders = "Name: " . $firstName . 
            "\r\n lastName: " .  $lastName .
            "\r\n inlineRadioOptions: " .  $inlineRadioOptions .
            "\r\n Email: " .  $Email .
            "\r\n message: " .  $message . "\r\n ";

            if(mail($toEmail, $firstName, $lastName , $mailHeaders)){
                $message = "Your information is received successfully.";
            }
        }
    ?>

<form class="row g-3 needs-validation" action="contact.php" method="POST" novalidate>
      <!--ask name-->
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First name</label>
        <input type="text" class="form-control" name="fistName" id="validationCustom01" required>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" class="form-control" name="lastName" id="validationCustom02" required>
      </div>

      <!--ASK GENDER--> <br>
      <div class="ask-gender">
        <label>Gender</label> <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option1">
          <label class="form-check-label" for="inlineRadio1">Man</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
            <label class="form-check-label" for="inlineRadio2">Women </label>
          </div>
        </div>

        <!--put your email-->
        <div class="mb-3"> <br>
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="Email"  id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <!--select your country--> <br>
        <select class="form-select" aria-label="Default select example">
          <option selected>Select your country</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

        <!--choose subject (3max)--> <br>
        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
          <option selected>Choose your subject</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>

        <!--enter your message--> <br>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Enter your message</label>
          <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <!--Btn Submit form-->
        <div class="col-12">
          <button class="btn btn-primary" name="send" type="submit">Send</button>
        </div>

        <!--Success message-->
        <div class="success">
          <strong>   <?php  echo $message;?></strong> 
        </div>
</body>
</html>
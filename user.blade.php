<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

  @if(\Session::has('success'))
  <div class="alert">
      <h4>{{ \Session::get('success') }}</h4>
   </div>
  @endif

<form action="/add" method="post">
  {{ csrf_field()}}
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name :</b></label>
    <input type="text" placeholder="name" name="name" id="name" required>

    <label for="mobile"><b>Mobile_no :</b></label>
    <input type="text" placeholder="mobile" name="mobile" id="mobile"pattern="[1-9]{10}" required>

    <label for="psw"><b>Password :</b></label>
    <input type="Password" placeholder="psw" name="psw" id="psw" required>

    <label for="adhar"><b>Adharcard_no :</b></label>
    <input type="text" placeholder="adhar" name="adhar" id="adhar" pattern="[1-9]{12}" required >

     <label for="address"><b>Address</b></label>
    <input type="text" placeholder="address" name="address" id="address" required>

    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>

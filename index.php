<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/style.css" />
    <title>Login</title>
  </head>
  <body>
    <form class="form-control" action="user_data.php" method="POST">
      <h1>Registration Form</h1>
      <div class="inputs">
        <label for="">First Name</label>
        <input type="text" name="fname" required placeholder="First name" />
      </div>
      <div class="inputs">
        <label for="">Last Name</label>
        <input type="text" name="lname" required placeholder="Last name" />
      </div>
      <div class="inputs">
        <label for="">Phone Number</label>
        <input type="number" required placeholder="+123 456 7890 " />
      </div>
      <div class="inputs">
        <label for="">Email</label>
        <input type="email" name="email" required placeholder="user@user.com" />
      </div>

      <div class="inputs">
        <label for="">Gender</label>
        <select name="gender" id="gender">
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
      <div class="inputs">
        <label for="">Date of birth</label>
        <input type="date" name="dob" required />
      </div>
      <div class="inputs">
        <label for="">Country</label>
        <input type="text" name="country" required placeholder="Country" />
      </div> 
      <div>
        <button id="signup" name="submit" type="submit">Sign up</button>
      </div>
    </form>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/style.css" />
    <title>Login</title>
    <style>
        * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  font-family: "Raleway", sans-serif;
  background-color: rgb(165, 15, 226);
}
form {
  margin: 10rem 40rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  border: 1px solid rgb(165, 15, 226);
  border-radius: 10px;
  padding: 2rem;
  background-color: white;
  width: 50rem;
}
.form-control h1 {
  margin: 2rem;
}
.inputs {
  display: flex;
  flex-direction: column;
  margin-bottom: 1rem;
  width: 40rem;
}

.inputs label {
  font-weight: bold;
  margin-bottom: 0.5rem;
}
.inputs input {
  height: 2rem;
  border-radius: 7px;
  padding: 1rem;
}
.inputs select {
  height: 2rem;
  border-radius: 7px;
  padding: 1rem;
}
.color {
  display: flex;
  flex-direction: column;
  margin-bottom: 1rem;
  width: 40rem;
}

.color label {
  font-weight: bold;
  margin-bottom: 0.5rem;
}
.color input {
  height: 2rem;
  border-radius: 7px;
  padding: 0.2rem;
}
button {
  padding: 1rem 2.5rem;
  border-radius: 7px;
  text-align: right;
  font-size: 1.5rem;
  color: white;
  font-weight: bold;
  background-color: rgb(165, 15, 226);
  border: 1px solid rgb(165, 15, 226);
}
::placeholder {
  font-size: 1rem;
}

    </style>
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
        <input type="number" name="number" required placeholder="+123 456 7890 " />
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

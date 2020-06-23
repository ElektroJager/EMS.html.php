<form action="checkuser.php">
  <h1>Login Page</h1>

  <label for="fname">Fullname:</label>
  <input type="text" id="fullname" name="fullname"><br><br>

  <label for="email">Email:</label>
  <input type="email" name="email" required /> <br /> <br />

  <label for="password">Password:</label>
  <input type="password" id="password" name="password"><br><br>

  <button onclick="checkUser()">Login</button>

</form>

<button onclick="window.location.href = 'Signup.php';">Signup</button>

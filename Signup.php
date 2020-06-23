<button onclick="window.location.href = 'Home.php';">Home</button>

<form action="saveuser.php"  onsubmit="return checkPasswords(event)" method="get">
  <h1>Signup Page</h1>

  <label for="fname">Fullname:</label>
  <input type="text" id="fullname" name="fullname" required ><br><br>

  <label for="email">Email:</label>
  <input type="email" name="email" required /> <br /> <br />

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required ><br><br>

  <label for="password2">Password Again:</label>
  <input type="password" id="password2" name="password2" required><br><br>

  <button onclick="checkPasswords()">Signup</button>

</form>

<script>
  function checkPasswords() {
    var pass1 = document.getElementById("password")
    var pass2 = document.getElementById("password2")

    if (pass1.value != pass2.value){
      pass1.style.color = "red"
      pass2.style.color = "red"
      alert("Your passwords dont match")
      return false;
    }
  }

</script>

<button onclick="window.location.href = 'Login.php';">Login</button>

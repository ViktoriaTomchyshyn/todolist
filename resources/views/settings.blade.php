<!doctype html>
<head>
    <meta charset="utf-8">
    <title>background-color</title>
    <style>
        body{
            background-color: whitesmoke;
        }
        h1 {
            background-color: darkgray;
        }
        p {
            color: black;
        }

    </style>
</head>

<title>Register</title>

<body>
<a href = /dashboard>
    <button class="btn" type="submit"><label style="font-size:16px">Homepage</label></button>
</a>
<h1 style="text-align: center">Edit</h1>

<form action="" style="text-align: center">
    <label for="fname">First name:</label><br><br>
    <input type="text" id="fname" name="fname" value="Viktoriia"><br><br>
    <hr style="color: white">
    <label for="lname">Last name:</label><br><br>
    <input type="text" id="lname" name="lname" value="Tomchyshyn"><br><br>
    <hr style="color: white">
    <label for="email">Email:</label><br><br>
    <input type="email" id="email" name="email" value="viktoriia.tomchyshyn@gmail.com"><br><br>
    <hr style="color: white">
    <label for="password">Password:</label><br><br>
    <input type="password" value="FakePSW" id="password"><br>
    <input type="checkbox" onclick="myFunction()">
    <label for="password" style="font-size:12px">Show Password</label>
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <br><br>
    <hr style="color: white">
    <label for="subscription">Subscription:</label><br><br>
      <input type="radio" id="basic" name="subscription" value="Basic" checked>
      <label for="basic" style="font-style: italic">Basic  </label>
      <input type="radio" id="premium" name="subscription" value="Premium" style="alignment: left">
      <label for="premium" style="font-style: italic">Premium</label><br><br>
    <hr style="color: white">

    <input type="submit" value="Save" style="font-size:18px">
</form>

<a href = />
<button class="btn" type="submit" ><label style="font-size:16px">Log out</label></button>
</a>

</form>

</body>

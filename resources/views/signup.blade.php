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
    @auth
        <a href = /dashboard>
            <button class="btn" type="submit"><label style="font-size:16px">Homepage</label></button>
        </a>
    @endauth
</head>

<title>Register</title>

<body>
<h1 style="text-align: center">Sign up</h1>

<form action="/dashboard" style="text-align: center">
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
    <input type="password" id="password" name="password" value=""><br><br>
    <hr style="color: white">
    <label for="confirmPassword">Confirm password:</label><br><br>
    <input type="password" id="confirmPassword" name="confirmPassword" value=""><br><br>
    <hr style="color: white">
    <label for="subscription">Subscription:</label><br><br>
          <input type="radio" id="basic" name="subscription" value="Basic" checked>
          <label for="basic" style="font-style: italic">Basic  </label>
          <input type="radio" id="premium" name="subscription" value="Premium" style="alignment: left">
          <label for="premium" style="font-style: italic">Premium</label><br><br>
    <hr style="color: white">

    <input type="submit" value="Submit" style="font-size:16px">
</form>

</body>

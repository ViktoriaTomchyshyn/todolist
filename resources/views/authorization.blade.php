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
            <button class="btn" type="submit">Homepage</button>
        </a>
    @endauth
</head>
<title>Sign in</title>

<body>
    <h1 style="text-align: center">Sign in</h1>
    <p style="text-align: center" style="font-style: oblique">or <a href = /signup>register</a></p>


    <form action="/dashboard" style="text-align: center">
        <hr style="color: white">
        <label for="email">Email:</label><br><br>
        <input type="email" id="email" name="email" value="viktoriia.tomchyshyn@gmail.com"><br><br>
        <hr style="color: white">
        <label for="password">Password:</label><br><br>
        <input type="password" id="password" name="password" value=""><br><br>
        <hr style="color: white">

        <input type="submit" value="Submit" style="font-size:16px">
    </form>


</body>

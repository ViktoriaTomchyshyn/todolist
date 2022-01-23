<!doctype html>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<head>
    <meta charset="utf-8">
    <title>background-color</title>
    <style>
        body{
            background-color: whitesmoke;
        }
        h1 {
            background-color: darkgray;
            size: A3;
        }
        p {
            color: black;
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<title>Sign in</title>

<body>
<br>
<div><form method="POST" action="/login" style="margin-inline: 20%" class="border rounded-xl border-gray-100 bg-gray-300 p-6 rounded-xl'">
        @csrf
        <button href = / class="bg-gray-400  py-3 px-5 text-xl rounded-xl w-full" type="reset" value="" disabled>Sign in</button><br>
        <br>
        <label for="email" style="color: #2d3748">Email:</label><br>
        <input type="email" class="border border-gray-200 p-2 rounded-xl w-full"
               name="email"
               id="email"
               value="{{old('email')}}" required><br>
        @error('email')
        <small style="color: crimson" style="font-size: small">{{$message}}</small>
        @enderror
        <br>

        <label for="password" style="color: #2d3748">Password:</label><br>
        <input type="password" class="border border-gray-200 p-2 rounded-xl w-full"
               name="password"
               id="password"
               value="{{old('password')}}" required>
        <br>
        <br>
        <input class="bg-blue-400 py-2 px-20 text-m rounded-xl w-full" type="submit" value="Log in" style="font-size:16px" >  <br> <br>

        <a href = /signup><button type="button" style="text-align: center" class="bg-gray-200  py-2 px-5 text-m rounded-xl w-full align-center">Register </button>  </a>
        <br>

        </form></div>


</body>

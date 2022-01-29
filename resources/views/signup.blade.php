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
        }
        p {
            color: black;
        }

    </style>
</head>

<title>Register</title>

<body>
<br>
<form method="POST" action="/signup" style="margin-inline: 20%" style="text-align: left" class="border rounded-xl border-gray-100 bg-gray-300 p-6 rounded-xl'">
    @csrf
    <button href = / class="bg-gray-400  py-3 px-5 text-xl rounded-xl w-full" type="reset" value="" disabled>Sign up</button><br> <br>

    <label for="firstname" style="color: #2d3748">First name:</label><br>
    <input type="firstname" class="border border-gray-200 p-2 rounded-xl w-full"
           name="firstname"
           id="firstname"
           value="{{old('firstname')}}" required>
    <br>
    @error('firstname')
    <small style="color: crimson" style="font-size: small">{{$message}}</small>
    @enderror
    <br>

    <label for="lastname" style="color: #2d3748">Last name:</label><br>
    <input type="lastname" class="border border-gray-200 p-2 rounded-xl w-full"
           name="lastname"
           id="lastname"
           value="{{old('lastname')}}" required>
    <br>
     @error('lastname')
    <small style="color: crimson" style="font-size: small">{{$message}}</small>
    @enderror
    <br>

    <label for="email" style="color: #2d3748">Email:</label><br>
    <input type="email" class="border border-gray-200 p-2 rounded-xl w-full"
           name="email"
           id="email"
           value="{{old('email')}}" required>
    <br>
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
    @error('password')
    <small style="color: crimson" style="font-size: small">{{$message}}</small>
    @enderror
    <br>

    <label for="passwordConfirmation" style="color: #2d3748">Confirm password:</label><br>
    <input type="password" class="border border-gray-200 p-2 rounded-xl w-full"
           name="passwordConfirmation"
           id="passwordConfirmation"
           value="{{old('passwordConfirmation')}}" required>
    <br>
    @error('passwordConfirmation')
    <small style="color: crimson" style="font-size: small">{{$message}}</small>
    @enderror
    <br>

    <label for="subscription" style="color: #2d3748">Subscription:</label><br>
          <input type="radio" id="basic" name="subscription" value="Basic" checked>
          <label for="basic" style="font-style: italic" style="color: #2d3748">Basic  </label>
          <input type="radio" id="premium" name="subscription" value="Premium" style="alignment: left">
          <label for="premium" style="font-style: italic" style="color: #2d3748">Premium</label><br><br>

    <input class=" bg-blue-400 py-2 px-20 text-m rounded-xl w-full" type="submit" value="Create account" style="font-size:16px">
    <br>
</form>

</body>



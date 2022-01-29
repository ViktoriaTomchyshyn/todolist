<!DOCTYPE html>
<html lang="en">
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
            background-color: RGB(249, 201, 16);
        }
        p {
            color: black;
        }
    </style>
</head>
<body>
<a href = /dashboard class="fixed bg-gray-200 py-2 px-4 top-3 rounded-xl  text-sm">
    <button class="btn" type="submit"><label style="font-size:16px">Homepage</label></button>
    </a>
<div style="margin-left: 130px" ><a href = /settings style="alignment: right"  class="fixed inline-block mx-auto bg-gray-200 py-2 px-4 top-3 margin-left-50 rounded-xl text-sm">
    <button class="btn" type="submit"><label style="font-size:16px">Settings</label></button>
</a></div>


<form method = "POST" action="/logout" class="fixed bg-gray-200 py-2 px-4 top-3 rounded-xl right-3 text-sm">
  @csrf
    <button class="btn" type="submit"><label style="font-size:16px">Log out</label></button>
</form><br>
@if(session()->has('success'))
    <div
        x-data="{show: true}"
        x-init="setTimeout(()=> show = false, 4000)"
        x-show="show"
        class="fixed bg-gray-300 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session('success')}}</p>
    </div>
@endif
<br>




</body>
</html>

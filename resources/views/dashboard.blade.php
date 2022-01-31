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

        p {
            color: black;
        }

        html {
            scroll-behavior: smooth;
        }

        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:0; opacity:1}
        }

        /* The Close Button */
        .close {
            color: gray;
            float: right;
            font-size: 18px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            color: gray;
        }

        .modal-body {padding: 2px 16px;}

    </style>
</head>
<body>
<a href = /dashboard class="fixed bg-blue-400 py-2 px-4 top-3 left-3 rounded-xl  text-sm">
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
        class="fixed bg-blue-300 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-m">
        <p>{{ session('success')}}</p>
    </div>
@endif
<br><br>


    @csrf

       <div style="text-align: center" class="text-gray-600 mg-top-5 text-xl">
            Your lists
        </div>
        <br>

    @foreach($CardsLists as $CardsList)
        <form method="GET" action="/dashboard/{{$CardsList->title}}" style="margin-inline: 5%" style="text-align: left" class="border rounded-xl border-gray-100 bg-gray-300 p-6 rounded-xl'">
            <article>
                <h1>
                        <button type="submit" class=" text-gray-800 bg-gray-200 py-2 px-4 rounded-xl text-m w-full">
                            {{$CardsList->title}}
                        </button>
                </h1>
                <hr style="color: white">
                <div style="margin-inline: 5%" class="text-gray-600 mg-top-5 text-sm">
                    {{$CardsList->description}}
                </div>
                <hr style="color: white">
                <form method="POST" action="/lists/{{$CardsList->id}}">
                    @csrf
                    @method('EDIT')
                    <button type="submit" class="close">Edit</button>
                </form>
                <form method="POST" action="/lists/{{$CardsList->id}}"  class="close">
                    @csrf
                    @method('DELETE')
                    <button class="px-5 text-red-500 text-xs">Delete</button>
                </form>
                <br>
            </article>
        </form>

        @endforeach
<br>
<div style="margin-inline: 5%">
    <button id="myBtn" style="text-align: center" class="rounded-xl bg-blue-200 px-4 py-3 rounded-xl w-full">
        Create new list
    </button>
</div>


<div id="myModal" class="modal"  >
    <div class="modal-content rounded-xl">
        <div class="modal-header">
            <br>
            <span class="close">&times;</span>
            <h2 style="text-align: center"  class="text-xl">Create new list</h2>
        </div>
        <div class="modal-body">
            <form method="POST" action="/lists">
                @csrf
            <br>
            <label for="title" style="color: #4a5568">Title:</label><br>
            <input type="title" class="border border-gray-200 p-2 rounded-xl w-full"
                   name="title"
                   id="title"
                   value="" required><br>
            @error('title')
            <small style="color: crimson" style="font-size: small">{{$message}}</small>
            @enderror
            <br>

            <label for="description" style="color: #4a5568">Description:</label><br>
            <input type="description" class="border border-gray-200 p-2 rounded-xl w-full"
                   name="description"
                   id="description"
                   value="" required>
            <br>
            <br>
            <input style="color: #4a5568" class="bg-blue-300 py-2 px-20 text-m w-full rounded-xl" type="submit" value="Create" style="font-size:16px" >
            <br><br>
    </form>
    </div>
    </div>

</div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>
</html>

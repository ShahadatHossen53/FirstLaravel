<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
    <h1>This is About page</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil, inventore deleniti dolore dolorum 
        adipisci numquam! Rerum, earum ipsa aut odio reprehenderit, vero cumque, harum facere fugiat
        maxime error temporibus quae.</p>

    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Write your name"><br>
        <input type="email" name="email" placeholder="Write your email"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <form action="{{ route('users-update') }}" method="post">
        @csrf


        <label for="id">ID</label>
        <input type="text" id="id" name="id" placeholder="id" value="{{ $user->id }}">

        <br>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="name" value="{{ $user->name }}">

        <br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="email" value="{{ $user->email }}">

        <br>

        <label for="password">Password</label>
        <input type="text" id="password" name="password" placeholder="password" value="{{ $user->password }}">

        <input type="submit" value="Update">
    </form>
</body>
</html>
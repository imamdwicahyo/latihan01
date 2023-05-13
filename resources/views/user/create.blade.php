<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="{{ route('users-store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" id="name" placeholder="name" value="">

        <br>

        <label for="email">Email</label>
        <input type="text" id="email" placeholder="email" value="">

        <label for="password">password</label>
        <input type="text" id="password" placeholder="password" value="">

        <input type="submit" value="simpan">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>

<body>
  <h1>Users</h1>
  <table border="1">
    <thead>
      <tr>
        <td>name</td>
        <td>email</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>

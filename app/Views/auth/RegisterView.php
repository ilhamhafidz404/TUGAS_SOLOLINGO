<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Login</h1>
  <form action="/register" method="POST">
    <div>
      <label for="">Name</label>
      <input type="text" name="name">
    </div>

    <div>
      <label for="">Username</label>
      <input type="text" name="username">
    </div>

    <div>
      <label for="">Password</label>
      <input type="password" name="password">
    </div>

    <div>
      <button type="submit">Submit</button>
      <a href="/login">login</a>
    </div>
  </form>
</body>

</html>
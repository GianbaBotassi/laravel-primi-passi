<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    nav {
      margin: 0 auto;
      background-color: #333;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
      padding: 10px;
      border-radius: 5px;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      display: inline-block;
      margin-right: 10px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    nav ul li a:hover {
      background-color: #555;
    }

    nav ul li.active a {
      background-color: #fff;
      color: #222;
    }
  </style>
</head>

<body>
  <nav>
    <ul>
      <li><a href="\">Home</a></li>
      <li><a href=".\about">About</a></li>
      <li><a href=".\dove-siamo">Dove siamo</a></li>
      <li><a href=".\contatti">Contatti</a></li>
    </ul>
  </nav>

</body>

</html>
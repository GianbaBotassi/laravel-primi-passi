<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contatti</title>

</head>
<body>
  
  @include('navbar')

  <div style="text-align: center">
    <h1>Contatti</h1>
    <div style="text-align:center">
      <span>{{ $phone }}</span>
      <span>{{ $adress }}</span>
      <span>{{ $city }}</span>
    </div>
  </div>
  
  
</body>
</html>
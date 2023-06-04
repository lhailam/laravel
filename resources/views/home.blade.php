<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lập trình Laravel</title>
</head>
<body>
  <header>
    <h1>HEADER - UNICODE</h1>
    <h2>{{!empty(request()->id)?request()->id:'Khong co gi'}}</h2>
  </header>
  <main>
    <h1>Noi dung</h1>
    <h2>{{request()->id}}</h2>

  </main>
  <header>
    <h1>FOOTER - UNICODE</h1>
    <h2>{{$welcome}}</h2>
  </header>

  @for ($index = 0;$index<10;$index++ )
    <p>Phan tu: {{$index}}</p>
    @if ($index == 5)
      @break
    @endif
  @endfor

</body>
</html>
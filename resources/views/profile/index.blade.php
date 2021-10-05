<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@php
$data = 1000;
$nama = "Lala";
$usia = 16;
$alamat = "Bandung";
$bulan = "Oktober";
$status = 2;
@endphp
<h1>Ini adalah halaman profile {{ $data }} {{ $nama }} {{ $usia }} {{ $alamat }} {{ $bulan }}</h1>
<br>
@if($status == 1)
Status kamu lulus
@elseif($status == 2)
Status kamu lulus 100% <br>
@else
Status kamu tidak lulus <br>
@endif
<br>
@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }} <br>
@endfor
<br>
@for ($i = 1; $i <= 10; $i++)
@if($i % 2 == 0)
Bilangan kamu {{ $i }} genap <br>
@else
Bilangan kamu {{ $i }} ganjil <br>
@endif

</body>
</html>
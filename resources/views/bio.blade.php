<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Biodata</legend>
        <table>
            @if ($nama == null)
            silahkan isi biodata anda
            @elseif ($nama != null)
            <tr>
                <th style="text-align: left">Nama</th>
                <td>:</td>
                <td>{{$nama}}</td>
            </tr>
            @endif
            @if ($alamat != null)
            <tr>
                <th style="text-align: left">Alamat</th>
                <td>:</td>
                <td>{{$alamat}}</td>
            </tr>
            @endif
            @if ($jk != null)
            <tr>
                <th style="text-align: left">Jenis Kelamin</th>
                <td>:</td>
                <td>{{$jk}}</td>
            </tr>
            @endif
            @if ($tb != null)
            <tr>
                <th style="text-align: left">Tinggi Badan</th>
                <td>:</td>
                <td>{{$tb}}</td>
            </tr>
            @endif
            @if ($bb != null)
            <tr>
                <th style="text-align: left">Berat Badan</th>
                <td>:</td>
                <td>{{$bb}}</td>
            </tr>
            @endif
        </table>
    </fieldset>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QUIZ</title>
    <body>
        <table cellpadding = "7">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NPM</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                <tr>
            </thead>
    <tbody>
        @foreach($biodata as $b)
        <tr>
            <td>{{$b -> id}}</td>
            <td>{{$b -> NPM}}</td>
            <td>{{$b -> Nama}}</td>
            <td>{{$b -> Gender}}</td>
            <td>{{$b -> Alamat}}</td>
            <td>{{$b -> Kontak}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
    </body>
</html>
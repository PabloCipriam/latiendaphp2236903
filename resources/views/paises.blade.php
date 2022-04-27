<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <h1>Pises de la region</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>
                    Pais
                </th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Población</th>
                <th>Ciudades</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paises as $pais => $infopais)
                <tr>
                    <td class="font-weight-bold text-warning" rowspan='{{count($infopais["ciudades"])}}'>
                        {{$pais}}
                    </td>
                    <td class="font-weight-bold text-danger" rowspan='{{count($infopais["ciudades"])}}'>{{ $infopais["cap"]}}</td>
                    <td rowspan='{{count($infopais["ciudades"])}}'>{{ $infopais["mon"]}}</td>
                    <td rowspan='{{count($infopais["ciudades"])}}'>{{ $infopais["pob"]}} millones hab.</td>
                    @foreach($infopais["ciudades"] as $ciudad)
                        <td>{{$ciudad}}</td>
                        </tr>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
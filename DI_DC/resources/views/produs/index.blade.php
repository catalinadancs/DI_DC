<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Produse si servicii</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>

<body>
    <x-app-layout>

        <div class="container mt-3">
            <a href="{{route('produs.create')}}" class="btn btn-primary">Adaugare produs/serviciu</a>
        </div>
        <div class="container mt-3">
            <h2>Lista produselor/serviciilor</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Tip</th>
                        <th>Denumire</th>
                        <th>Cod</th>
                        <th>TVA</th>
                        <th>U.M.</th>
                        <th>Cantitate</th>
                        <th>Pret unitar</th>
                        <th>Moneda</th>
                        <!-- Adăugați mai multe coloane aici, dacă este necesar -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produs as $produs)
                    <tr>
                        <td>{{ $produs->tip }}</td>
                        <td>{{ $produs->denumire }}</td>
                        <td>{{ $produs->cod }}</td>
                        <td>{{ $produs->tva }}</td>
                        <td>{{ $produs->um }}</td>
                        <td>{{ $produs->cantitate }}</td>
                        <td>{{ $produs->pret_unitar }}</td>
                        <td>{{ $produs->moneda }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-app-layout>
</body>

</html>
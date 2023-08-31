<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adaugare Produs/Serviciu</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>






<body>
    <x-app-layout>
    <style>
@media (prefers-color-scheme: dark) {


    .form-control {
            color: #fff !important; /* Set the text color */
            background-color: #111827 !important;
            border-color: #999 !important;
        }

        .form-control::placeholder {
        color: #fff !important;
        opacity: 0.6!important;
        }

        .container {
            color: #fff !important; /* Set the text color */
            background-color: #1f2937 !important;
            border-color: #777 !important;
        }
        select#tip option[value="Produs"],
    select#tip option[value="Serviciu"],
    select#tip {
        color: #fff !important; /* Set the text color */
        background-color: #111827 !important; /* Set the background color */
    }


}
@media (prefers-color-scheme: light) {

}
</style>






    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="container">
    <div class="container">
        <div class="flex items-center gap-4 mt-4">
            <a href="{{ route('produs.index') }}" class="btn btn-secondary">Back</a>
        </div>
        @csrf
        <div class="row pt-3">
            <div class="col">
                <div class="card-body">
                    @csrf
                    <div>
                        @if($errors->any())
                        <ul>
                            @foreach($errors->all() as $err)
                            <li>{{$err}}</li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                    <form method="post" action="{{route('produs.store')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="tip" class="form-label">Tip</label>
                            <select name="tip" id="tip">
                                <option value="produs">Produs</option>
                                <option value="serviciu">Serviciu</option>
                            </select>
                        </div>
                        <div>
                            <label for="denumire" class="form-label">Denumire</label>
                            <input type="text" class="form-control" id="denumire" name="denumire" placeholder="Denumire" required />
                        </div>
                        <div class="mb-3">
                            <label for="cod" class="form-label">Cod produs</label>
                            <input class="form-control" id="cod" name="cod" placeholder="Cod produs" required></input>
                        </div>
                        <div class="mb-3">
                            <label for="tva" class="form-label">TVA</label>
                            <input class="form-control" id="tva" name="tva" placeholder="TVA" required></input>
                        </div>
                        <div class="mb-3">
                            <label for="um" class="form-label">Unitate de masura</label>
                            <input class="form-control" id="um" name="um" placeholder="Unitate de masura" required></input>
                        </div>
                        <div class="mb-3">
                            <label for="cantitate" class="form-label">Cantitate</label>
                            <input class="form-control" id="cantitate" name="cantitate" placeholder="Cantitate" required></input>
                        </div>
                        <div class="mb-3">
                            <label for="pret_unitar" class="form-label">Pret unitar (fara tva) </label>
                            <input class="form-control" id="pret_unitar" name="pret_unitar" placeholder="Pret unitar" required></input>
                        </div>
                        <div class="mb-3">
                            <label for="moneda" class="form-label">Moneda</label>
                            <input class="form-control" id="moneda" name="moneda" placeholder="Moneda" required></input>
                        </div>

                        <div class="flex items-center gap-4">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>

</html>
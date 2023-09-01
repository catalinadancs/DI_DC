<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adaugare Client</title>
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


}
@media (prefers-color-scheme: light) {

}
</style>






<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
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
                <form method="post" action="{{route('client.store')}}">
                @csrf 
                    <div>
                        <label for="nume" class="form-label">Nume</label>
                        <input type="text" class="form-control" id="nume" name="nume" placeholder="Nume" required />
                    </div>
                    <div class="mb-3">
                        <label for="prenume" class="form-label">Prenume</label>
                        <input type="text" class="form-control" id="prenume" name="prenume" placeholder="Prenume" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="telefon" class="form-label">Telefon</label>
                        <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="serieCI" class="form-label">Seria buletinului</label>
                        <input type="text" class="form-control" id="serieCI" name="serieCI" placeholder="Seria buletinului" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="numarCI" class="form-label">Numarul buletinului</label>
                        <input type="text" class="form-control" id="numarCI" name="numarCI" placeholder="Numarul buletinului" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="cnp" class="form-label">CNP</label>
                        <input type="text" class="form-control" id="cnp" name="cnp" placeholder="CNP" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="adresa" class="form-label">Adresa</label>
                        <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="banca" class="form-label">Banca</label>
                        <input type="text" class="form-control" id="banca" name="banca" placeholder="Banca" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="iban" class="form-label">IBAN</label>
                        <input type="text" class="form-control" id="iban" name="iban" placeholder="IBAN" required></input>
                    </div>
                    <div>
                        <input type="submit" value="Save"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
</body>

</html>
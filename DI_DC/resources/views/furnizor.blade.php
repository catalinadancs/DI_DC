<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Furnizor</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>

<body>


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
                <h3>Datele furnizorului se vor completa in functie de statutul acestuia.</h3>
                <h3>Unde datele nu sunt relevante pentru a fi completate se va adauga de catre utilizator caracterul "-".</h3>
                <p>Utilizare placubila.</p>
                <form method="post" action="{{route('settings.store')}}">
                @csrf
                    <div class="mb-3">
                        <label for="status" class="form-label">Status client</label>
                        <select name="status" id="status">
                            <option value="pfa">PFA</option>
                            <option value="srl">SRL</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nume" class="form-label">Nume</label>
                        <input type="text" class="form-control" id="nume" name="nume" placeholder="Nume" required />
                    </div>
                    <div class="mb-3">
                        <label for="prenume" class="form-label">Prenume</label>
                        <input class="form-control" id="prenume" name="prenume" placeholder="Prenume" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="seria_ci" class="form-label">Seria buletinului</label>
                        <input class="form-control" id="seria_ci" name="seria_ci" placeholder="Seria buletinului" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="nr_ci" class="form-label">Numarul buletinului</label>
                        <input class="form-control" id="nr_ci" name="nr_ci" placeholder="Numarul buletinului" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="cnp" class="form-label">CNP</label>
                        <input class="form-control" id="cnp" name="cnp" placeholder="CNP" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="numef" class="form-label">Nume firma</label>
                        <input class="form-control" id="numef" name="numef" placeholder="Nume firma" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="cif" class="form-label">CIF</label>
                        <input class="form-control" id="cif" name="cif" placeholder="CIF" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="regcom" class="form-label">Registrul Comertului</label>
                        <input class="form-control" id="regcom" name="regcom" placeholder="Registrul Comertului" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="telefon" class="form-label">Telefon</label>
                        <input class="form-control" id="telefon" name="telefon" placeholder="Telefon" required></input>
                    </div>

                    <div class="mb-3">
                        <label for="adresa" class="form-label">Adresa</label>
                        <input class="form-control" id="adresa" name="adresa" placeholder="Adresa" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="judet" class="form-label">Judet</label>
                        <input class="form-control" id="judet" name="judet" placeholder="Judet" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="banca" class="form-label">Banca</label>
                        <input class="form-control" id="banca" name="banca" placeholder="Banca" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="iban" class="form-label">IBAN</label>
                        <input class="form-control" id="iban" name="iban" placeholder="IBAN" required></input>
                    </div>
                    
                    <div>
                        <input type="submit" value="Save"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>
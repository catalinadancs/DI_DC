<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cont furnizor</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>

<body>

    <x-app-layout>

        <div class="py-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="card-title">Informatii furnizor</h1>
                                    </header>
                                    <form id="send-verification" method="post" action="http://127.0.0.1:8000/email/verification-notification">
                                        <input type="hidden" name="_token" value="EZjLzxMXgLsE2Zm7Oh5B8E82KsvomGzZzD67eT0g">
                                    </form>
                                    <form method="POST" action="{{ route('furnizor') }}">
                                        <div class="mb-3">
                                            <label for="nume" class="form-label">Nume</label>
                                            <input class="form-control" id="nume" name="nume" placeholder="Nume" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="prenume" class="form-label">Prenume</label>
                                            <input class="form-control" id="prenume" name="prenume" placeholder="Prenume" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input class="form-control" id="email" name="email" placeholder="Email" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="telefon" class="form-label">Telefon</label>
                                            <input class="form-control" id="telefon" name="telefon" placeholder="telefon" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="serieCI" class="form-label">Seria buletinului</label>
                                            <input class="form-control" id="serieCI" name="serieCI" placeholder="Seria buletinului" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="numarCI" class="form-label">Numarul buletinului</label>
                                            <input class="form-control" id="numarCI" name="numarCI" placeholder="Numarul buletinului" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="cnp" class="form-label">CNP</label>
                                            <input class="form-control" id="cnp" name="cnp" placeholder="CNP" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="adresa" class="form-label">Adresa </label>
                                            <input class="form-control" id="adresa" name="adresa" placeholder="Adresa" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="banca" class="form-label">Banca</label>
                                            <input class="form-control" id="banca" name="banca" placeholder="Banca" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="iban" class="form-label">IBAN</label>
                                            <input class="form-control" id="iban" name="iban" placeholder="IBAN" required></input>
                                        </div>
                                        <div class="flex items-center gap-4">
                                            <button class="btn btn-success" type="submit">Save</button>
                                        </div>
                                    </form>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h1 class="card-title">
                                        Informatii firma
                                    </h1>
                                    </header>
                                    <form method="POST" action="{{ route('furnizor') }}">
                                        <div class="mb-3">
                                            <label for="nume_firma" class="form-label">Nume</label>
                                            <input class="form-control" id="nume_firma" name="nume_firma" placeholder="Nume" required />
                                        </div>
                                        <div class="mb-3">
                                            <label for="email_firma" class="form-label">Email</label>
                                            <input class="form-control" id="email" name="email_firma" placeholder="Email" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="telefon_firma" class="form-label">Telefon</label>
                                            <input class="form-control" id="telefon_firma" name="telefon_firma" placeholder="telefon" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="adresa_firma" class="form-label">Adresa </label>
                                            <input class="form-control" id="adresa_firma" name="adresa_firma" placeholder="Adresa" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="judet" class="form-label">Judet</label>
                                            <input class="form-control" id="judet" name="judet" placeholder="Judet" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="cif" class="form-label">Cod de identificare fiscala (CIF)</label>
                                            <input class="form-control" id="cif" name="cif" placeholder="Cod de identificare fiscala(CIF)" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="cui" class="form-label">Cod unic de inregistrare (CUI)</label>
                                            <input class="form-control" id="cui" name="cui" placeholder="Cod unic de inregistrare (CUI)" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="banca_firma" class="form-label">Banca</label>
                                            <input class="form-control" id="banca_firma" name="banca_firma" placeholder="Banca" required></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="iban_firma" class="form-label">IBAN</label>
                                            <input class="form-control" id="iban_firma" name="iban" placeholder="IBAN" required></input>
                                        </div>
                                        <div class="flex items-center gap-4">
                                            <button class="btn btn-success" type="submit">Save</button>
                                        </div>
                                    </form>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </x-app-layout>

</body>

</html>
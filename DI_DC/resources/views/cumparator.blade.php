<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cumparatori</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>

<body>
    <x-app-layout>

        <div class="container">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Adaugare cumparator
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Adaugare cumparator</h5>
                            <button type="button" class="btn-outline-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row pt-3">
                                    <div class="col">
                                        <div class="card-body">
                                            <form method="post">
                                                <div>
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
                                                    <label for="adresa" class="form-label">Adresa</label>
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
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="pfa" value="PFA" autocomplete="off">
                                                    <label class="form-check-label" for="pfa">PFA</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="srl" value="SRL" autocomplete="off">
                                                    <label class="form-check-label" for="srl">SRL</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sa" value="SA" autocomplete="off">
                                                    <label class="form-check-label" for="sa">SA</label>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-outline-success" type="submit">Trimite</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </x-app-layout>
</body>

</html>
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

        <div class="container">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Adaugare produs/serviciu
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Adaugare produs/serviciu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row pt-3">
                                    <div class="col">
                                        <div class="card-body">
                                            <form method="post">
                                            <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="produs" value="Produs" autocomplete="off">
                                                    <label class="form-check-label" for="produs">Produs</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="serviciu" value="Serviciu" autocomplete="off">
                                                    <label class="form-check-label" for="serviciu">Serviciu</label>
                                                </div>
                                                <div>
                                                    <label for="denumire" class="form-label">Denumire</label>
                                                    <input type="text" class="form-control" id="denumire" name="denumire" placeholder="Denumire" required />
                                                </div>
                                                <div class="mb-3">
                                                    <label for="cod" class="form-label">Cod</label>
                                                    <input class="form-control" id="cod" name="cod" placeholder="Cod" required></input>
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
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-success" type="submit">Trimite</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </x-app-layout>
</body>

</html>
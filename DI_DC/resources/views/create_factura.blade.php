<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creare factura</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Add jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Add Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</head>


<style>



@media (prefers-color-scheme: dark) {
    body {
            background-color: #333;
        }

        h2, label, input {
            color: #fff !important;
        }

        .form-control {
            color: #fff !important; /* Set the text color */
            background-color: #111827 !important;
            border-color: #777 !important;
        }

        .form-control::placeholder {
        color: #fff !important;
        opacity: 0.6!important;
        }

        .btn {
            color: #fff !important;
            background-color: #007bff !important;
            border-color: #007bff !important;
        }

        .btn:hover {
            background-color: #0056b3 !important;
            border-color: #0056b3 !important;
        }
    }
@media (prefers-color-scheme: light) {
   
    }



</style>


<body>
    <x-app-layout>
    <div class="container">
    <div class="row pt-3">
        <div class="col">
            <div class="card-body">
                <form method="post">
                    <h3>Detalii factura</h3>
                            <div class="mb-3">
                                    <label for="nume" class="form-label">Nume sau CIF Client</label>
                                    <input type="text" class="form-control" id="nume" name="nume" placeholder="Nume sau CIF Client" required />
                                </div>
                                <!-- <div class="mb-3">
                                    <label for="pers_contact" class="form-label">Persoana de contact</label>
                                    <input type="text" class="form-control" id="pers_contact" name="pers_contact" placeholder="Persoana de contact" required />
                                </div> -->
                                <div class="mb-3">
                                    <label for="serie" class="form-label">Serie factura</label>
                                    <input type="text" class="form-control" id="serie" name="serie" placeholder="Serie factura" required />
                                </div>
                                <div class="mb-3">
                                    <label for="data_emitere" class="form-label">Data emitere</label>
                                    <input type="date" id="data_emitere" name="data_emitere" required />
                                </div>
                                <div class="mb-3">
                                    <label for="data_scadenta" class="form-label">Data scadenta</label>
                                    <input type="date" id="data_scadenta" name="data_scadenta" required />
                                </div>
                                
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status factura:</label>
                                    <select name="status" id="status">
                                        <option value="emisa">Emisa</option>
                                        <option value="incasata">Incasata</option>
                                        <option value="anulata">Anulata</option>
                                        <option value="depasita">Depasita</option>
                                    </select>
                                </div>

                                <div class="items">

                                <h3>Lista de produse</h3>

                                <div class="mb-3">
                                    <label for="categorie" class="form-label">Categorie</label>
                                    <select name="categorie" id="categorie">
                                        <option value="lactate">lactate</option>
                                        <option value="patiserie">patiserie</option>
                                        <option value="carne">carne</option>
                                        <option value="dulciuri">dulciuri</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="tip" class="form-label">Produs/Serviciu</label>
                                    <select name="tip" id="tip">
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="um" class="form-label">Unitatea de masura</label>
                                    <input type="text" id="um" name="um" required />
                                </div>

                                <div>
                                <label for="cantitate">Cantitate</label>
                                <input type="number" name="cantitate" id="cantitate" min="1" value="1" required>
                                </div>

                                <div class="mb-3">
        <button type="button" id="addRowBtn" class="btn btn-primary">Add to Table</button>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Categorie</th>
                <th>Produs/Serviciu</th>
                <th>Unitatea de masura</th>
                <th>Cantitate</th>
            </tr>
        </thead>
        <tbody id="tableBody">
            <!-- Table rows will be added dynamically here -->
        </tbody>
    </table>

    
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addRowBtn = document.getElementById('addRowBtn');
        const tableBody = document.getElementById('tableBody');

        addRowBtn.addEventListener('click', function () {
            const categorie = document.getElementById('categorie').value;
            const tip = document.getElementById('tip').value;
            const um = document.getElementById('um').value;
            const cantitate = document.getElementById('cantitate').value;

            const newRow = `
                <tr>
                    <td>${categorie}</td>
                    <td>${tip}</td>
                    <td>${um}</td>
                    <td>${cantitate}</td>
                </tr>
            `;

            tableBody.innerHTML += newRow;
        });
    });
</script>
                                
                            </div>

                                </div>

                    <div>
                        <button class="btn btn-success" type="submit">Trimite</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    </x-app-layout>

</body>

</html>
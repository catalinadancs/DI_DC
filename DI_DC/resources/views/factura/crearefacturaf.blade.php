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
    <style>
        @media (prefers-color-scheme: dark) {


            .form-control {
                color: #fff !important;
                /* Set the text color */
                background-color: #111827 !important;
                border-color: #999 !important;
            }

            .form-control::placeholder {
                color: #fff !important;
                opacity: 0.6 !important;
            }

            .container {
                color: #fff !important;
                /* Set the text color */
                background-color: #1f2937 !important;
                border-color: #777 !important;
            }
            input#data_emitere option[value="date"],
    input#data_scadenta option[value="date"],
    input#data_emitere,
    input#data_scadenta,
    input#denumire,
    input#cantitate,
    select#status,
    select#tip {
        color: #fff !important; /* Set the text color */
        background-color: #111827 !important; /* Set the background color */
    }


        }

        @media (prefers-color-scheme: light) {}
    </style>
</head>

<body>
    <x-app-layout>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <div class="container">
        <a href="{{ url('factura/index') }}" class="btn btn-secondary">Back</a>

            @csrf
            <div class="row pt-3">
                <div class="col">
                    <div class="card-body">
                        
                        <div>
                            @if($errors->any())
                            <ul>
                                @foreach($errors->all() as $err)
                                <li>{{$err}}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        <form method="post" action="{{route('facturaf.store')}}">
                            @csrf
                            <h3>Detalii factura</h3>
                            <div class="mb-3">
                                <label for="nume" class="form-label">Nume firma</label>
                                <input type="text" class="form-control" id="nume" name="nume" placeholder="Nume firma" required />
                            </div>
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
                                <label for="nume_delegat" class="form-label">Nume delegat</label>
                                <input type="text" class="form-control" id="nume_delegat" name="nume_delegat" placeholder="Nume delegat" required />
                            </div>

                            <div class="mb-3">
                                <label for="serieCI_del" class="form-label">Serie CI delegat</label>
                                <input type="text" class="form-control" id="serieCI_del" name="serieCI_del" placeholder="Serie CI delegat" required />
                            </div>

                            <div class="mb-3">
                                <label for="nrCI_del" class="form-label">Numar CI delegat</label>
                                <input type="text" class="form-control" id="nrCI_del" name="nrCI_del" placeholder="Numar CI delegat" required />
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Status factura</label>
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
                                    <label for="denumire" class="form-label">Denumire</label>
                                    <input type="text" id="denumire" name="denumire" required />
                                </div>
                                <div class="mb-3">
                                    <label for="tip" class="form-label">Tip</label>
                                    <select name="tip" id="tip">
                                        <option value="produs">Produs</option>
                                        <option value="serviciu">Serviciu</option>
                                    </select>
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
                                            <th>Denumire</th>
                                            <th>Tip</th>
                                            <th>Cantitate</th>
                                            <th>Nume Firma</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableBody">
                                        <!-- Table rows will be added dynamically here -->
                                    </tbody>
                                </table>


                            </div>

                    </div>

                    <div>
                        <button class="btn btn-success" type="submit">Trimite</button>
                    </div>
                    </form>

                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const addRowBtn = document.getElementById('addRowBtn');
                            const tableBody = document.getElementById('tableBody');

                            addRowBtn.addEventListener('click', function() {
                                const denumire = document.getElementById('denumire').value;
                                const tip = document.getElementById('tip').value;
                                const cantitate = document.getElementById('cantitate').value;
                                const nume = document.getElementById('nume').value;

                                const newRow = `
                                                <tr>
                                                    <td>${denumire}</td>
                                                    <td>${tip}</td>
                                                    <td>${cantitate}</td>
                                                    <td>${nume}</td>
                                                </tr>
                                            `;

                                tableBody.innerHTML += newRow;

                                // Create hidden input fields for each row's data
                                const hiddenInput = document.createElement('input');
                                hiddenInput.type = 'hidden';
                                hiddenInput.name = 'data[]'; // This name should match what you're expecting in the controller
                                hiddenInput.value = JSON.stringify([denumire, tip, cantitate, nume]);
                                tableBody.appendChild(hiddenInput);
                            });

                        });
                    </script>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#save-button').click(function() {
                                var tableData = [];

                                // Iterate through each row in the table
                                $('#tableBody tr').each(function() {
                                    var rowData = [];
                                    $(this).find('td').each(function() {
                                        rowData.push($(this).text()); // You can adjust this based on your cell content
                                    });
                                    tableData.push(rowData);
                                });

                                // Send table data to the server using AJAX
                                $.post('{{ route("spfprodus.store") }}', {
                                        data: tableData
                                    },
                                    function(response) {
                                        if (response.success) {
                                            $('#message').text('Data saved successfully!');
                                        } else {
                                            $('#message').text('An error occurred while saving data.');
                                        }
                                    });
                            });
                        });
                    </script>

                </div>
            </div>
        </div>

    </x-app-layout>
</body>

</html>
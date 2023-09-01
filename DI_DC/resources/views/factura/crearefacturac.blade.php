
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    @csrf 
    <div class="row pt-3">
        <div class="col">
            <div class="card-body">
                <form method="post" action="{{route('facturac.store')}}">
                    @csrf    
                    <h3>Detalii factura</h3>
                    <div class="mb-3">
                        <label for="nume" class="form-label">Nume client</label>
                        <input type="text" class="form-control" id="nume" name="nume" placeholder="Nume client" required />
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
                        <label for="status" class="form-label">Status factura</label>
                        <select name="status" id="status">
                            <option value="emisa">Emisa</option>
                            <option value="incasata">Incasata</option>
                            <option value="anulata">Anulata</option>
                            <option value="depasita">Depasita</option>
                        </select>
                    </div>
                    <div class="items">

<<<<<<< Updated upstream
                    <div>
                        <button id="save-button" class="btn btn-success" type="submit">Trimite</button>
                    </div>
                </form>

                <br>
                <h3>Lista de produse</h3>
=======
        addRowBtn.addEventListener('click', function () {
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
                    </div>
                  

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
    $('#save-button').click(function() {
        var tableData = [];
>>>>>>> Stashed changes

                <p>
                    Pentru inceput se vor adauga datele pe factura.
                    <br> Dupa care se va reveni la pagina facturii prin sageata back din browser.
                    <br> Apoi se va apasa butonul de adaugare produse pentru factura curenta.
                    <br> Se va repeta acest proces pentru fiecare produs in parte.
                </p>    
                 
                <br>

<<<<<<< Updated upstream
                <div class="col">
                    <a href="{{ url('/factura/produsf') }}" class="btn btn-light">Adauga produse</a>
                        <!-- <button class="btn btn-light">Clienți</button> -->
                </div>

            </div>
=======
        // Send table data to the server using AJAX
        $.post('{{ route('spfprodus.store') }}', { data: tableData }, function(response) {
            if (response.success) {
                $('#message').text('Data saved successfully!');
            } else {
                $('#message').text('An error occurred while saving data.');
            }
        });
    });
});

</script>
<div>
                        <button id="save-button" class="btn btn-success" type="submit">Trimite</button>
                    </div>
            </div>  
                </form>
                
>>>>>>> Stashed changes
        </div>
    </div>
</div>

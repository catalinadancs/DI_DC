
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
                <th>Denumire</th>
                <th>Tip</th>
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
            const denumire = document.getElementById('denumire').value;
            const tip = document.getElementById('tip').value;
            const um = document.getElementById('um').value;
            const cantitate = document.getElementById('cantitate').value;

            const newRow = `
                <tr>
                    <td>${denumire}</td>
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
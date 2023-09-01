
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    @csrf 
    <div class="row pt-3">
        <div class="col">
            <div class="card-body">
                <form method="post" action="{{route('produsf.store')}}">
                    @csrf  
                    <h3>Adaugare produs in factura curenta</h3>  
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
                            <label for="nume" class="form-label">Numele clientului pentru care se adauga produsul</label>
                            <input type="text" id="nume" name="nume" required />
                        </div>

                    <div>
                        <button id="save-button" class="btn btn-success" type="submit">Trimite</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

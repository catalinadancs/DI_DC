<x-app-layout>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
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
                                    <input type="date"  id="data_emitere" name="data_emitere" required />
                                </div>
                                <div class="mb-3">
                                    <label for="data_scadenta" class="form-label">Data scadenta</label>
                                    <input type="date"  id="data_scadenta" name="data_scadenta" required />
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
                                <div>
                        <button id="save-button" class="btn btn-success" type="submit">Trimite</button>
                    </div>
                </form>
                <br>
                <h3>Lista de produse</h3>

                <p>
                    Pentru inceput se vor adauga datele pe factura.
                    <br> Dupa care se va reveni la pagina facturii prin sageata back din browser.
                    <br> Apoi se va apasa butonul de adaugare produse pentru factura curenta.
                    <br> Se va repeta acest proces pentru fiecare produs in parte.
                </p>  
                
                <br>

                <div class="col">
                    <a href="{{ url('/factura/produsf') }}" class="btn btn-light">Adauga produse</a>
                        <!-- <button class="btn btn-light">Clienți</button> -->
                </div>

            </div>
        </div>
    </div>
</div>
</x-app-layout>
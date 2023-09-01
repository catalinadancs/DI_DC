
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
                <form method="post" action="{{route('firma.store')}}">
                @csrf 
                    <div>
                        <label for="nume" class="form-label">Nume</label>
                        <input type="text" class="form-control" id="nume" name="nume" placeholder="Nume SRL" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="telefon" class="form-label">Telefon</label>
                        <input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="adresa" class="form-label">Adresa</label>
                        <input type="text" class="form-control" id="adresa" name="adresa" placeholder="Adresa" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="judet" class="form-label">Judet</label>
                        <input type="text" class="form-control" id="judet" name="judet" placeholder="Judet" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="reg_com" class="form-label">Registrul Comertului</label>
                        <input type="text" class="form-control" id="reg_com" name="reg_com" placeholder="JXX/XXX/XXXX" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="cif" class="form-label">CIF</label>
                        <input type="text" class="form-control" id="cif" name="cif" placeholder="RO XXXXXX" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="banca" class="form-label">Banca</label>
                        <input type="text" class="form-control" id="banca" name="banca" placeholder="Banca" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="iban" class="form-label">IBAN</label>
                        <input type="text" class="form-control" id="iban" name="iban" placeholder="IBAN" required></input>
                    </div>
                    <div>
                        <input type="submit" value="Save"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

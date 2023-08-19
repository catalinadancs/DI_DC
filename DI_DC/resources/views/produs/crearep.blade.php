<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="container">
    <div class="container">
        <div class="flex items-center gap-4 mt-4">
            <a href="{{ route('produs.index') }}" class="btn btn-primary">Back</a>
        </div>
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
                    <form method="post" action="{{route('produs.store')}}">
                        @csrf
                        <div>
                            <label for="tip" class="form-label">Tip</label>
                            <input type="text" class="form-control" id="tip" name="tip" placeholder="Produs/Serviciu" required />
                        </div>
                        <div>
                            <label for="denumire" class="form-label">Denumire</label>
                            <input type="text" class="form-control" id="denumire" name="denumire" placeholder="Denumire" required />
                        </div>
                        <div class="mb-3">
                            <label for="cod" class="form-label">Cod produs</label>
                            <input class="form-control" id="cod" name="cod" placeholder="Cod produs" required></input>
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

                        <div class="flex items-center gap-4">
                            <button class="btn btn-success" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
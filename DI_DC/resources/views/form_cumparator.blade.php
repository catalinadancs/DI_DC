
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    <div class="row pt-3">
        <div class="col">
            <div class="card-body">
                <form method="post">
                    <div>
                        <label for="nume" class="form-label">Nume</label>
                        <input type="text" class="form-control" id="nume" name="nume" placeholder="Nume" required />
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
                        <label for="serie_ci" class="form-label">Seria buletinului</label>
                        <input class="form-control" id="seria_ci" name="seria_ci" placeholder="Seria buletinului" required></input>
                    </div>
                    <div class="mb-3">
                        <label for="nr_ci" class="form-label">Numarul buletinului</label>
                        <input class="form-control" id="nr_ci" name="nr_ci" placeholder="Numarul buletinului" required></input>
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
                    <div class="mb-3">
                        <input type="checkbox" id="include_srl" name="include_srl" value="1">
                        <label for="include_srl">Bifeaza daca e SRL</label><br>
                        <div id="srl_container" style="display: none;">
                            <form method="post">
                                <div class="mb-3">
                                    <label for="sediu" class="form-label">Sediu</label>
                                    <input type="text" class="form-control" id="sediu" name="sediu" placeholder="Sediu" required />
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input class="form-control" id="email" name="email" placeholder="Email" required></input>
                                </div>
                                <div class="mb-3">
                                    <label for="telefon" class="form-label">Telefon</label>
                                    <input class="form-control" id="telefon" name="telefon" placeholder="telefon" required></input>
                                </div>
                            </form>
                        </div>
                    </div>
                    <script>
                        document.getElementById("include_srl").addEventListener("change", function() {
                            var srlContainer = document.getElementById("srl_container");
                            if (this.checked) {
                                srlContainer.style.display = "block";
                            } else {
                                srlContainer.style.display = "none";
                            }
                        });
                    </script>

                    <div>
                        <button class="btn btn-success" type="submit">Trimite</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

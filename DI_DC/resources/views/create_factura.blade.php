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
        h2, label, input {
            color: #fff;
        }

        form {
            color: #fff;
        }
        .form-control {
        background-color: #111827;
        color: #fff;
    }

    .form-control::placeholder {
        color: #fff;
        opacity: 0.6;
      
    }
}
@media (prefers-color-scheme: light) {

    }



</style>


<body>
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8  dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <section>
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    Creare factura
                                </h2>
                            </header>
                            <form>
                                <div class="mb-3">
                                    <label for="serie" class="form-label">Serie</label>
                                    <input class="form-control" id="serie" name="serie" placeholder="Serie" required />
                                </div>
                                <div class="mb-3">
                                    <label for="data_emitere" class="form-label">Data emiterii</label>
                                    <input class="form-control" id="data_emitere" name="data_emitere" placeholder="Data emiterii" required></input>
                                </div>
                                <div class="mb-3">
                                    <label for="data_scadenta" class="form-label">Data scadenta</label>
                                    <input class="form-control" id="data_scadenta" name="data_scadenta" placeholder="Data scadenta" required></input>
                                </div>
                                
                                <div class="flex items-center gap-4">
                                    <a href="{{ url('/factura') }}" class="btn btn-success" type="submit">Salvare</a>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
    </x-app-layout>

</body>

</html>

<x-app-layout>
  
        <style>
    

    
    .col{
        height: 300px;
    }
    .col .btn {
        display: flex;
        align-items: start;
        justify-content: flex-start;
        text-align: left;
        font-weight: bolder;
        font-size: 30px;
        height: 30%;
        width: 100%;
        padding: 5px;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            </div>
        </div>
    </div>


<div class="container">
  <div class="col-3">
    <div class="col">
    <a href="{{ url('/create_factura') }}" class="btn btn-light">Creare factura</a>
    </div>
    <div class="col">
      <button class="btn btn-light">Vizualizare facturi</button>
    </div>
    <div class="col">
      <button class="btn btn-light">Curs valutar</button>
    </div>
  </div>
</div>

</x-app-layout>


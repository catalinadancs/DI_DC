<x-app-layout>
    
        <style>
    
    .col{
        height: 300px;
    }
    .col .btn {
        display: flex;
        align-items: center;
        justify-content:  center;
        text-align: center;
        font-weight: bolder;
        font-size: 30px;
        height: 30%;
        width: 100%;
        padding: 5px;
    }
    .ul{
      display: flex;
        align-items: center;
        justify-content:  center;
        text-align: center;
    }
    </style>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="py-12">
        
    </div>

    <div class="container">
  <div class="row row-cols-2 ">
    <div class="col">
    <a href="{{ url('/factura') }}" class="btn btn-light">Facturi</a>
      <ul>
        <li>Crearea unei facturi</li>
        <li>Vizualizarea unei facturi</li>
        <li>Cursul valutar în prezent</li>
      </ul>
    </div>
    <div class="col">
    <a href="{{ url('/bazadate') }}" class="btn btn-light">Baza de date</a>
      <ul>
        <li>Clienți</li>
        <li>Produse</li>
        <li>Servicii</li>
      </ul>
    </div>
    <div class="col">
    <a href="{{ url('/rapoarte') }}" class="btn btn-light">Rapoarte</a>
      <ul>
        <li>Rapoartele pe client</li>
        <li>Rapoartele de final de lună</li>
      </ul>
    </div>
    <div class="col">
    <a href="{{ url('/aboutus') }}" class="btn btn-light">DI🗲DC</a>
      <p>Câteva informații despre echipa minunată din spatele acestei aplicații</p>
    </div>
  </div>
</div>

</x-app-layout>

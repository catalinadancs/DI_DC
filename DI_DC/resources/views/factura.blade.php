<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Facturi</title>
</head>
<x-app-layout>

  <style>
    .col {
      height: 200px;
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


    @media (prefers-color-scheme: dark) {
      body {
        background-color: #111827;
        color: #ffffff;
      }

      a.btn.btn-light {
        background-color: #1f2937;
        color: #fff;
      }

      button.btn.btn-light {
        background-color: #1f2937;
        color: #fff;
      }

      a.btn.btn-light:hover {
        background-color: #555e6b;
        color: #fff;
      }

      button.btn.btn-light:hover {
        background-color: #555e6b;
        color: #fff;
      }
    }

    @media (prefers-color-scheme: light) {
      body {
        background-color: #f3f4f6;
        color: #000;
      }

      a.btn.btn-light {
        background-color: #ffffff;
        color: #000;
      }

      button.btn.btn-light {
        background-color: #ffffff;
        color: #000;
      }

      a.btn.btn-light:hover {
        background-color: #d3d4d5;
        color: #000000;
      }

      button.btn.btn-light:hover {
        background-color: #d3d4d5;
        color: #000000;
      }

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
        <a href="{{ url('/factura/index') }}" class="btn btn-light">Creare factura</a>
      </div>
      <div class="col">
        <button class="btn btn-light">Vizualizare facturi</button>
      </div>
      <div class="col">
      <a href="{{ url('/curs-valutar') }}" class="btn btn-light">Curs valutar</a>
      </div>
    </div>
  </div>

</x-app-layout>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Curs Valutar BNR</title>
</head>

<x-app-layout>
    <style>
        h1 {
            text-align: center;
        }
        .p {
            text-indent: 50px;
        }

        @media (prefers-color-scheme: dark) {
            body {
                background-color: #111827;
                color: #ffffff;
            }
            .h1{
                background-color: #1f2937;
                color: #fff;
            }
        }

        @media (prefers-color-scheme: light) {
            body {
                background-color: #f3f4f6;
                color: #000;
            }
            .h1{
                background-color: #ffffff;
                color: #000;
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


    <html>
    <head>
    </head>
    <body>


    <!--  CursBnr.ro Code inceput v.3.0  -->
    <iframe style="width: 300px; height: 150px;" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" src="https://www.cursbnr.ro/insert/cursvalutar.php?w=200&b=f7f7f7&bl=dcdcdc&ttc=0a6eab&tc=000000&diff=1&ron=1&cb=1"></iframe>
    <!--  CursBnr.ro Code sfarsit v.3.0  -->

    </body>
    </html>







</x-app-layout>

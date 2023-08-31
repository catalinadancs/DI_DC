<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
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

            h1,
            p {
                color: #fff !important;
                /* Set the text color */
                background-color: #1f2937 !important;
                border-color: #777 !important;
                text-align: center !important;
            }
        }

        @media (prefers-color-scheme: light) {
            body {
                background-color: #f3f4f6;
                color: #000;
            }

            .h1 {
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

        <h1>About Us</h1>
        <p>This page has a grey background color and a blue text.
            And this is David making some changes.
        </p>

    </body>

    </html>







</x-app-layout>
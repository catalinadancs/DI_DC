<!DOCTYPE html>
<html>

<head>
    <title>Factura</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: left;
        }

        .info {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .logo {
            text-align: center;
            margin-bottom: 10px;
            /* Spațiu între logo și informații */
            margin-right: 10px;
        }

        .seria {
            background-color: blue;
            /* Culoare de fundal albastru */
            color: white;
            /* Text alb */
            padding: 5px 10px;
            /* Spațiere pentru vizualizare mai bună */
            border-radius: 5px;
            /* Colțuri rotunjite */
        }


        .col {
            flex: 1;
            /* Ocupă o parte egală din spațiul disponibil */
            display: inline-block;
            vertical-align: top;
            align-items: stretch;
            /* Aliniere sus */
            column-gap: 70px;

        }

        .furnizor {
            text-align: left;
            /* Aliniere text în stânga pentru furnizor */
            margin-left: 10px;
            margin-right: 10px;
        }

        .client {
            text-align: right;
            /* Aliniere text în dreapta pentru client */
            margin-left: 100px;
        }

        .table-container {
            margin-top: 20px;
            margin-bottom: 40px;
            /* Adaugă o margine dedesubt */
            overflow-x: auto;
            /* Scrollează orizontal dacă tabelul este prea larg */
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 10px;
            text-align: center;
        }

        .table th {
            background-color: #f2f2f2;
            /* Fundal gri pentru antetul tabelului */
        }

        .total {
            margin-top: 20px;
            text-align: right;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 10px 0;
            background-color: #f2f2f2;
        }

        .delegat {
            margin-top: 10px;
        }

        .detalii-delegat {
            margin-top: 5px;
        }
    </style>

</head>

<body>
    <div class="header">
        <h1>Factura</h1>
        <div class="seria">
            Seria: 123456
        </div>
    </div>

    <div class="info">
        <div class="col">
            <div class="logo">
                <img src="{{ public_path('logo/logo.png') }}" alt="Logo" width="100">
            </div>
        </div>
        <div class="col">
            <div class="furnizor">
                <!-- Informații furnizor -->
                <h2>Furnizor</h2>
                <p><strong>Furnizor:</strong> Numele Furnizorului</p>
                <p><strong>Adresă:</strong> Adresa Furnizorului</p>
                <p><strong>Contact:</strong> Contact Furnizor</p>
            </div>
            <div class="details">
                <!-- Detalii de contact furnizor -->
            </div>
        </div>
        <div class="col">
            <div class="client">
                <!-- Informații client -->
                <h2>Client</h2>
                    <p><strong>Furnizor:</strong> Numele Clientului</p>
                    <p><strong>Adresă:</strong> Adresa Clientului</p>
                    <p><strong>Contact:</strong> Contact Client</p>
            </div>
            <div class="details">
                <!-- Detalii de contact client -->
                
            </div>
        </div>
    </div>





    <table class="table">
        <tr>
            <th>Nr.</th>
            <th>Descriere produs</th>
            <th>Cantitate</th>
            <th>Preț unitar</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Produs 1</td>
            <td>2</td>
            <td>50</td>
            <td>100</td>
        </tr>
        <!-- Adaugă mai multe rânduri pentru fiecare produs -->
    </table>

    <div class="total">
        <p>Subtotal: 100</p>
        <p>TVA (19%): 19</p>
        <p>Total: 119</p>
    </div>

    <div class="footer">
        <div class="delegat">
            <strong>Delegat:</strong>
            Nume Delegat
        </div>
        <div class="detalii-delegat">
            Detalii contact delegat
        </div>
    </div>


</body>

</html>
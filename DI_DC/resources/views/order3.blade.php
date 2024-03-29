<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<style>
   body {
      margin: 0;
      padding: 0;
      font: 400 .875rem 'Open Sans', sans-serif;
      color: #bcd0f7;
      background: #1A233A;
      position: relative;
      height: 100%;
      display: flex;
    flex-direction: column;
   }

   .invoice-container {
      padding: 1rem;
   }

   .invoice-container .invoice-header .invoice-logo {
      margin: 0.8rem 0 0 0;
      display: inline-block;
      font-size: 1.6rem;
      font-weight: 700;
      color: #bcd0f7;
   }

   .invoice-container .invoice-header .invoice-logo img {
      max-width: 130px;
   }

   .invoice-container .invoice-header address {
      font-size: 0.8rem;
      color: #8a99b5;
      margin: 0;
   }

   .invoice-container .invoice-details {
      margin: 1rem 0 0 0;
      padding: 1rem;
      line-height: 180%;
      background: #1a233a;
   }

   .invoice-container .invoice-details .invoice-num {
      text-align: right;
      font-size: 0.8rem;
   }

   .invoice-container .invoice-body {
      padding: 1rem 0 0 0;
   }

   .invoice-container .invoice-footer {
      text-align: center;
      font-size: 0.7rem;
      margin-top: auto;
      /* Aceasta linie de cod plasează footer-ul în partea de jos a containerului */
      padding: 5px 0;
      flex: 1;
      display: flex;
      flex-direction: column;
   }

   .invoice-status {
      text-align: center;
      padding: 1rem;
      background: #272e48;
      -webkit-border-radius: 4px;
      -moz-border-radius: 4px;
      border-radius: 4px;
      margin-bottom: 1rem;
   }

   .invoice-status h2.status {
      margin: 0 0 0.8rem 0;
   }

   .invoice-status h5.status-title {
      margin: 0 0 0.8rem 0;
      color: #8a99b5;
   }

   .invoice-status p.status-type {
      margin: 0.5rem 0 0 0;
      padding: 0;
      line-height: 150%;
   }

   .invoice-status i {
      font-size: 1.5rem;
      margin: 0 0 1rem 0;
      display: inline-block;
      padding: 1rem;
      background: #1a233a;
      -webkit-border-radius: 50px;
      -moz-border-radius: 50px;
      border-radius: 50px;
   }

   .invoice-status .badge {
      text-transform: uppercase;
   }

   @media (max-width: 767px) {
      .invoice-container {
         padding: 1rem;
      }
   }

   .card {
      background: #272E48;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      border: 0;
      margin-bottom: 1rem;
   }

   .custom-table {
      border: 1px solid #2b3958;
   }

   .custom-table thead {
      background: #2f71c1;
   }

   .custom-table thead th {
      border: 0;
      color: #ffffff;
   }

   .custom-table>tbody tr:hover {
      background: #172033;
   }

   .custom-table>tbody tr:nth-of-type(even) {
      background-color: #1a243a;
   }

   .custom-table>tbody td {
      border: 1px solid #2e3d5f;
   }

   .table {
      background: #1a243a;
      color: #bcd0f7;
      font-size: .75rem;
   }

   .text-success {
      color: #c0d64a !important;
   }

   .custom-actions-btns {
      margin: auto;
      display: flex;
      justify-content: flex-end;
   }

   .custom-actions-btns .btn {
      margin: .3rem 0 .3rem .3rem;
   }
</style>
<body>
<div class="container">
    <nav aria-label="...">
        <ul class="pagination pagination-lg">
            <li class="page-item"><a class="page-link" href="{{ url('/orders') }}">1</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('/orders2') }}">2</a></li>
            <li class="page-item active" aria-current="page">
                <span class="page-link">3</span>
            </li>

            
        </ul>
    </nav>
</div>
<div class="container">
   <div class="py-2">
      <a href="{{ url('download-orders3') }}" class="btn btn-primary">Download PDF</a>
   </div>
</div>
<div class="container">
   <div class="row gutters">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
         <div class="card">
            <div class="card-body p-0">
               <div class="invoice-container">
                  <div class="invoice-header">



                     <!-- Row start -->
                     <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                           <img src="{{ asset('logo/logo.png') }}" alt="Logo Companie" style="max-width: 150px;">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <address class="text-right">
                           <h2>Furnizor</h2>
                    <p><strong>Furnizor:</strong> Numele Furnizorului</p>
                    <p><strong>Adresă:</strong> Adresa Furnizorului</p>
                    <p><strong>Contact:</strong> Contact Furnizor</p>
                           </address>
                        </div>
                     </div>
                     <!-- Row end -->

                     <!-- Row start -->
                     <div class="row gutters">
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                           <div class="invoice-details">
                              <address>
                              <h2>Client</h2>
                    <p><strong>Furnizor:</strong> Numele Clientului</p>
                    <p><strong>Adresă:</strong> Adresa Clientului</p>
                    <p><strong>Contact:</strong> Contact Client</p>
                              </address>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                           <div class="invoice-details">
                              <div class="invoice-num">
                                 <div>Factura - #009</div>
                                 <div>January 10th 2020</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Row end -->

                  </div>

                  <div class="invoice-body">

                     <!-- Row start -->
                     <div class="row gutters">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           <div class="table-responsive">
                              <table class="table custom-table m-0">
                                 <thead>
                                    <tr>
                                       <th>Items</th>
                                       <th>Product ID</th>
                                       <th>Quantity</th>
                                       <th>Sub Total</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>
                                          Wordpress Template
                                          <p class="m-0 text-muted">
                                             Reference site about Lorem Ipsum, giving information on its origins.
                                          </p>
                                       </td>
                                       <td>#50000981</td>
                                       <td>9</td>
                                       <td>$5000.00</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Maxwell Admin Template
                                          <p class="m-0 text-muted">
                                             As well as a random Lipsum generator.
                                          </p>
                                       </td>
                                       <td>#50000126</td>
                                       <td>5</td>
                                       <td>$100.00</td>
                                    </tr>
                                    <tr>
                                       <td>
                                          Unify Admin Template
                                          <p class="m-0 text-muted">
                                             Lorem ipsum has become the industry standard.
                                          </p>
                                       </td>
                                       <td>#50000821</td>
                                       <td>6</td>
                                       <td>$49.99</td>
                                    </tr>
                                    <tr>
                                       <td>&nbsp;</td>
                                       <td colspan="2">
                                          <p>
                                             Subtotal<br>
                                             Shipping &amp; Handling<br>
                                             Tax<br>
                                          </p>
                                          <h5 class="text-success"><strong>Grand Total</strong></h5>
                                       </td>
                                       <td>
                                          <p>
                                             $5000.00<br>
                                             $100.00<br>
                                             $49.00<br>
                                          </p>
                                          <h5 class="text-success"><strong>$5150.99</strong></h5>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <!-- Row end -->

                  </div>

                  <div class="invoice-footer">
                     Informatii delegat
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</div></body>
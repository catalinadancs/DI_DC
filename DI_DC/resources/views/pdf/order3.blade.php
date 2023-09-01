<style>
   body {
      margin: 0;
      padding: 0;
      font: 400 .875rem 'Open Sans', sans-serif;
      color: #bcd0f7;
      background: #1A233A;
      position: relative;
      height: 100%;
   }

   .container {
      margin-right: auto;
      margin-left: auto;
      padding-right: 15px;
      padding-left: 15px;
   }

   .row::after {
      content: "";
      clear: both;
      display: table;
   }

   .col-xl-*,
   .col-lg-*,
   .col-md-*,
   .col-sm-*,
   .col-* {
      float: left;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px;
   }

   .card {
      position: relative;
      display: flex;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 0.25rem;
      margin-bottom: 1.5rem;
   }

   .card-body {
      flex: 1 1 auto;
      padding: 1.25rem;
   }

   .table {
      width: 100%;
      max-width: 100%;
      margin-bottom: 1rem;
      background-color: transparent;
      border-collapse: collapse;
   }

   .table-bordered th,
   .table-bordered td {
      border: 1px solid #dee2e6;
      padding: 0.75rem;
      vertical-align: top;
   }

   .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
   }

   .btn {
      display: inline-block;
      font-weight: 400;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      user-select: none;
      border: 1px solid transparent;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: 0.25rem;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
   }

   .btn-primary {
      color: #fff;
      background-color: #007bff;
      border-color: #007bff;
   }

   .btn-secondary {
      color: #fff;
      background-color: #6c757d;
      border-color: #6c757d;
   }

   .text-left {
      text-align: left;
   }

   .text-right {
      text-align: right;
   }

   .text-muted {
      color: #6c757d;
   }

   .text-success {
      color: #28a745;
   }

   .m-0 {
      margin: 0 !important;
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
      line-height: 100%;
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
      margin: 5px 0 0 0;
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

                           <img src="{{ public_path('logo/logo.png') }}" alt="Logo Companie" style="max-width: 100px;">

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                           <address class="text-right">
                              Furnizor <br>
                              <strong>Furnizor:</strong> Numele Furnizorului<br>
                              <strong>Adresă:</strong> Adresa Furnizorului<br>
                              <strong>Contact:</strong> Contact Furnizor
                           </address>
                        </div>
                     </div>
                     <!-- Row end -->

                     <!-- Row start -->
                     <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">

                           <address>
                              Client
                              Alex Maxwell<br>
                              150-600 Church Street, Florida, USA
                           </address>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
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
</div>
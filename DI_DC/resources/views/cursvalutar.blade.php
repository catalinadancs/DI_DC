<?php
/*
     * Class cursBnrXML v1.0
     * This class parses BNR's XML and returns the current exchange rate
     *
     * Requirements: PHP5 
     *
     * Last update: October 2011, 27     
     * More info: www.curs-valutar-bnr.ro
     *
     */

class cursBnrXML
{
    /**
     * xml document
     * @var string
     */
    var $xmlDocument = '';

    /**
     * exchange date
     * BNR date format is Y-m-d
     * @var string
     */
    var $date = '';

    /**
     * currency
     * @var associative array
     */
    var $currency = [];

    /**
     * cursBnrXML class constructor
     *
     * @access        public
     * @param         $url        string
     * @return        void
     */
    function __construct($url)
    {
        $this->xmlDocument = file_get_contents($url);
        $this->parseXMLDocument();
    }

    /**
     * parseXMLDocument method
     *
     * @access        public
     * @return         void
     */
    function parseXMLDocument()
    {
        $xml = new SimpleXMLElement($this->xmlDocument);

        $this->date = $xml->Header->PublishingDate;

        foreach ($xml->Body->Cube->Rate as $line) {
            $this->currency[] = [
                'name' => $line['currency'],
                'value' => $line,
                'multiplier' => $line['multiplier']
            ];
        }
    }

    /**
     * getCurs method
     * 
     * get current exchange rate: example getExchangeRate('USD')
     * 
     * @access        public
     * @return         double
     */
    function getExchangeRate($currency)
    {
        foreach ($this->currency as $line) {
            if ($line['name'] == $currency) {
                return $line['value'];
            }
        }

        return 'Incorrect currency!';
    }
}

//-----------------------------------------------------------------------------------------------------------------------------
//@an example of using the cursBnrXML class
$curs = new cursBnrXML('http://www.bnro.ro/nbrfxrates.xml');
?>
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

        .container {
            color: #fff !important;
            /* Set the text color */
            background-color: #1f2937 !important;
            border-color: #777 !important;
        }
    </style>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container">
        <div>
            <div class="flex items-center gap-4 mt-4">
                <a href="{{ url('/factura') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col">
                <div class="card-body">
                    <h4>Data cursului valutar: </h4>
                    <?php
                    print $curs->date;
                    ?>
                    <?php
                    print '<hr>';
                    print 'USD: ' . $curs->getExchangeRate('USD') . ' RON ';
                    print '<hr>';
                    print 'EUR: ' . $curs->getExchangeRate('EUR'). ' RON ';
                    print '<hr>';
                    print 'GBP: ' . $curs->getExchangeRate('GBP'). ' RON ';
                    print '<hr>';
                    print 'Dolar canadian CAD: ' . $curs->getExchangeRate('CAD'). ' RON ';
                    print '<hr>';
                    print 'Franc elvetian CHF: ' . $curs->getExchangeRate('CHF'). ' RON ';
                    print '<hr>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
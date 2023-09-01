<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function index() {
        $orders = Order::orderBy('id', 'DESC')->get();
        $data['orders'] = $orders;
        return view('order', $data);
    }
    public function downloadPDF(){
        $orders = Order::orderBy('id', 'DESC')->get();
        $data['orders'] = $orders;
        $pdf = PDF::loadView('pdf.order', $data);
        return $pdf->download('orders.pdf');
        // afisare fara descarcare:
        //return $pdf->stream();
        
    }
    public function index2() {
        $orders = Order::orderBy('id', 'DESC')->get();
        $data['orders'] = $orders;
        return view('order2', $data);
    }
    public function downloadPDF2(){
        $orders = Order::orderBy('id', 'DESC')->get();
        $data['orders'] = $orders;
        $pdf = PDF::loadView('pdf.order2', $data);
        return $pdf->download('orders.pdf');
        // afisare fara descarcare:
        //return $pdf->stream();
        
    }
    public function index3() {
        $orders = Order::orderBy('id', 'DESC')->get();
        $data['orders'] = $orders;
        return view('order3', $data);
    }
    public function downloadPDF3(){
        $orders = Order::orderBy('id', 'DESC')->get();
        $data['orders'] = $orders;
        $pdf = PDF::loadView('pdf.order3', $data);
        return $pdf->download('orders.pdf');
        // afisare fara descarcare:
        //return $pdf->stream();
        
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use App\Models\invoice_detail;
use App\Models\product;
use App\Http\Requests\StoreinvoiceRequest;
use App\Http\Requests\UpdateinvoiceRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteByInvoiceId ($invoiceId){
        invoice_detail::where('invoiceId' , '=' ,$invoiceId)->delete();
       
        invoice::destroy($invoiceId);
        return Redirect::route('order.confirm');
    }
    public function getWaitingConfirmOrder (){
         
        
        $lstOrder = invoice::join('accounts' , 'invoices.accountId' , '=' , 'accounts.id')->where('invoices.status' , '=' , "0")->select('invoices.id','invoices.accountId','invoices.date','invoices.subtotal','invoices.status' , 'accounts.fullname')->get();
        
        return view('layouts.order.confirm.index' , ['lstOrder' => $lstOrder ]);
    }

    public function updateConfirmOrder ( $invoiceId)
    {
        $invoice = invoice::find($invoiceId);
        $invoiceDetail = invoice_detail::where('invoiceId' , $invoiceId)->get();
        foreach($invoiceDetail as $detail)
        {
            $product = product::where('id' , $detail->productId)->first();
            $quantity = $product->quantity - $detail->quantity;
            $product->fill([
                'quantity' => $quantity,
            ]);
            $product->save();
        }
        $invoice->fill([
        'status' => 1
        ]);
        $invoice->save();
        return Redirect::route('order.confirm');
    }
    public function getTransportedOrder (){
        $lstOrder = invoice::join('accounts' , 'invoices.accountId' , '=' , 'accounts.id')->where('invoices.status' , '=' , "1")->select('invoices.id','invoices.accountId','invoices.date','invoices.subtotal','invoices.status' , 'accounts.fullname')->get();
        
        return view('layouts.order.transported.index' , ['lstOrder' => $lstOrder ]);
    }

    public function updateTransportedOrder ( $invoiceId)
    {
        $invoice = invoice::find($invoiceId);
        $invoice->fill([
        'status' => 2
        ]);
        $invoice->save();
        return Redirect::route('order.transported');
    }
    public function getShippingOrder (){
        $lstOrder = invoice::join('accounts' , 'invoices.accountId' , '=' , 'accounts.id')->where('invoices.status' , '=' , "2")->select('invoices.id','invoices.accountId','invoices.date','invoices.subtotal','invoices.status' , 'accounts.fullname')->get();
        
        return view('layouts.order.shipping.index' , ['lstOrder' => $lstOrder ]);
    }
    public function updateShippingOrder ( $invoiceId)
    {
        $invoice = invoice::find($invoiceId);
        $invoice->fill([
        'status' => 3
        ]);
        $invoice->save();
        return Redirect::route('order.shipping');
    }
    public function getPendingOrder (){
        $lstOrder = invoice::join('accounts' , 'invoices.accountId' , '=' , 'accounts.id')->where('invoices.status' , '=' , "5")->select('invoices.id','invoices.accountId','invoices.date','invoices.subtotal','invoices.status' , 'accounts.fullname')->get();
        
        return view('layouts.order.pending.index' , ['lstOrder' => $lstOrder ]);
    }
    public function updatePendingOrder ( $invoiceId)
    {
        $invoice = invoice::find($invoiceId);
        $invoice->fill([
        'status' => 4
        ]);
        $invoice->save();
        return Redirect::route('order.shipping');
    }
    public function refusePendingOrder ( $invoiceId)
    {
        $invoice = invoice::find($invoiceId);
        $invoice->fill([
        'status' => 2,
        ]);
        $invoice->save();
        return Redirect::route('order.pending');
    }
    public function index()
    {
        $lstInvoice = invoice::where('status','3' )->get();
        return view('layouts.invoice.index' , ['lstInvoice' => $lstInvoice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreinvoiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $year =  Carbon::now('Asia/Ho_Chi_Minh')->year;
        $month = (int)Carbon::now('Asia/Ho_Chi_Minh')->month;
        
        if( $month < 10) 
        {
            $month = '0'.$month;
        }
        $day = (int)Carbon::now('Asia/Ho_Chi_Minh')->day;
        
        if($day < 10)
        {
            $day = '0'.$day;
        }
        
        $hour = (int)Carbon::now('Asia/Ho_Chi_Minh')->hour;
        if( $hour < 10) 
        {
            $hour = '0'.$hour;
        }
        $minute = (int) Carbon::now('Asia/Ho_Chi_Minh')->minute;
        if( $minute < 10) 
        {
            $minute = '0'.$minute;
        }
        $second = (int)Carbon::now('Asia/Ho_Chi_Minh')->second;
        if( $second < 10) 
        {
            $second = '0'.$second;
        }
        $id = $year.$month.$day.$hour.$minute.$second;
        $invoice = new invoice;
        $invoice->fill([
            'id' => $id,
            'accountId' => $request->input('matk'),
            'date' => Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString(),
            'subtotal' => $request->input('tongtien'),
            'status'=> '0',
        ]);
        $invoice->save();
        return Redirect::route('invoice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice_detail= invoice_detail::where('invoiceId',"=",$id)->get();
        return view('layouts.invoice.show' ,["invoice_detail" => $invoice_detail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(invoice $invoice)
    {
        return view('layouts.invoice.edit' ,["invoice" => $invoice]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateinvoiceRequest  $request
     * @param  \App\Models\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoice $invoice)
    {
        $invoice->fill([
            'date' => $request->input('ngay'),
            'subtotal' => $request->input('tongtien'),  
            
        ]);
        $invoice->save();
        return Redirect::route('invoice.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoice $invoice)
    {
        $invoice->delete();
        return Redirect::route('invoice.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use Illuminate\Http\Request;
use Carbon\Carbon;
class InvoiceAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getInvoiceId ()
    {
        $invoiceId = invoice::with('id')->max('id');
        
        return json_encode([
            'id' => $invoiceId,
            
        ]);
    }
    public function index()
    {
        $invoice = invoice::join('invoice_details' , 'invoice_details.invoiceId' , '=' , 'invoices.id')->get();
        
        return json_encode ([
            'data' => $invoice,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
        
        $hour = Carbon::now('Asia/Ho_Chi_Minh')->hour;
        $minute = Carbon::now('Asia/Ho_Chi_Minh')->minute;
        $second = Carbon::now('Asia/Ho_Chi_Minh')->second;
        $id = $year.$month.$day.$hour.$minute.$second;
        $invoice = new invoice;
        $invoice->fill([
         'id' => $id,
         'accountId' => $request->post('_accountId'),
         'date' => Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeString(),
         'subtotal' => $request->post('_subtotal'),
         'status' => 0,
        ]);
        $invoice->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoice $invoice)
    {
        //
    }
}

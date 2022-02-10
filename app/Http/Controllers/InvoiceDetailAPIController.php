<?php

namespace App\Http\Controllers;

use App\Models\invoice_detail;
use Illuminate\Http\Request;

class InvoiceDetailAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     function countDetail($invoiceId){
        $count = invoice_detail::ưhere('invoiceId' , '=' , $invoiceId)->count();
        return $count;
      }
      
    public function getListInvoiceDetail (Request $request){
        function countDetail($invoiceId){
            $count = invoice_detail::where('invoiceId' , '=' , $invoiceId)->count();
            return $count;
          }
        $count = countDetail($request->post('_invoiceId'));
        $InvoiceDetail = invoice_detail::join('products' , 'products.id' , '=' , 'invoice_details.productId')->join('invoices' , 'invoices.id' , '=' , 'invoice_details.invoiceId')->where('invoiceId' , '=' , $request->post('_invoiceId'))
        ->select('invoice_details.invoiceId' , 'invoice_details.productId' , 'invoice_details.quantity' , 'invoice_details.price' ,'invoices.date', 'invoice_details.total', 'products.name' , 'products.imageUrl' )->get();
        return json_encode ([
            'data' => $InvoiceDetail,
            'count' =>$count,
        ]);
    }
    
    public function getInvoiceDetail(Request $request){
        $invoiceDetail = invoice_detail::where('invoiceId' , '=' , $request->post('_invoiceId'))->select('invoiceId' , 'productId' , 'quantity' , 'price' , 'total')-> get();
        return json_encode ([
            'data' => $invoiceDetail,
        ]);
    }
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail = new invoice_detail;
        $detail->fill([
            'invoiceId' => $request->post('_invoiceId'),
            'productId' => $request->post('_productId'),
            'quantity' => $request->post('_quantity'),
            'price' => $request->post('_price'),
            'total' => $request->post('_total'),       
        ]);
        $detail->save();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function show(invoice_detail $invoice_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoice_detail $invoice_detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoice_detail $invoice_detail)
    {
        //
    }
}

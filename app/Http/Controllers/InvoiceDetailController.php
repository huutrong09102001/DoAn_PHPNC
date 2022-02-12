<?php

namespace App\Http\Controllers;

use App\Models\invoice_detail;
use App\Http\Requests\Storeinvoice_detailRequest;
use App\Http\Requests\Updateinvoice_detailRequest;

class InvoiceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storeinvoice_detailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeinvoice_detailRequest $request)
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function edit(invoice_detail $invoice_detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateinvoice_detailRequest  $request
     * @param  \App\Models\invoice_detail  $invoice_detail
     * @return \Illuminate\Http\Response
     */
    public function update(Updateinvoice_detailRequest $request, invoice_detail $invoice_detail)
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

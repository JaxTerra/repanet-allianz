<?php

namespace App\Http\Controllers;

use App\DataTables\QuoteDataTable;
use App\Mail\QuoteSent;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(QuoteDataTable $dataTable, Request $request)
    {
        return $dataTable->render('admin.quotes.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Quote $quote)
    {
        $this->_save($request, $quote);

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new QuoteSent($quote));

        return redirect()->route('homepage')->with('success', 'Message sent successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $model = Quote::find($id);
        if ($model) {
            $model->delete();
        }
        if ($request->ajax()) {
            return response()->json(true);
        } else {
            return redirect('/quotes');
        }
    }

    protected function _validate($request, $id = null)
    {
        $this->validate($request, [
            'name' => "required",
            'email' => "required|email",
            'message' => "required",
            'service' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);
    }

    protected function _save($request, $model)
    {
        $model->fill($request->except(['_token']));
        $model->save();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\EmailTamplate;
use Illuminate\Http\Request;

class EmailTamplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emails = EmailTamplate::get();
        return view('email.index',compact('emails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('email.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $emailTamplate = new EmailTamplate();
        $emailTamplate->name = $request->name;
        $emailTamplate->subject = $request->subject;
        $emailTamplate->description = $request->description;
        $emailTamplate->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(EmailTamplate $emailTamplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($emailTamplate)
    {
        $emailTamplate = EmailTamplate::find($emailTamplate);
        return view('email.edit',compact('emailTamplate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$emailTamplate)
    {
        $emailTamplate = EmailTamplate::find($emailTamplate);
        $emailTamplate->name = $request->name;
        $emailTamplate->subject = $request->subject;
        $emailTamplate->description = $request->description;
        $emailTamplate->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmailTamplate $emailTamplate)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodBankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }
    public function About()
    {
        return view('AboutUs');
    }

    public function Donors()
    {
        return view('Donor');
    }

    public function patients()
    {
        return view('patient');
    }

    public function BloodStock()
    {
        return view('Blood_Stock');
    }

    public function ContactUs()
    {
        return view('ContactUs');
    }

    public function login()
    {
        return view('login');
    }

    public function Signup()
    {
        return view('SignUp');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

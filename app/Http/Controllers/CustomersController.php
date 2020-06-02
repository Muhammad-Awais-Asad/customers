<?php

namespace App\Http\Controllers;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
use App\customers;

class CustomersController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
     return Datatables::of(customers::query())->make(true);
    }
    public function show()
    {
     return view('customers');
    }

}

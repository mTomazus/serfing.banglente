<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }
    public function getStovyklaTable() {
        return view('admin.stovykla-table');
    }
    public function getPamokosTable() {
        return view('admin.pamokos-table');
    }
    public function getContactsTable() {
        return view('admin.contacts-table');
    }
}
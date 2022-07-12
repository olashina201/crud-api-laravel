<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhoneBook;

class CrudApi extends Controller
{
    //
    function list() {
        return PhoneBook::all();
    }
}

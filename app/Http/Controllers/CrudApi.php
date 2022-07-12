<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhoneBook;

class CrudApi extends Controller
{
    //
    function list()
    {
        return PhoneBook::all();
    }

    function getSinglePhoneBook($id)
    {
        return PhoneBook::find($id);
    }

    function addPhoneBook(Request $req)
    {
        $phoneBook = new PhoneBook;
        $phoneBook->name = $req->name;
        $phoneBook->age = $req->age;
        $phoneBook->contact = $req->contact;
        $result = $phoneBook->save();
        if ($result) {
            return ["Result" => $result];
        }
        return ["Result" => "and error occured"];
    }
}

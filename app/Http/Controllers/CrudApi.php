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
        $phoneBook->firstname = $req->firstname;
        $phoneBook->lastname = $req->lastname;
        $phoneBook->contact = $req->contact;
        $result = $phoneBook->save();
        if ($result) {
            return response()->json([
                'data' => $phoneBook
            ]);
        }
        return ["Result" => "and error occured"];
    }

    function updatePhoneBook(Request $req, $id)
    {
        $phoneBook = PhoneBook::find($id);
        $phoneBook->firstname = $req->firstname;
        $phoneBook->lastname = $req->lastname;
        $phoneBook->contact = $req->contact;
        $result = $phoneBook->save();
        if ($result) {
            return response()->json([
                'data' => $phoneBook
            ]);
        }
        return ["Result" => "and error occured"];
    }

    function deletePhoneBook($id)
    {
        $phoneBook = PhoneBook::find($id);
        $result = $phoneBook->delete();
        if ($result) {
            return ["data" => "phonebook deleted successfully"];
        }
        return ["Result" => "and error occured"];
    }
}

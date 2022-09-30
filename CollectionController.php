<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collectionSatu()
    {
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        dump($collection);

    }

    public function collectionDua()
    {
        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);
        
        echo $collection[0]; echo "<br>";
        echo $collection[2]; echo "<br>";
        foreach($collection as $value) {
        echo "$value ";
        }
    }

    public function collectionTiga()
    {
        //... isi method collectionTiga
    }

    public function collectionEmpat()
    {
        //... isi method collectionEmpat
    }

    public function collectionLima()
    {
        //... isi method collectionLima
    }
    public function collectionEnam()
    {
        //... isi method collectionEnam
    }
}

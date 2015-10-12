<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tempatmakan;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listMenu()
    {
        $data['tempatmakan']=Tempatmakan::all();
        return view('page.tempatmakan.listTempat', $data);
    }

    public function tambahData()
    {
        return view('page.tempatmakan.tambahTempat');
    }
       // $keunggulan = json_encode(array("Nasi goreng enak","Tempat makan murah"));
       // print_r($keunggulan);
       // echo "<br /><br />";
       // $menu = json_encode(array(
       //  "makanan"=>
       //      array(
       //          "1"=>
       //              array("nama"=>"Nasi Goreng","harga"=>"10000", "deskripsi"=>"Nasi goreng special flamboyan plus telor"),
       //          "2"=>
       //              array("nama"=>"Nasi Goreng Balado Pedas","harga"=>"12000", "deskripsi"=>"Nasi goreng flamboyan special plus sambah balado")
       //      ), 
       //  "minuman"=>
       //      array(
       //          "1"=>
       //              array("nama"=>"es Teh","harga"=>"2000","deskripsi"=>"Es teh special"),
       //          "2"=>
       //              array("nama"=>"es Jeruk","harga"=>"4000","deskripsi"=>"Es jeruk nikmat")
       //      ),        
       //  "camilan"=>
       //      array(
       //          "1"=>
       //              array("nama"=>"Pisang Bakar","harga"=>"4500","deskripsi"=>"Pisang bakar special"),
       //          "2"=>
       //              array("nama"=>"Onion Ring","harga"=>"4000","deskripsi"=>"Onion ring special")
       //      )
       //  ));
       // print_r($menu);
       // echo "<br /><br />";
       //  $kontak=json_encode(array(
       //      "telepon" => "028171231",
       //      "hp" => "08612312321",
       //      "bbm" => "3241CAS",
       //      "wa" => "08531231231"
       //      ));
       //  print_r($kontak);
       //  echo "<br /><br />";
       //  $socmed=json_encode(array(
       //      "facebook" => "http://facebook.com/nasigorengflamboyan",
       //      "twitter" => "@nasigorengflamboyan",
       //      "gplus" => "plus.google.com/nasigorengflamboyan",
       //      "instagram" => "@nasigorengflamboyan"
       //      ));
       //  print_r($socmed);
       //  die();
}

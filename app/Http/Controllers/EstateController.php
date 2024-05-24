<?php

namespace App\Http\Controllers;

use App\EstateFilter;
use App\Models\Estate;
use Illuminate\Http\Request;
use LengthException;

class EstateController extends Controller
{
   public function getAllEstates() {
		return Estate::all();
	 }
	 public function getEstatesSort(Request $request){
		$estates = Estate::all();
		$estate = (new EstateFilter($estates,$request))->apply();
		return $estate;

	}
	public function getPurchaseEstatesSort(Request $request){
		$estates = Estate::all()->where('buy', 1);
		$estate = (new EstateFilter($estates,$request))->apply();
		return $estate;

	}
	public function getRentEstatesSort(Request $request){
		$estates = Estate::all()->where('buy', 0);
		$estate = (new EstateFilter($estates,$request))->apply();
		return $estate;

	}


   public function getPurchaseEstates() {
		return Estate::all()->where('buy', 1);
	 }
   public function getRentEstates() {
		return Estate::all()->where('buy', 0);
	 }
	 public function getEstate(){

	}

	public function destroyEstate(Estate $estate)
    {
			$estate->delete();
			unlink(public_path() . '/' . $estate->attributesToArray()['image']);
    }

	public function createEstate(Request $request){
		$addressOffer = $request->input("address");
		$estate = Estate::all()->where('address',$addressOffer);
		if(count($estate)==0){
			Estate::create($request->all());
			
		}
	}
}


<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function getAllOffer()
    {
        return Offer::all();
    }
    public function destroyOffer(Offer $offer,$delete)
    {
        if($delete==0){
            unlink(public_path() . '/' . $offer->attributesToArray()['image']);
        }
        $offer->delete();
    }
    public function newOffer(Request $request)
    {
        $date = getdate();
        $year = $date["year"];
        $yday = $date["yday"];
        $hours = $date["hours"];
        $minutes = $date["minutes"];
        $seconds = $date["seconds"];
        $img = $request->file('image');
        $imgM = explode('.', $img->getClientOriginalName());
        $imgName = md5($imgM[0] . $year . $yday . $hours . $minutes . $seconds) . "." . $imgM[1];
        $img->move(public_path() . '/apart-photo', $imgName);
        Offer::create([
            'image' => 'apart-photo/' . $imgName,
            'apartment' => $request->input('type-estate'),
            'buy' => $request->input('buy-rent'),
            'address' => $request->input('address'),
            'rooms' => $request->input('rooms'),
            'square' => $request->input('square'),
            'price' => $request->input('price'),
            'number_phone' => $request->input('number-phone')
        ]);
        return redirect()->back()->with('message', 'Заявка успешно отправлена!'); ;
    }
}

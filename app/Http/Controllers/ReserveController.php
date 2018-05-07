<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\reserve;

use App\Mail\consultancy;
class ReserveController extends Controller
{
    public function send()
    {
   
        $data = [
            'email'=>request('email'),
            'name' => request('name'),
            'select' => request('select'),
            'notes' => request('notes'),
            'mobile' => request('mobile')]; 
//dd($data['name']);

try {
    \Mail::to('info@ideasowners.net')->send(new reserve($data));   

} catch(\Exception $e) {
    dd($e->getMessage());
}
return redirect('/reserve-courses');
        }



        public function reserve_consultancy()
        {
       
            $data = [
                'email'=>request('email'),
                'name' => request('name'),
                'select' => request('select'),
                'notes' => request('notes'),
                'mobile' => request('mobile')]; 
    //dd($data['name']);
    
    try {
        \Mail::to('mukadam.taher@gmail.com')->send(new consultancy($data));   
    
    } catch(\Exception $e) {
        dd($e->getMessage());
    }
    return redirect('/reserve-consultant');
            }


}

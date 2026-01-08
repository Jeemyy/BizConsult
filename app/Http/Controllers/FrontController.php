<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\StoreSubscriberMailRequset;
use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Message;
use App\Models\Subscriber;
use App\Models\SubscriberMail;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('fronts.index', get_defined_vars());
    }
    public function about(){
        return view('fronts.about', get_defined_vars());
    }
    public function service(){
        return view('fronts.service', get_defined_vars());
    }
    public function contact(){
        return view('fronts.contact', get_defined_vars());
    }
    public function subscriberMail(StoreSubscriberRequest $request){
        $data = $request->validated();
        Subscriber::create($data);
        return redirect()->back()->with('success', "The Email Is Subscribed Succussfully");
    }
    public function storeMessage(StoreMessageRequest $request){
        $data = $request->validated();
        Message::create($data);
        return to_route('front.index')->with('success', 'The Message Stoer Successfully');
    }
}

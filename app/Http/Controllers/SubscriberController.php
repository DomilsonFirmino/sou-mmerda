<?php

namespace App\Http\Controllers;

use App\Mail\subscribed;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function PHPUnit\Framework\isEmpty;

class SubscriberController extends Controller
{

    public function store(Request $request)
    {
        $validator = validator($request->all(),[
            'email'=>'required|email|max:40',
            'name'=>"required|max:40",
        ]);

        if($validator->fails()){
           return redirect()->to("/"."#newsletter")->withErrors($validator)->withInput();;
        }
        // $request->validate([
        //     'email'=>'required|email|max:40',
        //     'name'=>"required|max:40",
        // ]);

        $ative = Subscriber::where('email',$request->email)->first();

        if($ative){
            return redirect()->to("/"."#newsletter")->with('mesage', 'You have already been subscrived.');
        }

        $subscriber = Subscriber::create([
            'email' => $request->email,
            'name' => $request->name,
            'delete' => md5($request->email.$request->name),
            'hash' => md5($request->email)
        ]);

        Mail::to($subscriber)->queue(new subscribed($subscriber));

        return redirect()->to("/"."#newsletter")->with('mesage', 'You have successfully been subscribed. Please check your email spam folder to verify account.');
    }

    public function verify(string $hash){

        // Subscriber $subscriber

        $subscriber = Subscriber::where('hash', $hash)->firstOrfail();

        $subscriber->update([
            'hash' => null,
            'verified_at' => now()
        ]);


        return redirect()->back()->with('mesage', 'You have being verified');

    }


    public function cancel(string $delete){

        // Subscriber $subscriber

        $subscriber = Subscriber::where('delete', $delete)->firstOrfail();
        $subscriber->delete();

        return redirect()->back()->with('mesage', 'You have unsubscrived');

    }
}

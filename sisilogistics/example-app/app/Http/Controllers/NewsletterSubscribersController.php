<?php

namespace App\Http\Controllers;
use App\Models\EmailMessage;
use App\Models\User;

use App\Models\newsletter_subscribers;
use App\Http\Requests\Storenewsletter_subscribersRequest;
use App\Http\Requests\Updatenewsletter_subscribersRequest;
use Illuminate\Http\Request;
// use GuzzleHttp\Psr7\Request;

class NewsletterSubscribersController extends Controller
{

    // public function newsletterForm(){
        // exampleInputEmail1
        // return view('/newsletter');
    // }

    public function storeEmails(Request $request){
        // dd($request->email);
        // $newsletter_subscribers = new newsletter_subscribers();
        //$newsletter_subscribers->email = $request->input('email');

        // newsletter_subscribers::create(['email'=>$request->email]); 
        // $mail_controller = new EmailController;
        // $subscriber_message = EmailMessage::where('action','NEWSLETTER_SUBSCRIPTION_CUSTOMER')->first();      //row with action,title to be sent to subscriber
        // $admin_message = EmailMessage::where('action','NEWSLETTER_SUBSCRIPTION_ADMIN')->first();

        // if($subscriber_message){
        //     $mail_controller->sendEmail($subscriber_message->title, $subscriber_message->subject, $subscriber_message->body, $request->email);
        // }

        // if($admin_message){
        //     $admin = user::where('email','ansherotimalnado10@gmail.com')->get();
        //     foreach($admin as $admin){
        //         $mail_controller->sendEmail($admin_message->title, $admin_message->subject, $admin_message->body, $request->email, '','Admin');
        //     }
        // }

       // return view('email.success');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storenewsletter_subscribersRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Storenewsletter_subscribersRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\newsletter_subscribers  $newsletter_subscribers
     * @return \Illuminate\Http\Response
     */
    public function show(newsletter_subscribers $newsletter_subscribers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newsletter_subscribers  $newsletter_subscribers
     * @return \Illuminate\Http\Response
     */
    public function edit(newsletter_subscribers $newsletter_subscribers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatenewsletter_subscribersRequest  $request
     * @param  \App\Models\newsletter_subscribers  $newsletter_subscribers
     * @return \Illuminate\Http\Response
     */
    // public function update(Updatenewsletter_subscribersRequest $request, newsletter_subscribers $newsletter_subscribers)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newsletter_subscribers  $newsletter_subscribers
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsletter_subscribers $newsletter_subscribers)
    {
        //
    }
}

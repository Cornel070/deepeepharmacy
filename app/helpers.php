<?php
use App\Plan;
use App\Account;
use App\UsersPlan;
use App\Payment;
use App\Drug;
use App\Order;
use App\Prescription;
use App\Appointment;
use App\Email;

if ( ! function_exists('pageJsonData')){
    function pageJsonData(){


        $jobModalOpen = false;
        if (session('appt_success')){
            $appt_success = true;
        }

        $data = [
            'home_url'      => route('home'),
            'asset_url'     => asset('assets'),
            'csrf_token'    => csrf_token(),
            'appt_success'  => session('appt_success'),
            'newsletter'    => session('newsletter'),
            'contact'       => session('contact'),
            'ordered'       => session('ordered'),
            'cart_add'      => session('cart_add'),
            'paystack_fail' => session('paystack_fail'),
            'ordered_n_paid'=> session('ordered_n_paid'),
            'payment_fail'  => session('payment_fail')
        ];

        $routeLists = \Illuminate\Support\Facades\Route::getRoutes();

        $routes = [];
        foreach ($routeLists as $route){
            $routes[$route->getName()] = $data['home_url'].'/'.$route->uri;
        }
        $data['routes'] = $routes;

        return json_encode($data);
    }
}

function drugsCount()
    {
        return Drug::count();
    }

function ordersCount()
    {
        return Order::count();
    }

function prescsCount()
    {
        return Prescription::count();
    }

function apptsCount()
    {
        return Appointment::count();
    }

function getLatestEmails()
    {
        return Email::latest()->limit(5)->get();
    }

?>
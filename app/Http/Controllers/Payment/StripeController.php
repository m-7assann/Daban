<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\Support;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function create(Checkout $checkout , Cart $carts , Support $support)
    {
        $carts = Cart::all();
        return view('ase.cart.stripePayment.stripePay',compact('carts' , 'checkout' , 'support'));
    }

    public function createStripePayment(Checkout $checkout)
    {
        try {
            $amount = $checkout->items()->sum(function ($item) {
                return $item->price * $item->quantity;
            });
    
            $stripe = new \Stripe\StripeClient(config('services.stripe.secret_key'));
            $paymentIntent = $stripe->paymentIntents->create([
                'currency' => 'usd',
                'amount' => $amount,
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);
    
            // Only return the client secret upon success
            return [
                'clientSecret' => $paymentIntent->client_secret,
            ];
        } catch (\Exception $e) {
            // Handle exceptions and return an error response
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    public function confirm(Request $request , Checkout $checkout){
        dd($request->all());
    }
}

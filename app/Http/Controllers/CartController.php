<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buyer;
use App\Drug;
use App\Order;
use App\OrderItem;
use Paystack;
use App\Payment;

class CartController extends Controller
{
	public function addToCart(Request $request)
	{
	    $product = Drug::find($request->drug_id);
	    $options = $request->except('_token', 'price', 'qty');
	    $qty = $request->qty < 1 ? 1 : $request->qty;

	    \Cart::add(array(
		    'id' => uniqid(),
		    'name' => $product->name,
		    'price' =>$product->price,
		    'quantity' =>$qty,
		    'attributes' => $options
		  ));
	    session()->flash('cart_add',true);
	    return redirect('/know-your-drugs?drug_id='.$request->drug_id);
	}

	public function removeItem(Request $request)
	{
		\Cart::remove($request->id);
		return true;
	}

	public function processOrder(Request $request)
	{
		// dd($request->all());
		//save buyer details first
		$buyer = new Buyer;
		$buyer->name = $request->first_name;
		$buyer->phone = $request->phone;
		$buyer->email = $request->email;
		$buyer->address = $request->address;
		$buyer->save();

		$this->saveOrder($buyer->id, 'On delivery');
		session()->flash('ordered',true);
		return $this->clearCart();
	}

	public function saveOrder($buyer_id, $method)
	{
		$cartItem = \Cart::getContent();
		$total = \Cart::getSubTotal();
		$order = new Order;
		$order->buyer_id = $buyer_id;
		// $order->drug_id = $item->attributes['drug_id'];
		$order->status = 'new';
		$order->payment_method = $method;
		$order->amount = $total;
		$order->save();

		//save items
		foreach ($cartItem as $item) {
			$o_item = new OrderItem;
			$o_item->item_name = $item->name;
			$o_item->item_price = $item->price;
			$o_item->item_qty = $item->quantity;
			$o_item->order_id = $order->id;
			$o_item->save();
		}
		
		return $order;
	}

	public function clearCart()
	{
		\Cart::clear();
		return redirect('/');
	}

	public function allOrders()
	{
		$title = 'Drug Orders';
		$orders = Order::all();
		return view('admin.orders',compact('title','orders'));
	}

	public function confirmOrder($id)
	{
		$order = Order::find($id);
		$order->status = 'Confirmed';
		$order->save();

		session()->flash('success','Order Confirmed');
		return redirect()->back();
	}

	public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
        	session()->flash('paystack_fail',true);
            return redirect()->back();
        }        
    }

    public function handleGatewayCallback()
    {
    	$paymentDetails = Paystack::getPaymentData();
    	// dd($paymentDetails);

    	if ($paymentDetails['data']['status'] !== 'success') {
    		session()->flash('payment_fail',true);
    		return redirect('/');
    	}

        $buyer = new Buyer;
		$buyer->name = $paymentDetails['data']['metadata']['name'];
		$buyer->phone = $paymentDetails['data']['metadata']['phone'];
		$buyer->email = $paymentDetails['data']['metadata']['email'];
		$buyer->address = $paymentDetails['data']['metadata']['address'];
		$buyer->save();

		$order = $this->saveOrder($buyer->id, 'Online pay');
		$this->savePayment($paymentDetails, $order->id);
		session()->flash('ordered_n_paid',true);
		return $this->clearCart();
    }

    public function savePayment(array $paymentDetails, $order_id)
    {
    	$payment = new Payment;
    	$payment->ref_no = $paymentDetails['data']['reference'];
    	$payment->amount = $paymentDetails['data']['amount'];
    	$payment->paid_by = $paymentDetails['data']['metadata']['name'];
    	$payment->order_id = $order_id;
    	$payment->save();
    	return true;
    }

    public function payments()
    {
    	$payments = Payment::all();
    	$title = 'All order payments';
    	return view('admin.payments',compact('title','payments'));
    }
}

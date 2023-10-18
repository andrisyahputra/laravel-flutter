<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Services\Midtrans\CreatePaymentUrlServices;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function order(Request $request)
    {
        $order = Order::create([
            'user_id' => $request->user()->id,
            'seller_id' => $request->seller_id,
            'number' => time(),
            'total_price' => $request->total_price,
            'delivery_address' => $request->delivery_address,
        ]);

        foreach ($request->items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => $item['qty']
            ]);
        }
        // @dd($order->orderItems);


        // pangil service midtrans untuk ambil payment url
        $midtrans = new CreatePaymentUrlServices();
        $paymentUrl =  $midtrans->getPaymentUrl($order->load('user', 'orderItems'));
        // @dd($paymentUrl);
        $order->update([
            'payment_url' => $paymentUrl
        ]);

        return response()->json([
            'data' => $order,
        ]);
    }
}

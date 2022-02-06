<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderDataTest extends Controller
{
    public function get_data()
    {
          $order_id = DB::connection('mysql')->table('wphpm_posts')->pluck('id');
        foreach ($order_id as $order) {
            return $order->ID;
        }
    }

    public function get_customer_id()
    {
        return $transaction = DB::connection('mysql')->table('wphpm_postmeta')->where('meta_key', '_transaction_id')->get();
        $customer_id = DB::connection('mysql')->table('wphpm_postmeta')->where('meta_key', '_customer_user')->get();
    }
}

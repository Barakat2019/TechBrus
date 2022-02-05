<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $orders = DB::connection('mysql')->table('wphpm_posts')->get();
        $orders_meta = DB::connection('mysql')->table('wphpm_postmeta')->get();


        foreach ($orders as $order) {
            DB::connection('mysql2')->table('orders')->insert([
                'id'     => $order->id,
                'customer_id' => $order->id,
                'transaction_method' => $order->id,
                'admin_id' => $order->post_author,
                'parent_id' => $order->post_parent,
                'status' => $order->post_status,
                'refund_type' => 1
            ]);
        }
    }
}

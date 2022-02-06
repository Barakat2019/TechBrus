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
        $order_id = DB::connection('mysql')->table('wphpm_posts')->get();
        $customer_id = DB::connection('mysql')->table('wphpm_postmeta')->where('meta_key', '_customer_user')->get();
        $transaction_id = DB::connection('mysql')->table('wphpm_postmeta')->where('meta_key', '_transaction_id')->get();


        foreach ($order_id as $order) {
            foreach ($customer_id as $customer) {
                foreach ($transaction_id as $trans) {
                    DB::connection('mysql2')->table('orders')->insert([
                        'customer_id' => $customer->meta_value,
                        'created_by' => $order->post_author,
                        'parent_id' => $order->post_parent,
                        'status' => $order->post_status,
                        'transaction_id' => $trans->meta_value,
                        //'transaction_method' =>$trans->,
                        'transaction_type' => 'A',
                        'post_status' => '1',
                        'refund_method' => '1',
                        'refund_type' => 2,
                        'payer_id' => 'tel',
                        'shipping_fee' => 3.2,
                        'cross_border_shipping_fee' => 12.3,
                        'us_domestic_shipping_fee' => 1.2
                    ]);
                    break;
                }
                break;
            }
            break;
        }
    }
}

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
        $paymentMethod = DB::connection('mysql')->table('wphpm_postmeta')->where('meta_key', '_payment_method')->get();

        foreach ($order_id as $order) {
            foreach ($customer_id as $customer) {
                foreach ($transaction_id as $trans) {
                    foreach ($paymentMethod as $payment) {


                        DB::connection('mysql2')->table('orders')->insert([
                            'customer_id' => $customer->meta_value,
                            'created_by' => $order->post_author,
                            'parent_id' => $order->post_parent,
                            'status' => $order->post_status,
                            'transaction_id' => $trans->meta_value,
                            'transaction_method' => $payment->meta_value,
                            'refund_method'

                        ]);
                        break;
                    }
                    break;
                }
                break;
            }
            break;
        }
    }
}

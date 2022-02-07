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
        $refund_method = DB::connection('mysql')->table('wphpm_postmeta')->where('meta_key', '_refund_method')->get();
        $refund_reason = DB::connection('mysql')->table('wphpm_postmeta')->where('meta_key', '_refund_reason')->get();
        $order_shipping = DB::connection('mysql')->table('wphpm_postmeta')->where('meta_key', '_order_shipping')->get();

        $post_date = DB::connection('mysql')->table('wphpm_posts')->pluck('post_date');
        $post_modified = DB::connection('mysql')->table('wphpm_posts')->pluck('post_modified');

        foreach ($order_id as $order) {
            foreach ($customer_id as $customer) {
                foreach ($transaction_id as $trans) {
                    foreach ($paymentMethod as $payment) {
                        foreach ($refund_method as $method) {
                            foreach ($refund_reason as $reason) {
                                foreach ($order_shipping as $ship) {
                                    DB::connection('mysql2')->table('orders')->insert([
                                        'customer_id' => $customer->meta_value,
                                        'created_by' => $order->post_author,
                                        'parent_id' => $order->post_parent,
                                        'status' => $order->post_status,
                                        'transaction_id' => $trans->meta_value,
                                        'transaction_method' => $payment->meta_value,
                                        'refund_method' => $method->meta_value,
                                        'refund_type' => $reason->meta_value,
                                        'payer_id' => 1,
                                        'shipping_fee' => $ship->meta_value,
                                        'cross_border_shipping_fee' => 1.1,
                                        'us_domestic_shipping_fee' => 1.1,
                                        'created_at' => '2020-12-5',
                                        'updated_at' => '2020-01-2'
                                    ]);
                                }

                                break;
                            }
                            break;
                        }
                    }
                    break;
                }
                break;
            }
            break;
        }
    }
}

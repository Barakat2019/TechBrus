<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderLog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logs = DB::connection('mysql')->table('wphpm_comments')->get();

        foreach ($logs as $log) {
            DB::connection('mysql2')->table('order_logs')->insert([
                'id' => $log->comment_ID,
                'order_id' => $log->comment_post_ID,
                'created_by' => $log->comment_author,
                'message' => $log->comment_content,
                'created_at' => $log->comment_date,
                'updated_at' => $log->comment_date
            ]);
        }
    }
}

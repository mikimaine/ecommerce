<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;

class CheckOutAgreementTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('DB_DRIVER') == 'mysql') {
            DB::table('check_out_agreement')->truncate();
        } elseif (env('DB_DRIVER') == 'sqlite') {
            DB::statement('DELETE FROM check_out_agreement');
        } else {
            //For PostgreSQL or anything else
            DB::statement('TRUNCATE TABLE check_out_agreement CASCADE');
        }

        $data = [
            [
                'name'                => 'Sample 1 Check Out Agreement',
                'content'             => 'This is a sample 1 checkout agreement content ',
                'is_active'           => true,
                'created_at'          => Carbon::now(),
                'updated_at'          => Carbon::now(),
            ],
            [
                'name'                => 'Sample 2 Check Out Agreement',
                'content'             => 'This is a sample 2 checkout agreement content',
                'is_active'           => true,
                'created_at'          => Carbon::now(),
                'updated_at'          => Carbon::now(),
            ],
        ];

        DB::table('check_out_agreement')->insert($data);
    }
}

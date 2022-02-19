<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'comment' => 'test1'
        ];
        DB::table('comments')->insert($param);

        $param = [
            'comment' => 'test2'
        ];
        DB::table('comments')->insert($param);

        $param = [
            'comment' => 'test3'
        ];
        DB::table('comments')->insert($param);
    }
}

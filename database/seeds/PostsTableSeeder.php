<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => '命名の心得',
            'body' => '命名はデータを基準に考える',
            'user_id' =>1,
            'department_id' =>1,
            
        ]);
        DB::table('posts')->insert([
            'title' => 'エラー文',
            'body' => '読めるようになれば怖くない',
            'user_id' => 2,
            'department_id' =>2, 
        ]);
    }
}

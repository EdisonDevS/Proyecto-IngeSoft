<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $a=new \App\Administrator;
        $a->name='root';
        $a->email='root@user.com';
        $a->password=bcrypt('socialismo');
        $a->save();
    }
}

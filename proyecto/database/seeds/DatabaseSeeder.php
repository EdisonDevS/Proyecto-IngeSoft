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
        $a->document='0000000000';
        $a->birth_date='1999-11-20';
        $a->email='root@user.com';
        $a->password=bcrypt('socialismo');
        $a->save();
    }
}

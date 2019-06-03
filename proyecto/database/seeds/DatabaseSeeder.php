<?php

use Illuminate\Database\Seeder;
use \App\Administrator;
use \App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $a=new Administrator;
        $a->name='root';
        $a->document='0000000000';
        $a->birth_date='1999-11-20';
        $a->email='root@user.com';
        $a->password=bcrypt('socialismo');
        $a->save();

        $u=new User;
        $u->name='usuario común';
        $u->email='comun@user.com';
        $u->password=bcrypt('socialismo');
        $u->save();
    }
}

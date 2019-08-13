<?php

use Illuminate\Database\Seeder;
use App\Time;
use App\Responsavel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User;

class ResponsavelSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = Time::find(1);
        $user = new User();
        $user->name = 'aston';
        $user->email = 'aston@liga.com';
        $user->password = Hash::make('aston');
        $user->save();

        $resp = new Responsavel();
        $resp->user_id = $user->id;
        $time->createResponsavel($resp);

        $time = Time::find(2);
        $user1 = new User();
        $user1->name = 'ajax';
        $user1->email = 'ajax@liga.com';
        $user1->password = Hash::make('ajax');
        $user1->save();

        $resp = new Responsavel();
        $resp->user_id = $user1->id;
        $time->createResponsavel($resp);

        $time = Time::find(3);
        $user2 = new User();
        $user2->name = 'juventus';
        $user2->email = 'juventus@liga.com';
        $user2->password = Hash::make('juventus');
        $user2->save();

        $resp = new Responsavel();
        $resp->user_id = $user2->id;
        $time->createResponsavel($resp);
    }
}

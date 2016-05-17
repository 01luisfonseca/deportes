<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        DB::table('derechos')->insert(['name'=>'Admininistrador','descripcion'=>'Superadministrador del programa']);
        DB::table('derechos')->insert(['name'=>'Estándar','descripcion'=>'Usuario estandar']);
        DB::table('users')->insert(['name'=>'Luis Fonseca','email'=>'01luisfonseca@gmail.com','password'=>bcrypt('Lf19830405'),'derechos_id'=>1,'estado'=>1]);
        DB::table('infoapps')->insert(['name'=>'App']);

        Model::reguard();
    }
}

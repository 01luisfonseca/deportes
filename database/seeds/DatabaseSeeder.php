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

        Model::reguard();
    }
}

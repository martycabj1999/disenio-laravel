<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin',
            'lastname'=>'Admin',
            'email' => 'admin@gmail.com',//Usuario ADMIN
            'password' => bcrypt ('1234'),
            'dni' => '32493284',
            'is_student' => false,
            'phone' => '12433455',
            'date_birth' => '1983-03-15',
            'street' => 'ndeah',
            'number' => '123',
            'cities_id' => '1'
        ]);

        DB::table('users')->insert([
            'name'=>'Martin',
            'lastname'=>'Tito',
            'email' => 'martin@gmail.com',//Usuario Martin
            'password' => bcrypt ('1234'),
            'dni' => '41801012',
            'is_student' => true,
            'phone' => '1144131539',
            'date_birth' => '1999-03-24',
            'street' => 'arenales',
            'number' => '1570',
            'cities_id' => '1'
        ]);
        
        DB::table('users')->insert([
            'name'=>'Franco',
            'lastname'=>'Raggio',
            'email' => 'franco@gmail.com',//Usuario Frano
            'password' => bcrypt ('1234'),
            'dni' => '40800010',
            'is_student' => true,
            'phone' => '2212435434',
            'date_birth' => '1997-11-12',
            'street' => 'calle 140',
            'number' => '2134',
            'cities_id' => '1'
        ]);
        
        //Materias
        DB::table('matters')->insert([
            'name'=>'Matematicas',
            'description'=>'Matematicas avanzadas de 3°',
            'years_id' => '3',
            'departments_id' => '2',
        ]);

        DB::table('matters')->insert([
            'name'=>'Literatura',
            'description'=>'Lectura de libros',
            'years_id' => '1',
            'departments_id' => '4',
        ]);

        DB::table('matters')->insert([
            'name'=>'Historia',
            'description'=>'Guerra Fria y globalizacion',
            'years_id' => '2',
            'departments_id' => '3',
        ]);

        //Años
        DB::table('years')->insert([
            'year'=>'1',
            'basic_amount'=>'2000',
        ]);

        DB::table('years')->insert([
            'year'=>'2',
            'basic_amount'=>'2500',
        ]);

        DB::table('years')->insert([
            'year'=>'3',
            'basic_amount'=>'3000',
        ]);

        //Divisiones
        DB::table('divisions')->insert([
            'classroom'=>'1',
            'name'=>'A',
            'years_id'=>'1',
        ]);

        DB::table('divisions')->insert([
            'classroom'=>'2',
            'name'=>'B',
            'years_id'=>'2',
        ]);
        
        DB::table('divisions')->insert([
            'classroom'=>'3',
            'name'=>'C',
            'years_id'=>'3',
        ]);
    }
}

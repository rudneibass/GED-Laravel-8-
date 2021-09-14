<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Number;
use App\Models\UsuariosModel;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsuariosModel::create([
            'nome' => Str::random(10),
            'login' => Str::random(10),
            'senha' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'tipo' => '1',
            'ativo' => '1'
        ]);
        UsuariosModel::create([
            'nome' => Str::random(10),
            'login' => Str::random(10),
            'senha' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'tipo' => '1',
            'ativo' => '1'
        ]);
        UsuariosModel::create([
            'nome' => Str::random(10),
            'login' => Str::random(10),
            'senha' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'tipo' => '1',
            'ativo' => '1'
        ]);
        UsuariosModel::create([
            'nome' => Str::random(10),
            'login' => Str::random(10),
            'senha' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'tipo' => '1',
            'ativo' => '1'
        ]);
        UsuariosModel::create([
            'nome' => Str::random(10),
            'login' => Str::random(10),
            'senha' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'tipo' => '1',
            'ativo' => '1'
        ]);
        UsuariosModel::create([
            'nome' => Str::random(10),
            'login' => Str::random(10),
            'senha' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'tipo' => '1',
            'ativo' => '1'
        ]);
        UsuariosModel::create([
            'nome' => Str::random(10),
            'login' => Str::random(10),
            'senha' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'tipo' => '1',
            'ativo' => '1'
        ]);
        UsuariosModel::create([
            'nome' => Str::random(10),
            'login' => Str::random(10),
            'senha' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'tipo' => '1',
            'ativo' => '1'
        ]);
        UsuariosModel::create([
            'nome' => Str::random(10),
            'login' => Str::random(10),
            'senha' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'tipo' => '1',
            'ativo' => '1'
        ]);
        UsuariosModel::create([
            'nome' => Str::random(10),
            'login' => Str::random(10),
            'senha' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'tipo' => '1',
            'ativo' => '1'
        ]);
        UsuariosModel::create([
            'nome' => Str::random(10),
            'login' => Str::random(10),
            'senha' => Hash::make('password'),
            'email' => Str::random(10).'@gmail.com',
            'tipo' => '1',
            'ativo' => '1'
        ]);
    }
}

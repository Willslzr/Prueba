<?php

namespace Database\Seeders;

use App\Models\productos;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class productosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        productos::create([
            'nombre' => 'Tienda Camp3S',
            'descripcion' => 'Tienda para acampar marca topesdu para 2 personas',
            'imagen_referencia' => 'img/tienda2.jpg',
            'oferta' => false,
            'porcentage_oferta' => null,
            'cantidad_stock' => '4',
        ]);

        productos::create([
            'nombre' => 'Tienda V142S',
            'descripcion' => 'Tienda para acampar marca toyota para 3 personas',
            'imagen_referencia' => 'img/tienda3.jpg',
            'oferta' => false,
            'porcentage_oferta' => null,
            'cantidad_stock' => '2',
        ]);

        productos::create([
            'nombre' => 'Tienda Polar',
            'descripcion' => 'Tienda para acampar marca ssd para 2 personas',
            'imagen_referencia' => 'img/tienda4.jpg',
            'oferta' => false,
            'porcentage_oferta' => null,
            'cantidad_stock' => '3',
        ]);

        productos::create([
            'nombre' => 'Tienda acak',
            'descripcion' => 'Tienda para acampar marca acak para 4 personas',
            'imagen_referencia' => 'img/tienda5.jpg',
            'oferta' => false,
            'porcentage_oferta' => null,
            'cantidad_stock' => '4',
        ]);
    }
}

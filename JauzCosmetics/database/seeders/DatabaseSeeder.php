<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $name = ['Kit Maiko','Colorete','Pintalabios','Sombra de ojos','Rimel','Eyeliner'];
        $price = [30.45,10.79,5.95,8.90,25.60,3.50];
        $stock = [10,4,8,3,2,1];
        $description = ['Conjunto de productos Maiko','Colorete con tonalidad oscura','Pintalabios rojo intenso','Para estar modo panda','Dura el día entero','Precisión a la hora de hacerte el rabillo'];
        $category = ['Accesorio','Maquillaje','Maquillaje','Maquillaje','Maquillaje','Maquillaje'];


        $tamaño = sizeof($name);


        for ($i = 0; $i < $tamaño; $i++) {
            DB::table('products')->insert([
                'name' => $name[$i],
                'price' => $price[$i],
                'stock' => $stock[$i],
                'description' => $description[$i],
                'category' => $category[$i]
            ]);
        }


        for ($i = 0; $i < $tamaño; $i++) {

            $images = [($i+1) . '_0.jpg',($i+1) . '_1.jpg',($i+1) . '_2.jpg',($i+1) . '_3.jpg',($i+1) . '_4.jpg',($i+1). '_5.jpg',($i+1) . '_6.jpg'];

            foreach ($images as $image) {
                DB::table('img_products')->insert([
                    'name' => $image,
                    'product_id' => $i + 1
                ]);
            }
        }

        $username = ['adminUser','normalUser','otherUser','juanma','javi','andres'];
        $email = ['adminUser@gmail.com','normalUser@gmail.com','otherUser@gmail.com','juanma@gmail.com','javi@gmail.com','andres@gmail.com'];
        $password = ['1234','1234','1234','1234','1234','1234'];
        $rol = ['admin','user','user','user','user','user'];

        $tamañouser = sizeof($username);


        for ($i = 0; $i < $tamañouser; $i++) {
            DB::table('users')->insert([
                'username' => $username[$i],
                'email' => $email[$i],
                'password' => $password[$i],
                'rol' => $rol[$i],
            ]);
        }
    }
}

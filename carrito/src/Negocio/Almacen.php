<?php

namespace App\Negocio;

class Almacen{

    private $productos = [];

    public function __construct()
    {


        $this->productos = [
            0 => [
                'id' => 1,
                'nombre' => 'Producto 1',
                'descripcion' => 'Lorem ipsum dolor sit amet consectetur,',
                'precio' => 101,
                'imagen' => 'image/producto1.jpg',
            ],

            1 => [
                'id' => 2,
                'nombre' => 'Producto 2',
                'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'precio' => 102,
                'imagen' => 'images/producto2.jpg',
            ],

            2 => [
                'id' => 3,
                'nombre' => 'Producto 3',
                'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'precio' => 103,
                'imagen' => 'images/producto3.jpg',
            ],

            3 => [
                'id' => 4,
                'nombre' => 'Producto 4',
                'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'precio' => 104,
                'imagen' => 'images/producto4.jpg',
            ],

            4 => [
                'id' => 5,
                'nombre' => 'Producto 5',
                'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'precio' => 105,
                'imagen' => 'images/producto5.jpg',
            ],

            5 => [
                'id' => 6,
                'nombre' => 'Producto 6',
                'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'precio' => 106,
                'imagen' => 'images/producto6.jpg',
            ],

            6 => [
                'id' => 7,
                'nombre' => 'Producto 7',
                'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'precio' => 107,
                'imagen' => 'images/producto7.jpg',
            ],

            7 => [
                'id' => 8,
                'nombre' => 'Producto 8',
                'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'precio' => 108,
                'imagen' => 'images/producto8.jpg',
            ],

            8 => [
                'id' => 9,
                'nombre' => 'Producto 9',
                'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'precio' => 109,
                'imagen' => 'images/producto9.jpg',
            ],

            9 => [
                'id' => 10,
                'nombre' => 'Producto 10',
                'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'precio' => 110,
                'imagen' => 'images/producto10.jpg',
            ]


            ];
        

    }


    public function findAll(){
        return $this->productos;
    }

    public function find($id){

        return $this->productos[$id-1];
    }
}

?>
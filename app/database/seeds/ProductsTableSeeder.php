<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductsTableSeeder
 *
 * @author fleischerb
 */
class ProductsTableSeeder extends Seeder{
    public function run(){
        DB::table('products')->insert(array(
            array(
                'prod_name' => 'BDL4670',
                'prod_line' => 'E-line',
                'prod_desc' => 'Nothing you should care about'
            ),
            array(
                'prod_name' => 'BDL4655',
                'prod_line' => 'Videowall',
                'prod_desc' => 'Nothing you should care about'
            ),
            array(
                'prod_name' => 'BDL4220',
                'prod_line' => 'V-line',
                'prod_desc' => 'Nothing you should care about'
            )
        ));          
    }
}

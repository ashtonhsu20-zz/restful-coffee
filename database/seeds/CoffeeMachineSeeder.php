<?php

use \App\Models\CoffeeMachineProductType;
use \App\Models\CoffeeMachine;
use Illuminate\Database\Seeder;

class CoffeeMachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coffeeMachineTypes =
            [
                'COFFEE_MACHINE_SMALL',
                'COFFEE_MACHINE_LARGE',
                'ESPRESSO_MACHINE'
            ];

        foreach ($coffeeMachineTypes as $type) {
            CoffeeMachineProductType::create([CoffeeMachineProductType::DESCRIPTION => $type]);
        }

        $coffeeMachines = [
            [
                'sku' => 'CM001',
                'product_type_id' => 1,
                'water_line' => false,
            ],
            [
                'sku' => 'CM002',
                'product_type_id' => 1,
                'water_line' => false,
            ],
            [
                'sku' => 'CM003',
                'product_type_id' => 1,
                'water_line' => true,
            ],
            [
                'sku' => 'CM101',
                'product_type_id' => 2,
                'water_line' => false,
            ],
            [
                'sku' => 'CM102',
                'product_type_id' => 2,
                'water_line' => true,
            ],
            [
                'sku' => 'CM103',
                'product_type_id' => 2,
                'water_line' => true,
            ],
            [
                'sku' => 'EM001',
                'product_type_id' => 3,
                'water_line' => false,
            ],
            [
                'sku' => 'EM002',
                'product_type_id' => 3,
                'water_line' => false,
            ],
            [
                'sku' => 'EM003',
                'product_type_id' => 3,
                'water_line' => true,
            ],
        ];

        foreach ($coffeeMachines as $machine) {
            CoffeeMachine::create([
                CoffeeMachine::SKU => $machine['sku'],
                CoffeeMachine::PRODUCT_TYPE_ID => $machine['product_type_id'],
                CoffeeMachine::WATER_LINE => $machine['water_line'],
            ]);
        }
    }
}

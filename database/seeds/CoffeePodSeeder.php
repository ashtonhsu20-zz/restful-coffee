<?php

use \App\Models\CoffeePodProductType;
use \App\Models\CoffeePod;
use \App\Models\CoffeePodFlavorType;
use Illuminate\Database\Seeder;

class CoffeePodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coffeePodProductTypes =
            [
                'COFFEE_POD_SMALL',
                'COFFEE_POD_LARGE',
                'ESPRESSO_POD'];

        foreach ($coffeePodProductTypes as $type) {
            CoffeePodProductType::create([CoffeePodProductType::DESCRIPTION => $type]);
        }

        $coffeePodFlavorTypes =
            [
                'COFFEE_FLAVOR_VANILLA',
                'COFFEE_FLAVOR_CARAMEL',
                'COFFEE_FLAVOR_PSL',
                'COFFEE_FLAVOR_MOCHA',
                'COFFEE_FLAVOR_HAZELNUT'
            ];

        foreach ($coffeePodFlavorTypes as $type) {
            CoffeePodFlavorType::create([CoffeePodFlavorType::DESCRIPTION => $type]);
        }

        $coffeePods = [
            [
                'sku' => 'CP001',
                'product_type_id' => 1,
                'flavor_type_id' => 1,
                'size' => 1,
            ],
            [
                'sku' => 'CP003',
                'product_type_id' => 1,
                'flavor_type_id' => 1,
                'size' => 3,
            ],
            [
                'sku' => 'CP011',
                'product_type_id' => 1,
                'flavor_type_id' => 2,
                'size' => 1,
            ],
            [
                'sku' => 'CP013',
                'product_type_id' => 1,
                'flavor_type_id' => 2,
                'size' => 3,
            ],
            [
                'sku' => 'CP021',
                'product_type_id' => 1,
                'flavor_type_id' => 3,
                'size' => 1,
            ],
            [
                'sku' => 'CP023',
                'product_type_id' => 1,
                'flavor_type_id' => 3,
                'size' => 3,
            ],
            [
                'sku' => 'CP031',
                'product_type_id' => 1,
                'flavor_type_id' => 4,
                'size' => 1,
            ],
            [
                'sku' => 'CP033',
                'product_type_id' => 1,
                'flavor_type_id' => 4,
                'size' => 3,
            ],
            [
                'sku' => 'CP041',
                'product_type_id' => 1,
                'flavor_type_id' => 5,
                'size' => 1,
            ],
            [
                'sku' => 'CP043',
                'product_type_id' => 1,
                'flavor_type_id' => 5,
                'size' => 3,
            ],
            [
                'sku' => 'CP101',
                'product_type_id' => 2,
                'flavor_type_id' => 1,
                'size' => 1,
            ],
            [
                'sku' => 'CP103',
                'product_type_id' => 2,
                'flavor_type_id' => 1,
                'size' => 3,
            ],
            [
                'sku' => 'CP111',
                'product_type_id' => 2,
                'flavor_type_id' => 2,
                'size' => 1,
            ],
            [
                'sku' => 'CP113',
                'product_type_id' => 2,
                'flavor_type_id' => 2,
                'size' => 3,
            ],
            [
                'sku' => 'CP121',
                'product_type_id' => 2,
                'flavor_type_id' => 3,
                'size' => 1,
            ],
            [
                'sku' => 'CP123',
                'product_type_id' => 2,
                'flavor_type_id' => 3,
                'size' => 3,
            ],
            [
                'sku' => 'CP131',
                'product_type_id' => 2,
                'flavor_type_id' => 4,
                'size' => 1,
            ],
            [
                'sku' => 'CP133',
                'product_type_id' => 2,
                'flavor_type_id' => 4,
                'size' => 3,
            ],
            [
                'sku' => 'CP141',
                'product_type_id' => 2,
                'flavor_type_id' => 5,
                'size' => 1,
            ],
            [
                'sku' => 'CP143',
                'product_type_id' => 2,
                'flavor_type_id' => 5,
                'size' => 3,
            ],


            [
                'sku' => 'EP003',
                'product_type_id' => 3,
                'flavor_type_id' => 1,
                'size' => 3,
            ],
            [
                'sku' => 'EP005',
                'product_type_id' => 3,
                'flavor_type_id' => 1,
                'size' => 5,
            ],
            [
                'sku' => 'EP007',
                'product_type_id' => 3,
                'flavor_type_id' => 1,
                'size' => 7,
            ],
            [
                'sku' => 'EP013',
                'product_type_id' => 3,
                'flavor_type_id' => 2,
                'size' => 3,
            ],
            [
                'sku' => 'EP015',
                'product_type_id' => 3,
                'flavor_type_id' => 2,
                'size' => 5,
            ],
            [
                'sku' => 'EP017',
                'product_type_id' => 3,
                'flavor_type_id' => 2,
                'size' => 7,
            ],
        ];

        foreach ($coffeePods as $pod) {
            CoffeePod::create([
                CoffeePod::SKU => $pod['sku'],
                CoffeePod::PRODUCT_TYPE_ID => $pod['product_type_id'],
                CoffeePod::COFFEE_FLAVOR_ID => $pod['flavor_type_id'],
                CoffeePod::SIZE => $pod['size']
            ]);
        }
    }
}

<?php

namespace Joy\VoyagerBreadRelatable\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'relatables');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'relatables',
                'display_name_singular' => __('joy-voyager-bread-relatable::seeders.data_types.relatable.singular'),
                'display_name_plural'   => __('joy-voyager-bread-relatable::seeders.data_types.relatable.plural'),
                'icon'                  => 'voyager-bread voyager-bread-relatable voyager-magnet',
                'model_name'            => 'Joy\\VoyagerBreadRelatable\\Models\\Relatable',
                // 'policy_name'           => 'Joy\\VoyagerBreadRelatable\\Policies\\RelatablePolicy',
                // 'controller'            => 'Joy\\VoyagerBreadRelatable\\Http\\Controllers\\VoyagerBreadRelatableController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}

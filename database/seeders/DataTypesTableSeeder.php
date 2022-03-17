<?php

namespace Joy\VoyagerBreadTask\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'tasks');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'tasks',
                'display_name_singular' => __('joy-voyager-bread-task::seeders.data_types.task.singular'),
                'display_name_plural'   => __('joy-voyager-bread-task::seeders.data_types.task.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadTask\\Models\\Task',
                // 'policy_name'           => 'Joy\\VoyagerBreadTask\\Policies\\TaskPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadTask\\Http\\Controllers\\VoyagerBreadTaskController',
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

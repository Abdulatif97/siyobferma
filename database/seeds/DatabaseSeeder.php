<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $permissions = [
        ['name' => 'handbk-list','model' => 'handbk'], ['name' => 'handbk-create','model' => 'handbk'],
        ['name' => 'handbk-edit','model' => 'handbk'], ['name' => 'handbk-delete','model' => 'handbk'],
        [ 'name' => 'measurement-list', 'model' => 'measurement'], [ 'name' => 'measurement-create','model' => 'measurement'],
        [ 'name' => 'measurement-edit', 'model' => 'measurement'], [ 'name' => 'measurement-delete', 'model' => 'measurement'],
        [ 'name' => 'files-list', 'model' => 'files'], ['name' => 'files-create','model' => 'files'],
        [ 'name' => 'files-edit','model' => 'files'],
        ['name' => 'files-delete', 'model' => 'files'],
        [ 'name' => 'normative_docs-list', 'model' => 'normative_docs'], ['name' => 'normative_docs-create','model' => 'normative_docs'],
        [ 'name' => 'normative_docs-edit','model' => 'normative_docs'], ['name' => 'normative_docs-delete', 'model' => 'normative_docs'],
        [ 'name' => 'translations-list', 'model' => 'translations'], ['name' => 'translations-create','model' => 'translations'],
        [ 'name' => 'translations-edit','model' => 'translations'], ['name' => 'translations-delete', 'model' => 'translations'],
        [ 'name' => 'roles-list', 'model' => 'roles'], ['name' => 'roles-create','model' => 'roles'],
        [ 'name' => 'roles-edit','model' => 'roles'], ['name' => 'roles-delete', 'model' => 'roles'],
        [ 'name' => 'p_position-list', 'model' => 'p_position'], ['name' => 'p_position-create','model' => 'p_position'],
        [ 'name' => 'p_position-edit','model' => 'p_position'], ['name' => 'p_position-delete', 'model' => 'p_position'],
        [ 'name' => 'users-list', 'model' => 'users'], ['name' => 'users-create','model' => 'users'],
        [ 'name' => 'users-edit','model' => 'users'], ['name' => 'users-delete', 'model' => 'users'],
        [ 'name' => 'person-list', 'model' => 'person'], ['name' => 'person-create','model' => 'person'],
        [ 'name' => 'person-edit','model' => 'person'], ['name' => 'person-delete', 'model' => 'person'],
        [ 'name' => 'department-list', 'model' => 'department'], ['name' => 'department-create','model' => 'department'],
        [ 'name' => 'department-edit','model' => 'department'], ['name' => 'department-delete', 'model' => 'department'],
        [ 'name' => 'organization-list', 'model' => 'organization'], ['name' => 'organization-create','model' => 'organization'],
        [ 'name' => 'organization-edit','model' => 'organization'], ['name' => 'organization-delete', 'model' => 'organization'],
        [ 'name' => 'item_category-list', 'model' => 'item_category'], ['name' => 'item_category-create','model' => 'item_category'],
        [ 'name' => 'item_category-edit','model' => 'item_category'], ['name' => 'item_category-delete', 'model' => 'item_category'],
        [ 'name' => 'item-list', 'model' => 'item'], ['name' => 'item-create','model' => 'item'],
        [ 'name' => 'item-edit','model' => 'item'], ['name' => 'item-delete', 'model' => 'item'],
        [ 'name' => 'message-list', 'model' => 'message'], ['name' => 'message-create','model' => 'message'],
        [ 'name' => 'message-edit','model' => 'message'], ['name' => 'message-delete', 'model' => 'message'],
        [ 'name' => 'application-list', 'model' => 'application'], ['name' => 'application-create','model' => 'application'],
        [ 'name' => 'application-edit','model' => 'application'], ['name' => 'application-delete', 'model' => 'application'],
        [ 'name' => 'akt-list', 'model' => 'akt'], ['name' => 'akt-create','model' => 'akt'],
        [ 'name' => 'akt-edit','model' => 'akt'], ['name' => 'akt-delete', 'model' => 'akt'],
        [ 'name' => 'disease_category-list', 'model' => 'disease_category'], ['name' => 'disease_category-create','model' => 'disease_category'],
        [ 'name' => 'disease_category-edit','model' => 'disease_category'], ['name' => 'disease_category-delete', 'model' => 'disease_category'],
        [ 'name' => 'disease-list', 'model' => 'disease'], ['name' => 'disease-create','model' => 'disease'],
        [ 'name' => 'disease-edit','model' => 'disease'], ['name' => 'disease-delete', 'model' => 'disease'],
        [ 'name' => 'disease_test_template-list', 'model' => 'disease_test_template'], ['name' => 'disease_test_template-create','model' => 'disease_test_template'],
        [ 'name' => 'disease_test_template-edit','model' => 'disease_test_template'], ['name' => 'disease_test_template-delete', 'model' => 'disease_test_template'],
        [ 'name' => 'sample-list', 'model' => 'sample'], ['name' => 'sample-create','model' => 'sample'],
        [ 'name' => 'sample-edit','model' => 'sample'], ['name' => 'sample-delete', 'model' => 'sample'],
        [ 'name' => 'sample_template_parameter_value-list', 'model' => 'sample_template_parameter_value'], ['name' => 'sample_template_parameter_value-create','model' => 'sample_template_parameter_value'],
        [ 'name' => 'sample_template_parameter_value-edit','model' => 'sample_template_parameter_value'], ['name' => 'sample_template_parameter_value-delete', 'model' => 'sample_template_parameter_value'],
        [ 'name' => 'sample_group-list', 'model' => 'sample_group'], ['name' => 'sample_group-create','model' => 'sample_group'],
        [ 'name' => 'sample_group-edit','model' => 'sample_group'], ['name' => 'sample_group-delete', 'model' => 'sample_group'],
        [ 'name' => 'task-list', 'model' => 'task'], ['name' => 'task-create','model' => 'task'],
        [ 'name' => 'task-edit','model' => 'task'], ['name' => 'task-delete', 'model' => 'task'],
        [ 'name' => 'sample_group_result-list', 'model' => 'sample_group_result'], ['name' => 'sample_group_result-create','model' => 'sample_group_result'],
        [ 'name' => 'sample_group_result-edit','model' => 'sample_group_result'], ['name' => 'sample_group_result-delete', 'model' => 'sample_group_result'],
        [ 'name' => 'akt_write_off-list', 'model' => 'akt_write_off'], ['name' => 'akt_write_off-create','model' => 'akt_write_off'],
        [ 'name' => 'akt_write_off-edit','model' => 'akt_write_off'],[ 'name' => 'akt_write_off-delete', 'model' =>  'akt_write_off']

      ];

      foreach ($permissions as $permission) {
        Permission::create(['name' => $permission['name'], 'model' => $permission['model']]);
      }
    }
}

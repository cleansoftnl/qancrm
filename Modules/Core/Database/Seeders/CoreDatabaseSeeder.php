<?php
namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CoreDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();
        //$this->call(__NAMESPACE__ . '\ConfigTableSeeder');
        //$this->call(__NAMESPACE__ . '\NavTableSeeder');
        //$this->call(__NAMESPACE__ . '\PermissionTableSeeder');
        $this->call(__NAMESPACE__ . '\RoleTableSeeder');
    }
}

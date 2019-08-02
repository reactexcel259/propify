<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
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

//        Schema::disableForeignKeyConstraints();
//        DB::table('templates')->truncate();
//        DB::table('template_categories')->truncate();
//        DB::unprepared(file_get_contents(database_path('sql' . DIRECTORY_SEPARATOR . 'template_and_categories_tables.sql')));
//        Schema::enableForeignKeyConstraints();
        $this->call(TemplateCategoriesTableSeeder::class);
        $this->call(TemplateTableSeeder::class);

        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        //$this->call(AddressesTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(RealEstateTableSeeder::class);

        $this->call(BuildingsTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(TenantsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);

        $this->call(ServiceProvidersTableSeeder::class);
        $this->call(PropertyManagerTableSeeder::class);
        $this->call(ServiceRequestCategoriesTableSeeder::class);
        $this->call(ServiceRequestsTableSeeder::class);

        $this->call(AuditsTableSeeder::class);
    }
}

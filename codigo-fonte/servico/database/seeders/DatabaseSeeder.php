<?php

namespace Database\Seeders;
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
//        // \App\Models\User::factory(10)->create();
//        \App\Models\AssuntosResource::factory(10)
//            ->create();

        try{
            DB::beginTransaction();
            $this->call(BancasSeeder::class);
            $this->call(OrgaosSeeder::class);
            $this->call(AssuntosSeeder::class);
            $this->call(QuestoesSeeder::class);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw $exception;
        }



    }
}

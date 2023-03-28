<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Factory::create();

        $adminRole = Role::create(['name' => 'admin',
                                    'display_name' => "Administration",
                                    'description' => "Administrator" ,
                                    'allowed_route' => 'admin']);

        $supervisorRole = Role::create(['name' => 'supervisor',
                                    'display_name' => "Supervisor",
                                    'description' => "Supervisor" ,
                                    'allowed_route' => 'admin']);

        $customerRole = Role::create(['name' => 'Customer',
                                    'display_name' => "Customer",
                                    'description' => "Customer" ,
                                    'allowed_route' => null]);


        $admin = User::create([
                            'first_name' => 'Master',
                            'last_name' => 'Admin',
                            'email' => 'admin@admin.com',
                            'email_verified_at' => now(),
                            'mobile' => '01092991715',
                            'user_image' => 'avatar.svg',
                            'status' => 1,
                            'password'  => bcrypt('12345678'),
                            'remember_token' => Str::random(10)
        ]);

        $admin->attachRole($adminRole);

        $supervisor = User::create([
            'first_name' => 'Supervisor',
            'last_name' => 'System',
            'email' => 'supervisor@boutique.com',
            'email_verified_at' => now(),
            'mobile' => '01092991714',
            'user_image' => 'avatar.svg',
            'status' => 1,
            'password'  => bcrypt('12345678'),
            'remember_token' => Str::random(10)
        ]);

        $supervisor->attachRole($supervisorRole);

        $customer = User::create([
            'first_name' => 'Ahmad',
            'last_name' => 'Abdelhameed',
            'email' => 'Ahmad@ahmad.com',
            'email_verified_at' => now(),
            'mobile' => '01092991713',
            'user_image' => 'avatar.svg',
            'status' => 1,
            'password'  => bcrypt('12345678'),
            'remember_token' => Str::random(10)
        ]);

        $customer->attachRole($customerRole);


        for ($i=0;$i < 20;$i++){
            $randomCustomer = User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'mobile' => $faker->phoneNumber,
                'user_image' => $faker->image,
                'status' => 1,
                'password'  => bcrypt('12345678'),
                'remember_token' => Str::random(10)
            ]);
            $randomCustomer->attachRole($customerRole);
        }

    }
}

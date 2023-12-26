<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        Job::factory(6)->create();

   

        //       Job::create([
        //     'title'=>"Laravel Senior Developer ",
        //     'company'=>'Acme Corp',
        //     'status'=>'Full time',
        //     'tags'=>'laravel,javascript',
        //     'location'=>'Boston,MA',
        //     'email'=>'email1@email.com',
        //     'website'=>'https://www.acme.com',
        //     'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //     Sapiente, fugiat mollitia? Officia autem dicta animi quos laudantium 
        //     illo iste itaque deleniti accusantium nobis corporis quas ea, fugit
        //      consequatur odit magnam."
        // ]);

        // Job::create([
        //     'title'=>"Full-stack Engineer ",
        //     'company'=>'stark Industries',
        //     'status'=>'part time',
        //     'tags'=>'laravel,backend, api',
        //     'location'=>'New York,NY',
        //     'email'=>'email2@email.com',
        //     'website'=>'https://www.starkindustries.com',
        //     'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //     Sapiente, fugiat mollitia? Officia autem dicta animi quos laudantium 
        //     illo iste itaque deleniti accusantium nobis corporis quas ea, fugit
        //      consequatur odit magnam."
        // ]);




        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

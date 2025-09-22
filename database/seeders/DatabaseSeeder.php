<?php

namespace Database\Seeders;

use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $skillNames = ['HTML', 'CSS', 'JavaScript', 'Laravel', 'React', 'Vue', 'PHP', 'Node.js', 'TailwindCSS', 'MySQL'];
        foreach ($skillNames as $name) {
            Skill::firstOrCreate(['name' => $name]);
        }

        User::factory(10)->create()->each(function($user) {
            $profile = Profile::factory()->create([
                'user_id' => $user->id
            ]);

            $skills = Skill::inRandomOrder()->take(5)->get();
            $profile->skills()->attach($skills->pluck('id'));

            Experience::factory(2)->create([
                'profile_id' => $profile->id,
            ]);

            Portfolio::factory(2)->create([
                'profile_id' => $profile->id,
            ]);

            Product::factory(2)->create([
                'profile_id' => $profile->id,
            ]);
        });

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

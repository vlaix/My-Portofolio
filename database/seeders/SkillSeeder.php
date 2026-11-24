<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'Unity & Unity 3D', 'category' => 'Game Engine', 'icon' => 'unity', 'proficiency' => 95, 'order' => 1],
            ['name' => 'C# Programming', 'category' => 'Programming', 'icon' => 'csharp', 'proficiency' => 92, 'order' => 2],
            ['name' => 'Gameplay & Mechanics Programming', 'category' => 'Core Gameplay', 'icon' => 'gameplay', 'proficiency' => 94, 'order' => 3],
            ['name' => 'Physics Simulation (2D/3D)', 'category' => 'Physics & Logic', 'icon' => 'physics', 'proficiency' => 88, 'order' => 4],
            ['name' => 'Multiplayer & Networking', 'category' => 'Multiplayer', 'icon' => 'network', 'proficiency' => 86, 'order' => 5],
            ['name' => 'Cinemachine & Camera Logic', 'category' => 'Cinematics', 'icon' => 'camera', 'proficiency' => 90, 'order' => 6],
            ['name' => 'Level Design & Balancing', 'category' => 'Game Design', 'icon' => 'level-design', 'proficiency' => 92, 'order' => 7],
            ['name' => 'Project Management', 'category' => 'Production', 'icon' => 'management', 'proficiency' => 90, 'order' => 8],
            ['name' => 'In-Game UI / HUD Systems', 'category' => 'UI & Systems', 'icon' => 'ui', 'proficiency' => 93, 'order' => 9],
            ['name' => 'SFX & Audio Implementation', 'category' => 'Audio', 'icon' => 'audio', 'proficiency' => 87, 'order' => 10],
            ['name' => 'Git & Version Control', 'category' => 'Tools', 'icon' => 'git', 'proficiency' => 91, 'order' => 11],
            ['name' => 'Asset Pipeline & Tilemap 2D/3D', 'category' => 'Production', 'icon' => 'assets', 'proficiency' => 89, 'order' => 12],
        ];

        Skill::truncate();

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}

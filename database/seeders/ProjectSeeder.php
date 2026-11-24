<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'We Got This Bro!',
                'slug' => 'we-got-this-bro',
                'category' => 'Game Development',
                'role_title' => 'Core Gameplay & Mechanics Programmer',
                'summary' => 'A 2-player tactical local co-op game built around the asymmetric synergy of defensive combat (The Archer) and escape construction (The Builder).',
                'description' => "Core Gameplay & Mechanics Programmer for We Got This Bro!, a 2-player tactical local co-op game built around asymmetric team roles (The Archer & The Builder).\n\n• Engineered the dynamic Building & Crafting system for Player 2, enabling real-time construction of escape bridges, climbing ladders, defensive traps, team shields, and arrow ammunition supply.\n• Implemented the Loot & Resource Economy loop, handling resource drops from eliminated enemies and converting them into essential survival and traversal assets.\n• Developed responsive In-Game HUD/UI systems and integrated gameplay SFX triggers to deliver tactile audio-visual player feedback.",
                'description_en' => "Core Gameplay & Mechanics Programmer for We Got This Bro!, a 2-player tactical local co-op game built around asymmetric team roles (The Archer & The Builder).\n\n• Engineered the dynamic Building & Crafting system for Player 2, enabling real-time construction of escape bridges, climbing ladders, defensive traps, team shields, and arrow ammunition supply.\n• Implemented the Loot & Resource Economy loop, handling resource drops from eliminated enemies and converting them into essential survival and traversal assets.\n• Developed responsive In-Game HUD/UI systems and integrated gameplay SFX triggers to deliver tactile audio-visual player feedback.",
                'image' => 'Cover_Game_WeGotThisBro.png',
                'screenshots' => [
                    'assets/We Got This Bro Screenshot/Screenshot 2026-11-23 181535.png',
                    'assets/We Got This Bro Screenshot/Screenshot 2026-11-23 181543.png',
                    'assets/We Got This Bro Screenshot/Screenshot 2026-11-23 181558.png',
                    'assets/We Got This Bro Screenshot/Screenshot 2026-11-23 182026.png',
                ],
                'technologies' => ['Unity', 'C#', 'In-game UI', 'SFX Implementation', 'Git'],
                'live_url' => 'https://corneliuz.itch.io/we-got-this-bro',
                'github_url' => 'https://github.com/vlaix/WPG-4-',
                'featured' => true,
                'order' => 1,
            ],
            [
                'title' => 'PaperBol!',
                'slug' => 'paperbol',
                'category' => 'Game Development',
                'role_title' => 'Mechanic & Gameplay Programmer',
                'summary' => 'A nostalgic 1v1 online multiplayer paper-themed football game featuring paper physics simulation and a dynamic follow camera.',
                'description' => "Mechanic & Gameplay Programmer for PaperBol!, a nostalgic 1v1 online multiplayer paper-themed football game created during a game jam.\n\n• Programmed core Paper Physics & Kicking Mechanics for both players, simulating tactile paper-on-paper interactions and customizable kick types.\n• Engineered a Dynamic Trajectory & Follow Camera system that intelligently tracks active players and smoothly transitions to follow ball trajectories and impact points (golf-style tracking).\n• Developed robust Game Rules & Match Logic, handling goal triggers, out-of-bounds boundaries, and proximity-based possession resolution when the ball exits kicking range.\n• Integrated the In-Game UI/HUD and gameplay sound effects (SFX) to deliver responsive audio-visual feedback during matches.",
                'description_en' => "Mechanic & Gameplay Programmer for PaperBol!, a nostalgic 1v1 online multiplayer paper-themed football game created during a game jam.\n\n• Programmed core Paper Physics & Kicking Mechanics for both players, simulating tactile paper-on-paper interactions and customizable kick types.\n• Engineered a Dynamic Trajectory & Follow Camera system that intelligently tracks active players and smoothly transitions to follow ball trajectories and impact points (golf-style tracking).\n• Developed robust Game Rules & Match Logic, handling goal triggers, out-of-bounds boundaries, and proximity-based possession resolution when the ball exits kicking range.\n• Integrated the In-Game UI/HUD and gameplay sound effects (SFX) to deliver responsive audio-visual feedback during matches.",
                'image' => 'Cover_Game_PaperBol!.png',
                'screenshots' => [
                    'assets/PaperBol Screenshot/Screenshot 2026-11-23 174857.png',
                    'assets/PaperBol Screenshot/WhatsApp Image 2026-11-23 at 9.48.04 PM.jpeg',
                    'assets/PaperBol Screenshot/WhatsApp Image 2026-11-23 at 9.48.09 PM.jpeg',
                    'assets/PaperBol Screenshot/WhatsApp Image 2026-11-23 at 9.48.17 PM.jpeg',
                    'assets/PaperBol Screenshot/WhatsApp Image 2026-11-23 at 9.48.47 PM.jpeg',
                    'assets/PaperBol Screenshot/WhatsApp Image 2026-11-23 at 9.50.04 PM.jpeg',
                    'assets/PaperBol Screenshot/WhatsApp Image 2026-11-23 at 9.50.11 PM.jpeg',
                ],
                'technologies' => ['Unity', 'C#', 'Multiplayer Game Mechanics', 'Physics Simulation', 'Cinemachine / Camera Logic', 'UI & SFX Implementation', 'Git'],
                'live_url' => 'https://corneliuz.itch.io/paperbol',
                'github_url' => 'https://github.com/vlaix/Gemsid-Game-Bola',
                'featured' => true,
                'order' => 2,
            ],
            [
                'title' => 'Chaos Conductor',
                'slug' => 'chaos-conductor',
                'category' => 'Game Design & Production',
                'role_title' => 'Lead Game Designer & Project Manager',
                'summary' => 'A real-time traffic puzzle game centered around managing intersection chaos with color-coded vehicle behaviors.',
                'description' => "Lead Game Designer & Project Manager for Chaos Conductor, a real-time traffic puzzle game focused on finding order in intersection disorder, built under strict game jam constraints.\n\n• Designed core gameplay mechanics, level progression, and the Color-Coded Vehicle System, balancing vehicle behaviors, speed variations, and spawn curves to ensure dynamic, engaging difficulty.\n• Led project management and sprint scoping, establishing milestone deadlines, delegating responsibilities across programming and art roles, and keeping the team on schedule.\n• Supported technical implementation by developing the In-Game UI/HUD system, importing visual assets, and integrating sound effects (SFX) into the engine.",
                'description_en' => "Lead Game Designer & Project Manager for Chaos Conductor, a real-time traffic puzzle game focused on finding order in intersection disorder, built under strict game jam constraints.\n\n• Designed core gameplay mechanics, level progression, and the Color-Coded Vehicle System, balancing vehicle behaviors, speed variations, and spawn curves to ensure dynamic, engaging difficulty.\n• Led project management and sprint scoping, establishing milestone deadlines, delegating responsibilities across programming and art roles, and keeping the team on schedule.\n• Supported technical implementation by developing the In-Game UI/HUD system, importing visual assets, and integrating sound effects (SFX) into the engine.",
                'image' => 'Cover_Game_ChaosConductor.png',
                'screenshots' => [
                    'assets/Chaos Conductor Screenshot/Screenshot 2026-11-23 172630.png',
                    'assets/Chaos Conductor Screenshot/Screenshot 2026-11-23 172640.png',
                    'assets/Chaos Conductor Screenshot/Screenshot 2026-11-23 172700.png',
                    'assets/Chaos Conductor Screenshot/Screenshot 2026-11-23 172710.png',
                ],
                'technologies' => ['Unity', 'C#', 'Game Design & Balancing', 'Project Management', 'UI Implementation', 'SFX Integration', 'Git'],
                'live_url' => 'https://vlaixx.itch.io/chaos-conductor',
                'github_url' => 'https://github.com/vlaix/Compfest-Gamejam',
                'featured' => true,
                'order' => 3,
            ],
            [
                'title' => 'Headless Mikey',
                'slug' => 'headless-mikey',
                'category' => 'Game Design & Production',
                'role_title' => 'Lead Game Designer & Project Manager',
                'summary' => 'A top-down psychological horror puzzle game about a headless chicken escaping an abandoned slaughterhouse with limited visibility mechanics.',
                'description' => "Lead Game Designer & Project Manager for Headless Mikey, a top-down psychological horror puzzle game about a headless chicken escaping an abandoned slaughterhouse.\n\n• Designed narrative lore, level layouts, and core systems—including a Severely Limited Vision mechanic, a Baby Chick Rescue objective required to unlock the exit door, and a Functional Item system granting Mikey tactical buffs to evade hazards.\n• Directed project management workflows, coordinating milestones and deliverables between pixel art and programming roles under tight game jam constraints.\n• Executed technical level design, fine-tuning tilemaps, balancing environmental trap layouts (spikes, bear traps, fire zones), and integrating visual/SFX assets into the engine.",
                'description_en' => "Lead Game Designer & Project Manager for Headless Mikey, a top-down psychological horror puzzle game about a headless chicken escaping an abandoned slaughterhouse.\n\n• Designed narrative lore, level layouts, and core systems—including a Severely Limited Vision mechanic, a Baby Chick Rescue objective required to unlock the exit door, and a Functional Item system granting Mikey tactical buffs to evade hazards.\n• Directed project management workflows, coordinating milestones and deliverables between pixel art and programming roles under tight game jam constraints.\n• Executed technical level design, fine-tuning tilemaps, balancing environmental trap layouts (spikes, bear traps, fire zones), and integrating visual/SFX assets into the engine.",
                'image' => 'Cover_Game_HeadlessMikeyPas.png',
                'screenshots' => [
                    'assets/Headless Mikey Screenshot/Screenshot 2026-11-23 172931.png',
                    'assets/Headless Mikey Screenshot/Screenshot 2026-11-23 172949.png',
                    'assets/Headless Mikey Screenshot/Screenshot 2026-11-23 173004.png',
                    'assets/Headless Mikey Screenshot/Screenshot 2026-11-23 173021.png',
                    'assets/Headless Mikey Screenshot/Screenshot 2026-11-23 173252.png',
                    'assets/Headless Mikey Screenshot/Screenshot 2026-11-23 173323.png',
                ],
                'technologies' => ['Unity', 'C#', 'Level Design & Balancing', 'Horror Puzzle Mechanics', 'Project Management', 'SFX & Asset Implementation', 'Git'],
                'live_url' => 'https://vlaixx.itch.io/headless-mikey',
                'github_url' => 'https://github.com/adelio-sumiya/ChickenJam2',
                'featured' => true,
                'order' => 4,
            ],
            [
                'title' => 'CookStack',
                'slug' => 'cookstack',
                'category' => 'Game Design & Production',
                'role_title' => 'Lead Game Designer, Level Designer & Project Manager',
                'summary' => 'A 3D arcade-survival cooking game set in a dystopian future featuring food-drop interception, sequential burger stacking, and kitchen time-management.',
                'description' => "Lead Game Designer, Level Designer & Project Manager for CookStack, a 3D arcade-survival cooking game set in a dystopian future that blends food-drop interception, ordered burger stacking, and fast-paced kitchen time management.\n\n• Designed narrative lore, level progression, and core gameplay systems—featuring Manual Pipe Spawning & Sequential Ingredient Stacking (requiring exact burger layer order), a Multi-Step Cooking mechanic in higher stages (grilling patties mid-assembly), and color-coded NPC patience indicators (Green, Orange, Red).\n• Executed iterative Level Design & Difficulty Balancing, fine-tuning spawn pacing, timer thresholds, and star-rating score targets across stages.\n• Led project management workflows, delegating deliverables across 3D/2D art and programming roles while enforcing production deadlines.\n• Supported technical implementation by building core In-Game UI/HUD systems, assembling 3D environments, integrating visual/SFX assets, and resolving gameplay bugs.",
                'description_en' => "Lead Game Designer, Level Designer & Project Manager for CookStack, a 3D arcade-survival cooking game set in a dystopian future that blends food-drop interception, ordered burger stacking, and fast-paced kitchen time management.\n\n• Designed narrative lore, level progression, and core gameplay systems—featuring Manual Pipe Spawning & Sequential Ingredient Stacking (requiring exact burger layer order), a Multi-Step Cooking mechanic in higher stages (grilling patties mid-assembly), and color-coded NPC patience indicators (Green, Orange, Red).\n• Executed iterative Level Design & Difficulty Balancing, fine-tuning spawn pacing, timer thresholds, and star-rating score targets across stages.\n• Led project management workflows, delegating deliverables across 3D/2D art and programming roles while enforcing production deadlines.\n• Supported technical implementation by building core In-Game UI/HUD systems, assembling 3D environments, integrating visual/SFX assets, and resolving gameplay bugs.",
                'image' => 'Cover_Game_CookStack.png',
                'screenshots' => [
                    'assets/CookStack Screenshot/Screenshot 2026-11-23 175059.png',
                    'assets/CookStack Screenshot/Screenshot 2026-11-23 175105.png',
                    'assets/CookStack Screenshot/Screenshot 2026-11-23 175114.png',
                    'assets/CookStack Screenshot/Screenshot 2026-11-23 175140.png',
                    'assets/CookStack Screenshot/Screenshot 2026-11-23 175208.png',
                ],
                'technologies' => ['Unity 3D', 'C#', 'Game & Level Design', 'Game Balancing', 'Project Management', 'UI Implementation', 'SFX & Asset Integration', 'Git'],
                'live_url' => 'https://vlaixx.itch.io/cookstack',
                'github_url' => 'https://github.com/napoiku/Game-Design-3D',
                'featured' => true,
                'order' => 5,
            ],
        ];

        // Clean existing projects to ensure clean new structure
        Project::truncate();

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}

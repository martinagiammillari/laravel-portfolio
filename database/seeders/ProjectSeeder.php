<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'E-commerce Platform',
                'client' => 'TechShop S.r.l.',
                'period' => 'Gennaio 2024 - Aprile 2024',
                'summary' => 'Una piattaforma e-commerce completa con gestione pagamenti e catalogo prodotti.',
                'description' => 'Sviluppo di un backend robusto in Laravel con integrazione Stripe per i pagamenti e un sistema di gestione magazzino in tempo reale.',
                'tech_stack' => 'Laravel, MySQL, Stripe API, Tailwind CSS',
                'github_link' => 'https://github.com/username/ecommerce-project',
                'live_demo' => 'https://demo-ecommerce.example.com',
            ],
            [
                'name' => 'Gestione Task Aziendali',
                'client' => null, // Progetto Personale
                'period' => 'Maggio 2024',
                'summary' => 'Applicazione web per l’organizzazione del lavoro in team basata su bacheche Kanban.',
                'description' => 'Un clone di Trello semplificato per uso interno, con focus su performance e semplicità di interfaccia.',
                'tech_stack' => 'Laravel, Livewire, Alpine.js, PostgreSQL',
                'github_link' => 'https://github.com/username/task-manager',
                'live_demo' => null,
            ],
            [
                'name' => 'Blog Engine Custom',
                'client' => 'Studio Creativo XYZ',
                'period' => 'Giugno 2024 - Luglio 2024',
                'summary' => 'Sistema di gestione contenuti (CMS) ottimizzato per la SEO e velocità di caricamento.',
                'description' => 'Un motore per blog leggero che include un editor Markdown e un sistema di tagging avanzato per gli articoli.',
                'tech_stack' => 'Laravel, Blade, Spatie Medialibrary, Redis',
                'github_link' => 'https://github.com/username/blog-engine',
                'live_demo' => 'https://blog-demo.example.com',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
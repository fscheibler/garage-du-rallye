<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'Comment bien entretenir votre véhicule en hiver',
                'slug' => 'comment-bien-entretenir-votre-vehicule-en-hiver',
                'excerpt' => 'L\'hiver peut être rude pour votre véhicule. Découvrez nos conseils pour préparer votre voiture aux conditions hivernales.',
                'content' => '<h2>Préparation hivernale de votre véhicule</h2>
                <p>L\'hiver approche et il est temps de préparer votre véhicule pour affronter les conditions difficiles. Voici nos conseils d\'experts pour un entretien optimal.</p>
                
                <h3>Vérification des pneus</h3>
                <p>Les pneus sont votre seul contact avec la route. Assurez-vous qu\'ils sont en bon état et adaptés aux conditions hivernales.</p>
                
                <h3>Contrôle de la batterie</h3>
                <p>Le froid peut réduire considérablement les performances de votre batterie. Un contrôle préventif peut vous éviter bien des désagréments.</p>
                
                <h3>Liquides et huiles</h3>
                <p>Vérifiez tous les niveaux : huile moteur, liquide de refroidissement, lave-glace antigel.</p>',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(5),
                'meta_title' => 'Entretien véhicule hiver - Conseils garage',
                'meta_description' => 'Conseils d\'experts pour bien entretenir votre véhicule en hiver. Pneus, batterie, liquides - tout ce qu\'il faut savoir.',
                'featured_image' => 'public/images/home/car_snow.jpg',
            ],
            [
                'title' => 'Les signes qui indiquent qu\'il faut changer vos freins',
                'slug' => 'les-signes-qui-indiquent-quil-faut-changer-vos-freins',
                'excerpt' => 'Votre sécurité dépend de l\'état de vos freins. Apprenez à reconnaître les signes d\'usure pour rouler en toute sérénité.',
                'content' => '<h2>L\'importance du système de freinage</h2>
                <p>Le système de freinage est l\'un des éléments les plus critiques de votre véhicule. Il est essentiel de savoir reconnaître les signes d\'usure.</p>
                
                <h3>Bruits suspects</h3>
                <p>Des grincements ou des couinements lors du freinage peuvent indiquer une usure des plaquettes.</p>
                
                <h3>Vibrations dans la pédale</h3>
                <p>Si vous ressentez des vibrations dans la pédale de frein, cela peut signaler un problème avec les disques.</p>
                
                <h3>Distance de freinage allongée</h3>
                <p>Une distance de freinage qui s\'allonge est un signe d\'alarme qu\'il ne faut pas ignorer.</p>',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(12),
                'meta_title' => 'Quand changer ses freins - Signes d\'usure',
                'meta_description' => 'Découvrez les signes qui indiquent qu\'il est temps de changer vos freins. Conseils sécurité automobile.',
                'featured_image' => 'public/images/home/brakes.jpg',
            ],
            [
                'title' => 'Pourquoi faire réviser sa voiture régulièrement',
                'slug' => 'pourquoi-faire-reviser-sa-voiture-regulierement',
                'excerpt' => 'Une révision régulière permet de maintenir votre véhicule en parfait état et d\'éviter les pannes coûteuses.',
                'content' => '<h2>Les avantages d\'une révision régulière</h2>
                <p>Faire réviser sa voiture régulièrement n\'est pas seulement une obligation, c\'est un investissement dans la durabilité de votre véhicule.</p>
                
                <h3>Prévention des pannes</h3>
                <p>Une révision permet de détecter les problèmes avant qu\'ils ne deviennent critiques et coûteux.</p>
                
                <h3>Maintien de la garantie</h3>
                <p>Respecter les intervalles de révision est souvent nécessaire pour maintenir la garantie constructeur.</p>
                
                <h3>Économies à long terme</h3>
                <p>Un entretien régulier coûte moins cher que les réparations d\'urgence.</p>
                
                <h3>Sécurité routière</h3>
                <p>Un véhicule bien entretenu est un véhicule sûr pour vous et les autres usagers de la route.</p>',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(20),
                'meta_title' => 'Révision voiture régulière - Importance entretien',
                'meta_description' => 'Découvrez pourquoi il est important de faire réviser sa voiture régulièrement. Avantages et conseils.',
                'featured_image' => 'public/images/home/revision.png',
            ],
            // Articles supplémentaires
            [
                'title' => 'Astuces pour économiser du carburant au quotidien',
                'slug' => 'astuces-pour-economiser-du-carburant-au-quotidien',
                'excerpt' => 'Adoptez de bons réflexes de conduite et d’entretien pour réduire votre consommation.',
                'content' => '<h2>Réduire sa consommation</h2>
                <p>Une conduite souple, une pression de pneus adaptée et un entretien régulier permettent de diminuer sensiblement la consommation.</p>
                <h3>Pression des pneus</h3>
                <p>Des pneus correctement gonflés réduisent la résistance au roulement.</p>
                <h3>Vidanges et filtres</h3>
                <p>Des filtres propres et une huile adaptée optimisent les performances du moteur.</p>',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(2),
                'meta_title' => 'Économiser du carburant - Conseils de conduite',
                'meta_description' => 'Réduisez votre consommation avec des conseils simples de conduite et d’entretien.',
                'featured_image' => 'public/images/home/car_snow.jpg',
            ],
            [
                'title' => 'Freinage: 5 contrôles rapides à faire soi-même',
                'slug' => 'freinage-5-controles-rapides-a-faire-soi-meme',
                'excerpt' => 'Quelques vérifications simples pour garder un freinage efficace et sécurisant.',
                'content' => '<h2>Vérifications essentielles</h2>
                <p>Vérifiez l’épaisseur des plaquettes, l’état des disques et le niveau du liquide de frein.</p>
                <h3>Essai routier</h3>
                <p>Un test à faible vitesse permet de détecter d’éventuelles vibrations ou bruits.</p>',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(8),
                'meta_title' => 'Contrôles freinage - Sécurité',
                'meta_description' => '5 contrôles simples pour assurer un freinage performant et sûr.',
                'featured_image' => 'public/images/home/brakes.jpg',
            ],
            [
                'title' => 'Révision: que contient un entretien complet ?',
                'slug' => 'revision-que-contient-un-entretien-complet',
                'excerpt' => 'Le point sur les opérations réalisées lors d’une révision complète de votre véhicule.',
                'content' => '<h2>Programme d’entretien</h2>
                <p>La révision inclut le remplacement des filtres, la vidange, et de nombreux points de contrôle sécurité.</p>
                <h3>Plan constructeur</h3>
                <p>Respecter le plan du constructeur garantit fiabilité et valeur de revente.</p>',
                'is_published' => true,
                'published_at' => Carbon::now()->subDays(15),
                'meta_title' => 'Révision complète - Guide',
                'meta_description' => 'Découvrez les opérations incluses dans une révision complète selon le plan constructeur.',
                'featured_image' => 'public/images/home/revision.png',
            ],
        ];

        foreach ($blogs as $blogData) {
            Blog::create($blogData);
        }
    }
}

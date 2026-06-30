<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Application;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Application::insert([

            [
                'image' => 'whatsapp.png',
                'name' => 'WhatsApp',
                'developer' => 'Meta',
                'version' => '2.25',
                'description' => 'A messaging application for chatting, voice calls, and video calls.',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'image' => 'spotify.png',
                'name' => 'Spotify',
                'developer' => 'Spotify AB',
                'version' => '9.0',
                'description' => 'Listen to millions of songs and podcasts anytime.',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'image' => 'canva.png',
                'name' => 'Canva',
                'developer' => 'Canva Pty Ltd',
                'version' => '2.1',
                'description' => 'Create beautiful presentations, posters, and social media designs.',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'image' => 'instagram.png',
                'name' => 'Instagram',
                'developer' => 'Meta Platforms',
                'version' => '389.0',
                'description' => 'Share photos, videos, reels, and stories with people around the world.',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'image' => 'netflix.png',
                'name' => 'Netflix',
                'developer' => 'Netflix Inc.',
                'version' => '9.18',
                'description' => 'Watch movies, TV shows, documentaries, and exclusive originals.',
                'created_at' => now(),
                'updated_at' => now()
            ],

            [
                'image' => 'capcut.png',
                'name' => 'CapCut',
                'developer' => 'ByteDance',
                'version' => '14.2',
                'description' => 'Edit videos easily using powerful editing tools and templates.',
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);
    }
}
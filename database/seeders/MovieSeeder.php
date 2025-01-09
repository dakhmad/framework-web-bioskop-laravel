<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Genre;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil semua genre
        $genres = Genre::all();

        // Pastikan tabel genres tidak kosong
        if ($genres->isEmpty()) {
            $this->command->error('Tabel genres kosong. Jalankan GenreSeeder terlebih dahulu.');
            return;
        }

        $movies = [
            [
                'title' => 'The Matrix',
                'synopsis' => 'A hacker discovers the world is a simulation.',
                'poster' => 'https://example.com/matrix.jpg',
                'year' => 1999,
                'available' => true,
            ],
            [
                'title' => 'Inception',
                'synopsis' => 'A thief invades dreams to steal secrets.',
                'poster' => 'https://example.com/inception.jpg',
                'year' => 2010,
                'available' => true,
            ],
            [
                'title' => 'Interstellar',
                'synopsis' => 'A team of astronauts travels through a wormhole.',
                'poster' => 'https://example.com/interstellar.jpg',
                'year' => 2014,
                'available' => true,
            ],
            [
                'title' => 'The Dark Knight',
                'synopsis' => 'Batman faces the Joker in Gotham City.',
                'poster' => 'https://example.com/darkknight.jpg',
                'year' => 2008,
                'available' => true,
            ],
            [
                'title' => 'Avatar',
                'synopsis' => 'A marine on an alien planet gets caught in a conflict.',
                'poster' => 'https://example.com/avatar.jpg',
                'year' => 2009,
                'available' => true,
            ],
            [
                'title' => 'Titanic',
                'synopsis' => 'A romance blooms aboard the ill-fated RMS Titanic.',
                'poster' => 'https://example.com/titanic.jpg',
                'year' => 1997,
                'available' => true,
            ],
            [
                'title' => 'Gladiator',
                'synopsis' => 'A betrayed Roman general seeks revenge.',
                'poster' => 'https://example.com/gladiator.jpg',
                'year' => 2000,
                'available' => true,
            ],
            [
                'title' => 'The Shawshank Redemption',
                'synopsis' => 'Two imprisoned men form a lifelong bond.',
                'poster' => 'https://example.com/shawshank.jpg',
                'year' => 1994,
                'available' => true,
            ],
            [
                'title' => 'Forrest Gump',
                'synopsis' => 'A man with a kind heart witnesses key moments in history.',
                'poster' => 'https://example.com/forrestgump.jpg',
                'year' => 1994,
                'available' => true,
            ],
            [
                'title' => 'The Lion King',
                'synopsis' => 'A lion cub learns the responsibilities of leadership.',
                'poster' => 'https://example.com/lionking.jpg',
                'year' => 1994,
                'available' => true,
            ],
        ];        

        foreach ($movies as $movie) {
            Movie::create(array_merge($movie, [
                'genre_id' => $genres->random()->id, // Pilih genre_id valid
                'created_at' => now(),
            ]));
        }
    }
}

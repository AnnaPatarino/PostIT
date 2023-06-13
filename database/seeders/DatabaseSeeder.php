<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->categories();
        $this->users();
        // $this->articles();

    }

    private function articles()
    {
        Article::create([
            'title' => 'Iphone 12',
            'price' => 750,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In cursus.',
            'category_id' => 6,
            'user_id' => 1,
            'is_accepted' => true,
          
        ]);
        Article::create([
            'title' => 'Pantaloni Lewis',
            'price' => 50,
            'description' => 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Article::create([
            'title' => 'Lego SW 75171',
            'price' => 39,
            'description' => 'Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'category_id' => 11,
            'user_id' => 2,
            'is_accepted' => true,
        ]);
        Article::create([
            'title' => 'Monopattino',
            'price' => 150,
            'description' => 'Irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.',
            'category_id' => 4,
            'user_id' => 1
        ]);
        Article::create([
            'title' => 'Il Signore degli Anelli',
            'price' => 38,
            'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.',
            'category_id' => 8,
            'user_id' => 2,
            'is_accepted' => true,
        ]);
        Article::create([
            'title' => 'Vinile ABBA',
            'price' => 19,
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.',
            'category_id' => 2,
            'user_id' => 2,
            'is_accepted' => true,
        ]);
    }

    private function categories()
    {
        Category::create(['nameEN'=> 'Clothes', 'nameES' => 'Ropa','nameIT' => 'Abbigliamento']);
        Category::create(['nameEN'=> 'Music', 'nameES' => 'Mùsica','nameIT' => 'Musica']);
        Category::create(['nameEN'=> 'Forniture', 'nameES' => 'Muebles','nameIT' => 'Arredamento']);
        Category::create(['nameEN'=> 'Vehicles', 'nameES' => 'Vehìculos','nameIT' => 'Veicoli']);
        Category::create(['nameEN'=> 'Sports', 'nameES' => 'Deportes','nameIT' => 'Sport']);
        Category::create(['nameEN'=> 'Electronics', 'nameES' => 'Electrònica','nameIT' => 'Elettronica']);
        Category::create(['nameEN'=> 'Appliances', 'nameES' => 'Eletrodomèsticos','nameIT' => 'Elettrodomestici']);
        Category::create(['nameEN'=> 'Books', 'nameES' => 'Libros','nameIT' => 'Libri']);
        Category::create(['nameEN'=> 'Videogames', 'nameES' => 'Videojuegos','nameIT' => 'Videogiochi']);
        Category::create(['nameEN'=> 'Comics', 'nameES' => 'Còmics','nameIT' => 'Fumetti']);
        Category::create(['nameEN'=> 'Toys', 'nameES' => 'Juguetes','nameIT' => 'Giocattoli']);
    }

    private function users()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.it',
            'password' => Hash::make('123456789'),
            'is_revisor' => true,
        ]);
        User::create([
            'name' => 'Pino',
            'email' => 'user1@email.it',
            'password' => Hash::make('123456789'),
        ]);
        User::create([
            'name' => 'Linda',
            'email' => 'user2@email.it',
            'password' => Hash::make('123456789'), 
        ]);
    }
}

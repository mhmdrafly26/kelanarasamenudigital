<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nonaktifkan foreign key checks untuk melakukan truncate yang bersih
        Schema::disableForeignKeyConstraints();
        Food::truncate();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        // 1. Local Heavy Meals (Makanan Berat Lokal)
        $localFood = Category::create(['name' => 'Espresso & Coffee']);
        
        $localFood->foods()->create([
            'name' => 'Kelana Rasa Butterscoth',
            'description' => 'Kelana Rasa Butterscotch adalah minuman dengan perpaduan rasa butterscotch yang manis dan creamy, dipadukan susu segar sehingga menghasilkan tekstur lembut dan rasa yang seimbang. Cocok dinikmati saat santai maupun sebagai teman beraktivitas sepanjang hari.',
            'price' => 25000,
            'is_available' => true,
            'image' => 'menu/baterskut.png',
            'options' => ['local_food']
        ]);

        $localFood->foods()->create([
            'name' => 'Kelana Rasa Lemon Coffe',
            'description' => 'Kelana Rasa Lemon Coffee adalah perpaduan espresso dengan sentuhan lemon yang segar, menghadirkan cita rasa unik antara pahit kopi, asam citrus, dan sedikit manis. Cocok buat yang suka kopi dengan rasa ringan dan menyegarkan.',
            'price' => 25000,
            'is_available' => true,
            'image' => 'menu/lemon.png',
            'options' => ['local_food']
        ]);

        $localFood->foods()->create([
            'name' => 'Kelana Rasa Almond Coffe',
            'description' => 'Kelana Rasa Almond Coffee adalah perpaduan espresso dan susu dengan sentuhan almond yang lembut dan harum. Menghasilkan rasa kopi yang creamy, sedikit nutty, dan seimbang, cocok dinikmati kapan saja untuk menemani aktivitas atau waktu santai.',
            'price' => 25000,
            'is_available' => true,
            'image' => 'menu/almon.png',
            'options' => ['local_food']
        ]);

        // 2. Espresso & Coffee
        $coffee = Category::create(['name' => 'Non Coffe']);
        
        $coffee->foods()->create([
            'name' => 'Kelana Rasa Matcha Latte',
            'description' => 'Kelana Rasa Matcha Latte menghadirkan perpaduan bubuk matcha berkualitas dan susu segar dengan tekstur yang lembut. Rasanya creamy, sedikit earthy, dan manis yang pas, cocok dinikmati saat ingin bersantai maupun menemani aktivitas sehari-hari.',
            'price' => 25000,
            'is_available' => true,
            'image' => 'menu/matcha.png',
            'options' => ['drink']
        ]);

        $coffee->foods()->create([
            'name' => 'Kelana Rasa Lemon Tea',
            'description' => 'Kelana Rasa Lemon Tea adalah perpaduan teh pilihan dengan kesegaran lemon yang menghasilkan cita rasa ringan, segar, dan sedikit asam yang menyenangkan. Cocok dinikmati dingin untuk menemani aktivitas atau melepas dahaga kapan saja.',
            'price' => 18000,
            'is_available' => true,
            'image' => 'menu/lemontea.png',
            'options' => ['drink']
        ]);

        $coffee->foods()->create([
            'name' => 'Kelana Rasa Strawberry Milk',
            'description' => 'Kelana Rasa Strawberry Milk memadukan susu segar dengan manisnya stroberi, menghasilkan minuman yang creamy, lembut, dan menyegarkan. Cocok dinikmati kapan saja sebagai teman bersantai maupun menemani aktivitas sehari-hari.',
            'price' => 18000,
            'is_available' => true,
            'image' => 'menu/stoberi.png',
            'options' => ['drink']
        ]);

        $coffee->foods()->create([
            'name' => 'Kelana Rasa Leccy Tea',
            'description' => 'Espresso arabika disiram ke atas jus alpukat mentega segar yang kental, disajikan dengan es krim vanilla premium di atasnya.',
            'price' => 18000,
            'is_available' => true,
            'image' => 'menu/leci.png',
            'options' => ['drink']
        ]);

        // 3. Non-Coffee & Tea
        $nonCoffee = Category::create(['name' => 'Makanan Ringan/Cemilan']);

        $nonCoffee->foods()->create([
            'name' => 'Kelana Rasa Cireng Kuah Keju',
            'description' => 'Kelana Rasa Cireng Kuah Keju menghadirkan cireng yang kenyal di bagian dalam dan renyah di luar, disajikan dengan kuah keju yang gurih, creamy, dan kaya rasa. Cocok dinikmati hangat sebagai camilan yang mengenyangkan dan bikin nagih.',
            'price' => 16000,
            'is_available' => true,
            'image' => 'menu/cireng.png',
            'options' => ['drink']
        ]);

        $nonCoffee->foods()->create([
            'name' => 'Kelana Rasa Dimsum Keju Lumer',
            'description' => 'Kelana Rasa Dimsum Keju Lumer adalah dimsum lembut dengan isian gurih yang disajikan bersama lelehan keju creamy. Perpaduan tekstur yang lembut dan rasa keju yang kaya membuatnya cocok dinikmati sebagai camilan maupun teman bersantai.',
            'price' => 30000,
            'is_available' => true,
            'image' => 'menu/lumer.png',
            'options' => ['drink']
        ]);

        // 4. Ice Cream & Dessert (Es Krim & Pencuci Mulut)
        $iceCreamCat = Category::create(['name' => 'Varian Mojito']);

        $iceCreamCat->foods()->create([
            'name' => 'Kelana Rasa Mojito Leccy',
            'description' => 'Kelana Rasa Mojito Leccy adalah minuman segar dengan perpaduan rasa leci, mint, dan soda yang memberikan sensasi manis, dingin, dan menyegarkan di setiap tegukan. Cocok dinikmati saat cuaca panas atau sebagai pelepas dahaga kapan saja.',
            'price' => 18000,
            'is_available' => true,
            'image' => 'menu/mojitolec.png',
            'options' => ['icecream']
        ]);

        $iceCreamCat->foods()->create([
            'name' => 'Kelana Rasa Mojito Strawberry',
            'description' => 'Kelana Rasa Mojito Strawberry adalah minuman segar dengan perpaduan stroberi, mint, dan soda yang menghasilkan rasa manis, sedikit asam, dan menyegarkan. Cocok dinikmati dingin untuk menemani aktivitas atau melepas dahaga kapan saja.',
            'price' => 18000,
            'is_available' => true,
            'image' => 'menu/mojitosto.png',
            'options' => ['icecream']
        ]);

        $iceCreamCat->foods()->create([
            'name' => 'Kelana Rasa Mojito Lemon',
            'description' => 'Kelana Rasa Mojito Lemon adalah minuman menyegarkan dengan perpaduan lemon, daun mint, dan soda yang menghadirkan sensasi citrus yang segar di setiap tegukan. Cocok dinikmati dingin sebagai pelepas dahaga atau teman bersantai.',
            'price' => 18000,
            'is_available' => true,
            'image' => 'menu/mojitolem.png',
            'options' => ['icecream']
        ]);

        // 5. Pastries & Bakery
        $bakery = Category::create(['name' => 'Varian Risol']);

        $bakery->foods()->create([
            'name' => 'Kelana Rasa Risol Coklat',
            'description' => 'Kelana Rasa Risol Coklat adalah camilan dengan kulit risol yang renyah di luar dan isian cokelat yang lumer di dalam. Perpaduan tekstur yang crispy dan rasa manis cokelat membuatnya cocok dinikmati sebagai teman santai maupun camilan kapan saja.',
            'price' => 25000,
            'is_available' => true,
            'image' => 'menu/risolcok.png',
            'options' => []
        ]);

        $bakery->foods()->create([
            'name' => 'Kelana Rasa Risol Mayones',
            'description' => 'Kelana Rasa Risol Mayo adalah camilan dengan kulit risol yang renyah, berisi perpaduan smoked beef, telur, dan mayones yang creamy. Gurih, lembut, dan kaya rasa, cocok dinikmati sebagai camilan maupun teman bersantai kapan saja.',
            'price' => 29000,
            'is_available' => true,
            'image' => 'menu/risolmay.png',
            'options' => []
        ]);
                $bakery->foods()->create([
            'name' => 'Kelana Rasa Risol Matcha',
            'description' => 'Kelana Rasa Risol Matcha adalah camilan dengan kulit risol yang renyah dan isian krim matcha yang lembut. Perpaduan rasa manis yang pas dengan aroma khas matcha menciptakan sensasi unik, cocok dinikmati sebagai teman santai atau camilan kapan saja.',
            'price' => 29000,
            'is_available' => true,
            'image' => 'menu/risolmat.png',
            'options' => []
        ]);

        // 6. Snacks & Sides
        $snacks = Category::create(['name' => 'Snacks & Sides']);

        $snacks->foods()->create([
            'name' => 'Bilabola Club Sandwich',
            'description' => 'Roti panggang triple-decker dengan isian dada ayam panggang, beef bacon renyah, telur mata sapi, keju cheddar, dan saus spesial.',
            'price' => 42000,
            'is_available' => true,
            'image' => 'menu/club_sandwich.png',
            'options' => []
        ]);

        $snacks->foods()->create([
            'name' => 'Truffle Fries',
            'description' => 'Kentang goreng renyah potongan tebal yang dibaluri minyak truffle aromatik, taburan keju parmesan, dan daun rosemary.',
            'price' => 28000,
            'is_available' => true,
            'image' => 'menu/truffle_fries.png',
            'options' => []
        ]);
    }
}
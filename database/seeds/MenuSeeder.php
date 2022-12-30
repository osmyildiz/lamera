<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'name' => "La Mela",
            'category_id' => 1,
            'description'=>"sourdough toast, grilled halloumi, two fried free-range eggs, avocado & hummus dip, served with a tomato, onion, parsley, sumac salad",
            'price'=>"10.50",
            'is_active'=>1,
            'priority'=>1,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Rosti",
            'category_id' => 1,
            'description'=>"roasted beetroot, sweet potato and crispy kale on a sourdough, poached egg, smashed avocado, pea shoots",
            'price'=>"11.00",
            'is_active'=>1,
            'priority'=>2,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Full English Breakfast",
            'category_id' => 1,
            'description'=>"eggs how you like ‘em, sourdough toast, grilled sausage & smoked bacon, roasted tomato & portobello mushroom, and bloody mary baked beans",
            'price'=>"12.00",
            'is_active'=>1,
            'priority'=>3,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Turkish Egg",
            'category_id' => 1,
            'description'=>"two poached free-range eggs, mint garlic yoghourt, chilli oil, roasted vegetables on focaccia",
            'price'=>"10.50",
            'is_active'=>1,
            'priority'=>4,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Herbivor",
            'category_id' => 1,
            'description'=>"eggs how you like ‘em, sourdough toast, grilled halloumi, smashed avocado, roasted tomato & portobello mushroom, and bloody mary baked beans",
            'price'=>"10.50",
            'is_active'=>1,
            'priority'=>5,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Forager",
            'category_id' => 1,
            'description'=>"sourdough toast, avocado & hummus dip, roasted tomato & portobello mushroom, bloody mary baked beans served with a tomato, onion, parsley, sumac salad",
            'price'=>"10.50",
            'is_active'=>1,
            'priority'=>6,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Avo Toast",
            'category_id' => 1,
            'description'=>"smashed avocado on sourdough toast, crispy kale, basil & mint, red chilli peppers",
            'price'=>"9.00",
            'is_active'=>1,
            'priority'=>7,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Brioche French Toast",
            'category_id' => 1,
            'description'=>"brioche french toast, lemon honey ricotta, home-made mixed berry compote, almond and icing sugar",
            'price'=>"11.50",
            'is_active'=>1,
            'priority'=>8,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Miss Royale",
            'category_id' => 1,
            'description'=>"scottish smoked salmon, smashed avocado, poached egg, in-house hollandaise sauce on sourdough toast",
            'price'=>"12.00",
            'is_active'=>1,
            'priority'=>9,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Bubble & Squeak",
            'category_id' => 1,
            'description'=>"crushed potato & sweet potato, caramelised onion, kale, grilled sausage and fried egg",
            'price'=>"11.50",
            'is_active'=>1,
            'priority'=>10,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Breakfast Bun",
            'category_id' => 1,
            'description'=>"grilled smoked bacon & sausage, fried egg served on a brioche bun with bbq sauce",
            'price'=>"7.50",
            'is_active'=>1,
            'priority'=>11,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Green Egg",
            'category_id' => 1,
            'description'=>"scrambled egg with fresh herbs, scottish smoked salmon and rocket",
            'price'=>"12.00",
            'is_active'=>1,
            'priority'=>12,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Free Range Eggs How You Like ‘em",
            'category_id' => 1,
            'description'=>"",
            'price'=>"11.50",
            'is_active'=>1,
            'priority'=>13,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "All'Arrabbiata",
            'category_id' => 2,
            'description'=>"penne pasta, chillies, garlic, slow-cooked tomato sauce",
            'price'=>"8.95",
            'is_active'=>1,
            'priority'=>1,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Goat Cheese Salad",
            'category_id' => 2,
            'description'=>"grilled goat cheese, roasted beetroot, walnuts, mixed leaves salad, and wild fig",
            'price'=>"12.50",
            'is_active'=>1,
            'priority'=>2,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Padron Peppers",
            'category_id' => 2,
            'description'=>"",
            'price'=>"4.00",
            'is_active'=>1,
            'priority'=>3,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Falafel",
            'category_id' => 2,
            'description'=>"chickpeas & vegetable fritters on hummus and rocket",
            'price'=>"5.50",
            'is_active'=>1,
            'priority'=>4,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Halloumi",
            'category_id' => 2,
            'description'=>"",
            'price'=>"5.50",
            'is_active'=>1,
            'priority'=>5,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "King Prawns",
            'category_id' => 2,
            'description'=>"pan-fried king prawns served with la mela signature sauce",
            'price'=>"7.00",
            'is_active'=>1,
            'priority'=>6,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Arancini",
            'category_id' => 2,
            'description'=>"four cheese risotto balls with basil on in-house spicy mayo",
            'price'=>"6.00",
            'is_active'=>1,
            'priority'=>7,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Chorizo",
            'category_id' => 2,
            'description'=>"grilled spanish chorizo sausage, bloody mary baked beans and green apple",
            'price'=>"6.00",
            'is_active'=>1,
            'priority'=>8,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Seabass",
            'category_id' => 2,
            'description'=>"pan-fried boneless seabass, tender stem broccoli with white wine & lemon sauce",
            'price'=>"14.00",
            'is_active'=>1,
            'priority'=>9,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Con Pollo",
            'category_id' => 2,
            'description'=>"creamy mushroom chicken, fresh tomato, garlic and parmesan",
            'price'=>"12.00",
            'is_active'=>1,
            'priority'=>10,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Seafood Linguini Pasta",
            'category_id' => 2,
            'description'=>"fresh linguini pasta and mixed seafood cooked in tomato sauce",
            'price'=>"13.00",
            'is_active'=>1,
            'priority'=>11,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Truffle Linguini Pasta",
            'category_id' => 2,
            'description'=>"fresh linguini pasta and black truffle paste with pecorino cheese",
            'price'=>"15.00",
            'is_active'=>1,
            'priority'=>12,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Baby Chicken",
            'category_id' => 2,
            'description'=>"roasted cajun, harissa-marinated baby chicken, potato bubble and pea shoots",
            'price'=>"12.50",
            'is_active'=>1,
            'priority'=>13,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "La Mela Plant Pitta",
            'category_id' => 2,
            'description'=>"greek pita, humus, grilled vegetables, fresh herbs and dill oil",
            'price'=>"11.50",
            'is_active'=>1,
            'priority'=>14,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Sides",
            'category_id' => 2,
            'description'=>"hand-cut potato chips, tender stem broccoli, rocket & parmesan salad, garlic mushroom, sweet potato fries",
            'price'=>"4.00",
            'is_active'=>1,
            'priority'=>15,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Veggie - 1",
            'category_id' => 3,
            'description'=>"pesto fresh tomato, rocket & mozerella",
            'price'=>"7.00",
            'is_active'=>1,
            'priority'=>1,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Veggie - 2",
            'category_id' => 3,
            'description'=>"roast vegetable, sundried tomato mayo & goat cheese",
            'price'=>"7.00",
            'is_active'=>1,
            'priority'=>2,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Fish",
            'category_id' => 3,
            'description'=>"fish finger, rocket & tartar sauce",
            'price'=>"6.50",
            'is_active'=>1,
            'priority'=>3,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Classic - 1",
            'category_id' => 3,
            'description'=>"bacon lettuce & tomato",
            'price'=>"6.00",
            'is_active'=>1,
            'priority'=>4,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Classic - 2",
            'category_id' => 3,
            'description'=>"ham & cheese",
            'price'=>"6.00",
            'is_active'=>1,
            'priority'=>5,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Meaty - 1",
            'category_id' => 3,
            'description'=>"chicken escalope, tomato, lettuce & sweet chilli mayo",
            'price'=>"7.50",
            'is_active'=>1,
            'priority'=>6,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Meaty - 2",
            'category_id' => 3,
            'description'=>"crispy bacon, chicken mayo",
            'price'=>"7.00",
            'is_active'=>1,
            'priority'=>7,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Avacado On Toast",
            'category_id' => 6.95,
            'description'=>"",
            'price'=>"6.95",
            'is_active'=>1,
            'priority'=>1,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Fruity Pancake",
            'category_id' => 4,
            'description'=>"",
            'price'=>"6.95",
            'is_active'=>1,
            'priority'=>2,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Egg Sausage and Beans",
            'category_id' => 4,
            'description'=>"",
            'price'=>"6.95",
            'is_active'=>1,
            'priority'=>3,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Fish and Chips",
            'category_id' => 4,
            'description'=>"",
            'price'=>"6.95",
            'is_active'=>1,
            'priority'=>4,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Penne Tomato",
            'category_id' => 4,
            'description'=>"",
            'price'=>"6.95",
            'is_active'=>1,
            'priority'=>5,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Babyccino or Apple Juice",
            'category_id' => 4,
            'description'=>"",
            'price'=>"FREE",
            'is_active'=>1,
            'priority'=>6,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Pancake Lovers",
            'category_id' => 5,
            'description'=>"4 buttermilk pancakes, bacon, scrambled eggs, maple syrup",
            'price'=>9.45,
            'is_active'=>1,
            'priority'=>1,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);
        DB::table('menus')->insert([
            'name' => "Fruity Pancake",
            'category_id' => 5,
            'description'=>"4 buttermilk pancakes, banana, strawberries, maple syrup",
            'price'=>8.65,
            'is_active'=>1,
            'priority'=>1,
            'created_at'=>date('Y-m-d'),
            'updated_at'=>date('Y-m-d'),
        ]);

    }
}


<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
      
    	$name = 'Platos Unicos';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

        
    	$name = 'Heladería';
        App\Category::create(	
        	['name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

        
    	$name = 'Jugos y Bebidas';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

        
    	$name = 'Pescados y Mariscos';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

        
    	$name = 'Comida Rapida';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

        
    	$name = 'Comida Peruana';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

        
    	$name = 'Sandwichería';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

        
    	$name = 'Reposteria';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

        
    	$name = 'Comida Chilena';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

        
    	$name = 'Ensaladas y Frutas';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

        
    	$name = 'Comida China';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

        
    	$name = 'Comida Italiana';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

    	
    	$name = 'Comida Mexicana';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

    	
    	$name = 'Comida Japonesa';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

    	
    	$name = 'Comida Arabe';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);
	
    	
    	$name = 'Vegetariana y Vegana';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

    	
    	$name = 'Panadería';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);


    	
    	$name = 'Cafetería';
        App\Category::create([	
        	'name' 		=> $name,
        	'slug' 		=> str_slug($name),        	
        ]);

        $name = 'Variado';
        App\Category::create([  
            'name'      => $name,
            'slug'      => str_slug($name),         
        ]);

		//factory(Category::class, 20) ->create();
    }
}

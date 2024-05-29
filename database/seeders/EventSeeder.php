<?php
use App\Models\Event;
use Faker\Provider\ka_GE\DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('event')->insert([
          'title' => Str::random(10),
           'name' => Str::random(10),
           'description' => Str::random(10),
            'venue' =>Str::random(10),
            'slug' =>Str::random(10),
            'organiser'=>Str::random(10),
            'date' =>DateTime::dateTime(),
            'time' =>time()::random(6),
            'image'=>Str::random(10),
          
            

       ]);
     }
    }
    
    
        {
            Event::create([
    'title' => 'Sports',
    'name'=>'Football',
    'description'=> 'If you want to exclude some files or folders from the classmap you can use the exclude-from-classmap property. This might be useful to 
                     exclude test classes in your live environment, for example, as those will be skipped from the classmap even when building an optimized autoloader.',
    'venue' => 'walsall',
    'slug' =>'Sports',
    'organiser' =>'Georges',
    'price' =>'0',
    'date'=>'23/03/21',
    'time'=>'00:00:00',
    'image'=>'https://via.placeholder.com/200x25',
    
            
                            
             ]);
             }
                    
             Event::create([
                'title' => 'Sports',
                'name'=>'Football',
                'description'=> 'If you want to exclude some files or folders from the classmap you can use the exclude-from-classmap property. This might be useful to 
                                 exclude test classes in your live environment, for example, as those will be skipped from the classmap even when building an optimized autoloader.',
                'venue' => 'walsall',
                'slug' =>'Sports',
                'organiser' =>'Georges',
                'price' =>'0',
                'date'=>'23/03/21',
                'time'=>'00:00:00',
                'image'=>'https://via.placeholder.com/200x25',
                
                        
                                        
                         ]);
                         
                                       
        
                         Event::create([
                            'title' => 'Sports',
                            'name'=>'rugby',
                            'description'=> 'If you want to exclude some files or folders from the classmap you can use the exclude-from-classmap property. This might be useful to 
                                             exclude test classes in your live environment, for example, as those will be skipped from the classmap even when building an optimized autoloader.',
                            'venue' => 'walsall',
                            'slug' =>'Sports',
                            'organiser' =>'Georges',
                            'price' =>'0',
                            'date'=>'23/03/21',
                            'time'=>'00:00:00',
                            'image'=>'https://via.placeholder.com/200x25',
                            
                                    
                                                    
                                     ]);
                                     
                                                   
        
                                     Event::create([
                                        'title' => 'Culture',
                                        'name'=>'live show',
                                        'description'=> 'If you want to exclude some files or folders from the classmap you can use the exclude-from-classmap property. This might be useful to 
                                                         exclude test classes in your live environment, for example, as those will be skipped from the classmap even when building an optimized autoloader.',
                                        'venue' => 'walsall',
                                        'slug' =>'culture',
                                        'organiser' =>'Georges',
                                        'price' =>'0',
                                        'date'=>'23/03/21',
                                        'time'=>'00:00:00',
                                        'image'=>'https://via.placeholder.com/200x25',
                                        
                                                
                                                                
                                                 ]);
                                                             
        
                                                 Event::create([
                                                    'title' => 'Others',
                                                    'name'=>'Fundraising',
                                                    'description'=> 'If you want to exclude some files or folders from the classmap you can use the exclude-from-classmap property. This might be useful to 
                                                                     exclude test classes in your live environment, for example, as those will be skipped from the classmap even when building an optimized autoloader.',
                                                    'venue' => 'walsall',
                                                    'slug' =>'others',
                                                    'organiser' =>'Georges',
                                                    'price' =>'0',
                                                    'date'=>'23/03/21',
                                                    'time'=>'00:00:00',
                                                    'image'=>'https://via.placeholder.com/200x25',
                                                    
                                                            
                                                                            
                                                             ]);
                                                             
                                                            
                                                            
        
                                                       
                                                                                       
                                                                    
        

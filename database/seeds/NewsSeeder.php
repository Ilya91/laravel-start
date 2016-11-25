<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO `news` (`name`, `text`, `img`) VALUES (?,?,?)', [
        	'Blog post',
	        '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
				Et exercitationem labore magnam modi molestiae optio quasi 
				quisquam quo sapiente veritatis. Adipisci asperiores aspernatur, 
				dolor eveniet officia provident quibusdam quisquam rem.</p>',
	        'img1.jpg'
        ]);

	    DB::table('news')->insert(
	    	[
	    		[
	    			'name' => 'Blog post',
				    'text' => 'lorem lorem',
				    'img' => 'img2.jpg'
			    ],
			    [
				    'name' => 'Title2',
				    'text' => 'Text2',
				    'img' => 'img3.jpg'
			    ]
		    ]
	    );
    }
}

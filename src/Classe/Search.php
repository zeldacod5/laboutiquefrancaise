<?php    

namespace App\Classe;

use App\Entity\Category;



class Search
{

    /**
     * @var string
     */
    public $string = '';

    
    /**
     * @var Category[]
     */
    public $categories = [];
    
    public function __toString()
    {
        return "Search: string = ". $this->string.", categories=".json_encode($this->categories);
    }

}

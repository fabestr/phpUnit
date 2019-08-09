<?php
namespace App;

class HTMLBuilder
{
    protected $element;
    protected $attributes= [];

    public function __construct(string $e)
    {
        $this->element = $e;
    }

    

    /**
     * Get the value of element
     */ 
    public function getElement()
    {
        return $this->element;
    }


    /**
     * Undocumented function
     *
     * @param string $key
     * @param int $value
     * @return void
     */
    public function addAttribute($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    

    /**
     * Get the value of attributes
     */ 
    public function getAttributes()
    {
        return $this->attributes;
    }

    public function build()
    {
        
        foreach($this->attributes as $key=>$value)
        {
            $result = $key.'="'.$value.'">';
        }

        return '<'.$this->element.' '.$result;
    }


    
}
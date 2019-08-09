<?php
use App\HTMLBuilder;
use PHPUnit\Framework\TestCase;



class HTMLBuilderTest extends TestCase
{
    protected $builder;

    public function setUp() : void
    {
        $this->builder = new HTMLBuilder('div');
    }

    public function testVoid()
    {
        $this->assertEquals(0,0);
    }

    // public function testNull()
    // {

    // }

    public function testElement()
    {
        $this->assertEquals( 'div', $this->builder->getElement(),'la propriété devrait être *div*');
    }
    
    /**
     * Undocumented function
     * 
     * @return void
     */
    public function testAddAttribute()
    {
        $this->builder->addAttribute('class', 'hello');
        $this->assertContains('hello',$this->builder->getAttributes());
        $this->assertArrayHasKey('class',$this->builder->getAttributes());

        return $this->builder;
    }

    /**
     * Undocumented function
     * @depends testAddAttribute
     * //le "depends" permet d'indiquer a la fonction testbuild que son parametre est rattaché au return de la methode testAddAttribute.
     * @param HTMLBuilder $b
     * @return void
     */
    public function testBuild(HTMLBuilder $b)
    {
        $this->assertEquals($b->build(), '<div class="hello">');
    }
    

    public function attributeProvider()
    {
        $validAttributes = [
            "class Css" => ["class", "container"],
            "style color" => ["style", "color:balck"],
            "id" => ["id", "name"]
        ];

        return $validAttributes;
    }
}

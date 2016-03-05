<?php



class MarkdownerTest extends TestCase{

    protected $markdown;

    public function setUp()
    {
        $this->markdown =new \App\Services\Markdowner();
    }

    public function testSimpleParagraph(){
        $this->assertEquals(
            "<p>test</p>\n",
            $this->markdown->toHTML('test')
        );
    }
}

<?php
namespace NikhilGosavi\BookStoreApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author NIkhil Gosavi <nikhilgosavi007@gmail.com>
 */
class CountryTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \NikhilGosavi\BookStoreApp\Domain\Model\Country
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \NikhilGosavi\BookStoreApp\Domain\Model\Country();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }
}

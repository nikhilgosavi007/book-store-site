<?php
namespace NikhilGosavi\BookStoreApp\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author NIkhil Gosavi <nikhilgosavi007@gmail.com>
 */
class AuthorTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \NikhilGosavi\BookStoreApp\Domain\Model\Author
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \NikhilGosavi\BookStoreApp\Domain\Model\Author();
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

    /**
     * @test
     */
    public function getDateOfBirthReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDateOfBirth()
        );
    }

    /**
     * @test
     */
    public function setDateOfBirthForStringSetsDateOfBirth()
    {
        $this->subject->setDateOfBirth('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'dateOfBirth',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBiographyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBiography()
        );
    }

    /**
     * @test
     */
    public function setBiographyForStringSetsBiography()
    {
        $this->subject->setBiography('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'biography',
            $this->subject
        );
    }
}

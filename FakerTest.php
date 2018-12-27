<?php

namespace Bases;

class FakerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldCreateRandomText()
    {
        //given
        $faker = new \Faker();

        //when
        $result = $faker->letterify('???');

        //then
        $this->assertRegExp('/^[a-z][a-z][a-z]$/', $result);
    }

    /**
     * @test
     */
    public function shouldEmbedRandomLetterInText()
    {
        //given
        $faker = new \Faker();

        //when
        $result = $faker->letterify('Test?');

        //then
        $this->assertRegExp('/^Test[a-z]$/', $result);

    }

    /**
     * @test
     */
    public function shouldCreateRandomNumber()
    {
        //given
        $faker = new \Faker();

        //when
        $result = $faker->numerify('###');

        //then
        $this->assertRegExp('/^[0-9][0-9][0-9]$/', $result);
    }

    /**
     * @test
     */
    public function shouldEmbedRandomNumberInText()
    {
        //given
        $faker = new \Faker();

        //when
        $result = $faker->numerify('Test#');

        //then
        $this->assertRegExp('/^Test[0-9]$/', $result);
    }

    /**
     * @test
     */
    public function shouldEmbedRandomElementsInText()
    {
        //given
        $faker = new \Faker();

        //when
        $result = $faker->bothify('Test?#');

        //then
        $this->assertRegExp('/^Test[a-z][0-9]$/', $result);
    }
}

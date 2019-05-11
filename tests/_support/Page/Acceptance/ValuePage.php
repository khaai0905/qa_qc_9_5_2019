<?php
namespace Page\Acceptance;

use AcceptanceTester;

class ValuePage
{
    public static $URL = '';

    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
    public static $tableID='//input[@id="tableID"]';
    public static $numberOfPerson='//input[@id="numberofperson"]';
    public static $Date='//input[@id="date"]';
    public static $Description='//textarea[@id="description"]';
    public static $startTime='//input[@id="startTime"]';

}

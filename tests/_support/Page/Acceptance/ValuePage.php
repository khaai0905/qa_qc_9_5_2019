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
    public static $tableID='(//input[@name=\'tableID\'])';
    public static $numberOfPerson='(//input[@name=\'numberofperson\'])';
    public static $Date='(//input[@name=\'date\'])';
    public static $Description='//textarea[@name=\'description\']';
    public static $startTime='(//input[@name=\'startTime\'])';

}

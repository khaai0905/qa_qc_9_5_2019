<?php
namespace Page\Acceptance;

use AcceptanceTester;

class MainPage
{
    // include url of current page
    public static $URL = '/QATest/';

    /**
     * @param $Param
     * @return string
     */
    public static function route($Param)
    {
        return static::$URL.$Param;
    }

    protected $acceptanceTester;

    /**
     * MainPage constructor.
     * @param AcceptanceTester $I
     */
    public function __construct(AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
    public static $newReservation='//a[text()=\'New Reservation\']';
    public static $goToPage='(//a[@title=\'Go to page 2\'])';
    public static $Delete='(//a[text()=\'Delete\'])[2]';
    public static $Edit='((//td[@class="edit"])/a)[1]';
    public static $reloadData='/html/body/p[2]/a';
    public static $addButton='//input[@class=\'t-beaneditor-submit\']';
    public static $clearButton='//a[text()=\'clear\']';
}

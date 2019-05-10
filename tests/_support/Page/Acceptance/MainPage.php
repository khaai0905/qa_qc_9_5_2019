<?php
namespace Page\Acceptance;

class MainPage
{
    // include url of current page
    public static $URL = '/QATest/';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
    public static $NewReservation='//a[text()=\'New Reservation\']';
    public static $NextPage='(//a[@title=\'Go to page 2\'])';
    public static $Delete='(//a[text()=\'Delete\'])[2]';
    public static $Edit='((//td[@class="edit"])/a)[1]';
    public static $ReloadData='/html/body/p[2]/a';
    public static $AddButton='//input[@class=\'t-beaneditor-submit\']';
    public static $ClearButton='//a[text()=\'clear\']';
}

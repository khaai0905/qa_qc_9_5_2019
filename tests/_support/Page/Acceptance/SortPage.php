<?php
namespace Page\Acceptance;

class SortPage
{
    // include url of current page
    public static $URL = '';

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
    public static $IdSort='((//th[@class="id t-first"])/a)[1]';
    public static $TypeSort='((//th[@class="type t-last"])/a)[1]';
    public static $TableIdSort='((//th[@class="tableID t-sort-column-ascending t-first"])/a)[1]';
    public static $NumberOfPersonSort='((//th[@class="numberofperson"])/a)[1]';
    public static $DateSort='((//th[@class="date"])/a)[1]';
    public static $DescriptionSort='((//th[@class="description"])/a)[1]';
    public static $DurationSort='((//th[@class="duration"])/a)[1]';
    public static $StartTimeSort='((//th[@class="startTime"])/a)[1]';

}

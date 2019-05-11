<?php
namespace Page\Acceptance;

use AcceptanceTester;

class SortPage
{
    public static $URL = '';

    public static function route($param)
    {
        return static::$URL.$param;
    }

    protected $acceptanceTester;

    /**
     * SortPage constructor.
     * @param AcceptanceTester $I
     */
    public function __construct(AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }
    public static $idSort='((//th[@class="id t-first"])/a)[1]';
    public static $typeSort='((//th[@class="type t-last"])/a)[1]';
    public static $numberOfPersonSort='((//th[@class="numberofperson"])/a)[1]';
    public static $dateSort='((//th[@class="date"])/a)[1]';
    public static $descriptionSort='((//th[@class="description"])/a)[1]';
    public static $durationSort='((//th[@class="duration"])/a)[1]';
    public static $startTimeSort='((//th[@class="startTime"])/a)[1]';

}

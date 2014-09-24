<?php

namespace tests\codeception\main\_pages;

use yii\codeception\BasePage;

/**
 * Represents about page
 * @property \codeception_main\AcceptanceTester|\codeception_main\FunctionalTester $actor
 */
class AboutPage extends BasePage
{
    public $route = 'site/about';
}

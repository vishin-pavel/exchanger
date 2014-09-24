<?php
use tests\codeception\main\AcceptanceTester;
use tests\codeception\main\_pages\AboutPage;

$I = new AcceptanceTester($scenario);
$I->wantTo('ensure that about works');
AboutPage::openBy($I);
$I->see('About', 'h1');

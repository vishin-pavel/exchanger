<?php
use tests\codeception\main\FunctionalTester;
use tests\codeception\main\_pages\AboutPage;

$I = new FunctionalTester($scenario);
$I->wantTo('ensure that about works');
AboutPage::openBy($I);
$I->see('About', 'h1');
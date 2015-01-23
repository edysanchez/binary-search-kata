<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\CustomSnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Searcher\Searcher;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, CustomSnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    private $list=[];
    private $find;

    public static function getAcceptedSnippetType()
    {
        return 'regex';
    }

    /**
     * @Given /^I have the list "([^"]*)"$/
     */
    public function numberList($numbers)
    {
        $this->list = explode(',', $numbers);
    }

    /**
     * @When /^I search the number "([^"]*)"$/
     */
    public function search($number)
    {
        $this->find=Searcher::binarySearch($this->list, $number);
    }

    /**
     * @Then /^I should find it$/
     */
    public function find()
    {
        if (!$this->find) {
            throw new Exception('not found');
        }
    }

    /**
     * @Then /^I should not find it$/
     */
    public function notFind()
    {
        if ($this->find) {
            throw new Exception('not found');
        }
    }

}

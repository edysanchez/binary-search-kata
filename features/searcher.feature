Feature: Search a number in an ordered list of Numbers
    In order to search a number in an ordered list
    As a developer
    I want to know if a number is inside the list

    Scenario: Search a number in an empty list
        Given I have the list ""
        When I search the number "2"
        Then I should not find it

    Scenario:  Search a number in a list with one element
        Given I have the list "1"
        When I search the number "1"
        Then I should find it

    Scenario:  Search a number not in a list with one element
        Given I have the list "2"
        When I search the number "1"
        Then I should not find it

    Scenario: Search a number in a list with 3 elements
        Given I have the list "1,2,3"
        When I search the number "2"
        Then I should find it

    Scenario: Search a number in a list with 3 elements
        Given I have the list "1,2,3"
        When I search the number "1"
        Then I should find it

    Scenario: Search the 3d number in a list with 3 elements
        Given I have the list "1,2,3"
        When I search the number "3"
        Then I should find it

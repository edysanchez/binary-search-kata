Feature: Search a number in an ordered list of Numbers
    In order to search a number in an ordered list
    As a developer
    I want to know if a number is inside the list

    Scenario: Search a number in an empty list
        Given I have the list ""
        When I search the number "2"
        Then I should not find it

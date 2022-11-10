Feature: Filter searched results
	In order to have the best product based on my need
	As a customer
	I want to be able to filter all the displayed results
Scenario: 
	Given I searched Logitech headset
	And I want the cheapest one 
	When I go to the filter
	Then I should be able to have an option with the price in ascending order
	And it will automatically display the result based on the selected filter
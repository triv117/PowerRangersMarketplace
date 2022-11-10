Feature: Tracking sales
	In order to keep track of the products that got sold
	As a vendor
	I want to be able to have an invoice of each of those products
Scenario:
	Given I have sold a keyboard
	And I want to know the price as well as the name of that keyboard
	When I go to my invoice page
	Then I should be able to see each invoice for each of the products that got sold
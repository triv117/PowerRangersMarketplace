Feature: Search through product catalogues
	In order find the product efficiently
	As a customer 
	I want to be able to find a product by searching it
Scenario:
	Given I want to buy a Logitech G915 keyboard
	When I go to the search bar
	And search Logitech G915
	Then I should be able to see that product appeared
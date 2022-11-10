Feature: Modify cart
	In odder to change either the quantity or the product itself
	As a customer
	I want to be able to modify my cart
Scenario: 
	Given I have a headphone in my cart
	And I want to have one more 
	When I go to my cart
	Then I should be able to modify the quantity of the products
	And my cart will be updated with the latest changes
Feature: Add to cart
	In order to buy products
	As a customer
	I want to be able to add my products into my cart
Scenario:
	Given I want to buy multiple products
	When I buy products online
	Then I should be able to add products into my cart
	And my cart will be updated with the added products
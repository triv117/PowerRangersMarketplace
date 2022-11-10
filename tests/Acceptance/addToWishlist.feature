Feature: Add to Wishlist
	In order to save a product for future purchase
	As a customer 
	I want to add an item to my Wishlist
Scenario: 
	Given I don’t have enough money
	And I want to buy a mouse
	When I go to that product
	Then I should be able to add that product to my Wishlist 
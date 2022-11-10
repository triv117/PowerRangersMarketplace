Feature: Remove from Wishlist
	In order to undo my added item in my Wishlist
	As a customer
	I want to be able to remove added item in my Wishlist
Scenario:  
	Given I have a product in my Wishlist
	And I’m not planning to buy it in the future	
	When I go to my Wishlist
	Then I should be able to remove that item from my Wishlist
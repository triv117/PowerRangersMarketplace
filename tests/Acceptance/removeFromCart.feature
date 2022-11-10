Feature: Remove from cart
	In order to delete the item from the cart
	As a customer
	I want to be able to remove the product from my cart
Scenario:
	Given I have a keyboard in my cart
	And I do not want to buy it anymore
	When I go to my cart
	Then I should be able to remove the item	
	And my cart will be updated with the latest changes
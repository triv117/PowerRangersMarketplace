Feature: Checkout process
	In order to buy products
	As a customer
	I want to be able to buy several products
Scenario:
	Given I have a headset with 100$ price in my cart
	And I want to pay for it
	When I go to the checkout process
	Then I should be able to pay for it
	And see the total number of product as well as the total price

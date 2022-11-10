Feature: Modify product existed in store 
	In order to change the quantity displayed on the store of a product 
	As a vendor
	I want to be able to modify the product
Scenario: 
	Given I ran out of stock for a keyboard
	When I go to that product
	Then I should be able to set the quantity displayed to “Out of Stock” for that product
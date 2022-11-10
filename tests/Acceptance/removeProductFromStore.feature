Feature: Remove product from the store
	In order to not sell a product anymore
	As a vendor
	I want to be able to remove that product from the store
Scenario: 
	Given the mouse is outdated 
	And it is barely sold
	When I go to that product
	Then I should be able to remove that item from the store
	And remove it from the database
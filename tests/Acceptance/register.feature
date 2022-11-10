Feature: Register an account
	In order to buy products 
	As a customer
	I want to have a private account to manage my purchases 

Scenario:
	Given I want to have a private account
	And I want to manage my purchases
	When I buy the products
	Then I should have an account to keep track of my purchases 
	And my account is private and safe 

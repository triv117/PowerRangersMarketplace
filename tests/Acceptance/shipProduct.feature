Feature: Ship product
	In order to sell my product
	As a vendor
	I want to be able to ship my product
Scenario:
	Given a client purchased a product
	And wants it to be delivered
	When the client request it to be delivered
	Then I should be able to send the product to the client’s address 

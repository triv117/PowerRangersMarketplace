Feature: Add product to the store
	In order to supply the clients
	As a vendor
	I want to be able to add more products into my shop
Scenario:
	Given there is a new mousepad released
	And the clients want to buy it	
	When I go to my store
	Then I should be able to add that item to the store
	And add it into my database

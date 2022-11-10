Feature: Logout
	In order to disconnect 
	As a customer 
	I want to be able to logout of my account
Scenario:
	Given I want to logout
	And I want to secure my account
	When I’m done buying my products
	Then I should be able to logout
	And my account is safely disconnected

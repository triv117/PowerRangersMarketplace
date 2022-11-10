Feature: Track package
	In order to know when my package will arrive
	As a customer
	I want to be able to track the package	
Scenario: 
	Given I have bought a product
	And the vendor has shipped the package
	When I go to the tracking package page
	Then I should be able to track where the package is currently 
	And the expected date it will arrive

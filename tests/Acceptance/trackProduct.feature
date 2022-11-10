Feature: Track product
	In order to ensure the shipping is under radar
	As a vendor
	I want to be able to track the items I shipped
Scenario:
	Given I shipped a package
	And I want to make sure it’s on its way
	When I go to check for the package
	Then I should be able to track the package
	And it should be displayed with every information of the shipping
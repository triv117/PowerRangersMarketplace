Feature: Modify store profile
	In order to freshen the store picture and attract clients
	As a vendor
	I want to be able to modify my store profile 
Scenario: 
	Given I want to change the profile picture of my online store 
	And change the store name
	When I go to the store profile page
	Then I should be able to change the profile picture to a new picture as well as my store name is changed
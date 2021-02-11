Feature: Api status
  In order to know the server is up and running
  As a health check
  I want to check the api status

  Scenario: Check the api status
    Given I send a GET request to "/health-check"
    Then the JSON should be equal to:
    """
    {
      "platform": "ok",
      "rand": 1
    }
    """
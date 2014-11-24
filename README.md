# MSISDN

Simple service written in php for getting information about MSISDN numbers (carrier, country, etc.).

## Build & Run

All that is need is one command to get fully working application:

`$ vagrant up`

The service is now exposed over JSON-RPC on localhost:8080.

## Tests

To run all the tests trun this command:

`$ sh scripts/test-e2e.sh`

To run just the unit tests do:

`$ sh scripts/build.sh`

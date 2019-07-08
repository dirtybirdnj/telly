## Telly

SilverStripe sample app to experiment with Twilio API

## Getting Started:

1. Clone app `git clone git@github.com:dirtybirdnj/telly.git`
1. Copy .env.example `cp .env.example .env`
2. Run `composer install` to install PHP dependencies
3. Create volume `docker volume create telly-db`
4. Run `docker-compose build` to prepare the image
5. Run `docker-compose up` to start the site on port 8100
6. Run `docker-compose down` to kill the site / db process

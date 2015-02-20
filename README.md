DigitalOcean Oauth Creator
============================

DigitalOcean Oauth Creator was created by, and is maintained by [Tyler Youschak](http://tjyouschak.me). DigitalOcean Oauth Connector uses [DigitalOcean](https://digitalocean.com/)'s Oauth API that will enable your applications to obtain limited access to user accounts on an HTTP service, such as Facebook, GitHub, and DigitalOcean. It works by delegating user authentication to the service that hosts the user account, and authorize a third-party application (your app) to connect to a DigitalOcean user account and create servers or domain records on the fly.


## Installation

To get the latest version of DigitalOcean Oauth Creator, simply add the following line to the require block of your `composer.json` file:

```
"webstax/do-oauth-creator": "~1.0@dev"
```

You'll then need to run `composer install` or `composer update` to download it and have the autoloader updated.

If you're using Laravel 5, then you can register our service provider. Open up `config/app.php` and add the following to the `providers` key.

* `'webstax\DigitalOceanOauthCreatorServiceProvider'`


## Usage

```
use WebStax\OauthClient;

$client = new Oauth($clientId);
$response = $client->get('code');

```

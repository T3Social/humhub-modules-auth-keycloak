# Keycloak Sign-In

Integrating Keycloak Sign-In (OAuth 2.0)


## Overview

Using this module, users can directly log in or register at this HumHub installation with an account on an identity provider using [Keycloak](https://www.keycloak.org/) open source's application.


## Features

- If email is changed on the broker (IdP) or on Humhub, it can be automatically updated on Humhub or the broker
- Possibility to choose if user must be linked to the broker (IdP) from the broker's user ID or email
- Possibility to choose broker's (IdP) mapper name to use for Humhub's default username (on account creation)
- Can try auto login (only if anonymous registration is allowed)


## Install

```
cd my-humhub/protected/modules
git clone https://github.com/cuzy-app/humhub-modules-auth-keycloak.git auth-keycloak
cd auth-keycloak
composer install
```

And then enable module in Humhub's administration


## Requirements

Pretty URLs must be enabled ([see documentation](https://docs.humhub.org/docs/admin/installation/#pretty-urls)).


## Usage

Create client on the broker (IdP) and configure it:
- Tab "Settings": "Access Type": choose `confidential`. Save settings.
- Tab "Credentials": copy the secret key
- Tab "Mappers":
    + "Add builtin" and check: `family name`, `email`, `given name` and `username`
    + Edit "username": in "Token Claim Name", replace `preferred_username` with `id`

Go to module's settings.


## Author

https://www.cuzy.app/


## Repository

https://github.com/cuzy-app/humhub-modules-auth-keycloak


## Licence

https://github.com/cuzy-app/humhub-modules-auth-keycloak/blob/main/docs/LICENCE.md
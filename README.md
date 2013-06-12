DaProtoBundle
=============

DaProtoBundle is a Symfony2's bundle which is a prototype to create a Symfony2's bundle with all the standard stuff you should find in a good bundle.

Introduction
------------

First, you should create a new repository on GitHub with the name of your bundle and then clone it.
Take the zip of this bundle (DaProtoBundle) (see the link above) and uncompress it.
Copy this later in your cloned directory and follow the steps below.

Change the .travis.yml with your values
---------------------------------------

Here a simple configuration:

``` yaml
language: php

php:
  - 5.3
  - 5.4

before_script: 
  - composer update --dev

script: phpunit --coverage-text
```

Here a more sophisticated one if you want to test for many versions of a required bundle or Symfony:

``` yaml
language: php

php:
  - 5.3
  - 5.4

env:
  - SYMFONY_VERSION="2.1.*"
  - SYMFONY_VERSION="2.2.*"
  - SYMFONY_VERSION="2.3.*"

before_script: 
  - composer require symfony/dependency-injection:${SYMFONY_VERSION} --dev

script: phpunit --coverage-text
```

Change the composer.json with your values
-----------------------------------------

``` json
{
    "name": "da/proto-bundle", # The name of your bundle in this standard form.
    "type": "symfony-bundle",
    "description": "This is a prototype bundle", # A description of your bundle.
    "keywords": ["prototype", "bundle", "da"], # Help the search engines.
    "homepage": "http://github.com/Gnucki/DaProtoBundle", # The root url of your bundle on Github.
    "license": "MIT", # The kind of license applying to your bundle.
    "authors": [
        {
            "name": "Thomas Prelot", # Your name.
            "email": "tprelot@gmail.com" # Your email.
        }
    ],
    "require": { # The list of the required bundles of your bundle (these ones are just here for the example).
        "php": ">=5.3.3",
        "symfony/dependency-injection" : ">=2.1,<2.4",
        "symfony/config" : ">=2.1,<2.4"
    },
    "require-dev": { # The list of the required bundle of your bundle in dev mod.
        "phpunit/phpunit": "3.7.*"
    },
    "autoload": {
        "psr-0": { "Da\\ProtoBundle": "" } # The namespace for the autoloader.
    },
    "minimum-stability": "dev",
    "target-dir": "Da/ProtoBundle" # The path of your bundle.
}
```

>**Note:**
>If you change the license field, you should change the LICENSE file of the bundle.

Replace name and namespace of the bundle
----------------------------------------

Imagine that your bundle name is MeSuperBundle.
Make a replace all in all the files of the bundle like this:

* DaProtoBundle => MeSuperBundle
* da_proto => me_super
* DaProtoExtension => MeSuperExtension
* Da\ProtoBundle => Me\SuperBundle

Replace specific filenames
--------------------------

Some files have a name specific to your bundle.
Using the same example as above:

* /DaProtoBundle.php => /MeSuperBundle
* /DependencyInjection/DaProtoExtension.php => /DependencyInjection/MeSuperExtension.php

Override the README.md
----------------------

You should find this documentation in the readme file of course, so you should replace it with your own.

Conclusion
----------

Now, you can commit your bundle to GitHub and start the hard work.
# Custom Site Service - a YOURLS plugin

Plugin for [YOURLS](http://yourls.org)

* Plugin URI:       [github.com/kur4ge/custom-site-service](https://github.com/kur4ge/custom-site-service)
* Description:      You can specify different short-chain domain names by configuring YOURLS_SITE_SERVICE like the old version.
* Version:          1.0
* Release date:     2021-10-31
* Author:           Kur4ge
* Author URI:       [https://kur4ge.com](https://kur4ge.com)

## Installation

1. In `/user/plugins`, create a new folder named `custom-site-service`.
2. Drop these files in that directory.

## Use

1. Add `YOURLS_SITE_SERVICE` in Your config.php.
2. Activate the plugin.

## Example
Add the following to config.php

```
define( 'YOURLS_SITE_SERVICE', 'https://kge.ink' );
```

Now you will find that the short chain you generated will start with https://kge.ink

## History

* 2021-10-31, v1.0: Initial version.

## Finally...

I hope you find this plugin useful.

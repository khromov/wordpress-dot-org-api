# WordPress.org API Helper
A very rudimentary helper for the WordPress.org API

To include into your project, use:

```
"khromov/wordpress-dot-org-api" : "~1.0"
```

Packagist:  
https://packagist.org/packages/khromov/wordpress-dot-org-api

### API Specifications  
http://codex.wordpress.org/WordPress.org_API


### Code examples  
Code examples will be available shortly.

```php
/* Your Composer autoloader */
include 'vendor/autoload.php';

use \Khromov\WordPressOrgAPI;

$api = new WordPressOrgAPI();

/* Sets content-type to text/plain */
$api->set_headers();

/* Salts */
echo $api->call('secret-key/1.0/');
echo $api->call('secret-key/1.1/salt/');

/* Stats */
echo $api->call('/stats/plugin/1.0/english-wp-admin');

echo $api->call('/stats/plugin/1.0/downloads.php', array('slug' => 'english-wp-admin', 'limit' => '30', 'callback' => 'myFunc'));

/* Version check */
echo $api->call('/core/version-check/1.7/');

/* Plugin info */
echo $api->call('/plugins/info/1.0/english-wp-admin');
```

If you are looking for a full-fledged helper, check out this package:  
https://github.com/Rarst/wporg-client
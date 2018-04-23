### Prerequisites

Change the constants in the wp-config.php to you local settings

```
define('DB_NAME', defined('ENV_DB') ? ENV_DB : 'wordpress');

/** MySQL database username */
define('DB_USER', defined('ENV_DBUSER') ? ENV_DBUSER : 'root');

/** MySQL database password */
define('DB_PASSWORD', defined('ENV_DBPASSWORD') ? ENV_DBPASSWORD : '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
```

# TU/e Education Guide
A remake of the tu/e education guide for the course DBL Hypermedia.

## Installation
To install the dependencies for this project, you will need composer installed (either locally for this project or globally). You can find more about that here: [getcomposer.org](https://getcomposer.org).

After that, make sure you have imported `database/migration.sql` into your mysql database to setup the tables.

Finally, make sure the document root for your webserver is set to the public directory of this project. If you have apache, make sure to allow `.htaccess`. If you use nginx, you have to rewrite all url's to `index.php`. How this is done you'll have to find out for yourself.

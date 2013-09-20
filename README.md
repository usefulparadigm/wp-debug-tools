WordPress Debug Tools
=====

Using ChromePhp:
-----

    ChromePhp::log('Hello console!');
    ChromePhp::log($_SERVER);
    ChromePhp::warn('something went wrong!');

More information can be found here: [http://www.chromelogger.com](http://www.chromelogger.com)


Using WordPress debug log:
-----

    _log('Testing the error message logging');
    _log(array('it' => 'works'));

After refreshing your page once, you should see a newly created debug.php file with a few lines of output. Use any log viewing utility that supports tailing the file for maximum productivity. On Mac, Unix and Linux systems, you can use this command from the main directory of your site:

    tail -f wp-content/debug.log


Credits:
-----
- [ChromePhp](https://github.com/ccampbell/chromephp) a PHP library for the Chrome Logger Google Chrome extension.
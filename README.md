Coding_Challenge
================

##Software Developer Coding Challenge##

A file named "composer.json" is created and put under root directory. The extenal framework used is Codeigniter 2.1.4.

First, download and unzip coding_challenge and put code folder under your www directory.

**Phase1**
* A simple PHP library, which will calculate the mean, median, mode, and range of a set of numbers, is named "statistic.php" and located at /code/application/libraries/statistic.php.
* A controller is made to test the statistic library. You can test it @ 
```
http://localhost/code
```
or 
```
http://localhost/code/index.php/test
```

**Phase2**
* A REST API for the statistic library is made and located at /code/application/controller/mmmr.php
* A REST Client file named "rest_api_post_test.php" is made and located at the root directory. You can test by running rest_api_post_test.php from the command-line.
```
$ php rest_client.php
```

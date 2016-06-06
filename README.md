# Zippy the Unzipper
*Created by Nav Appaiya in June 2016*
===

Zippy unzipper is a small packaged application for unpacking larger zip files. Project uses a zip class written by Anthon Pang.

### Installation with ssh / terminal
- Git clone this project to your hosting or machine into a public accessible folder

    `git pull https://github.com/Nav-Appaiya/ZippyTheUnzipper.git zippy`
- Composer install on it

    `composer install`
- Place the zip files in the cms-installations folder which you want unzipped

    `/zippy/cms-installations`
- Visit the folder where you unzipped

    `http://yoursite/zippy`

### Installation on shared hosting (no terminal/ssh)
- Clone this project locally to a folder

    `git pull https://github.com/Nav-Appaiya/ZippyTheUnzipper.git zippy`
- Composer install on it

    `composer install`
- Upload the folder with the vendor folder to your hosting

    `ftp upload zippy to /public_html/zippy for example`

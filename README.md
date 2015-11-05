# Logger

This plugin displays Logfiles from your Server (eg. PHP-FPM & NGINX) 

## Installation

- Download the zip file and extract it to your plugins folder
- Enable this plugin in the plugins manager in Codiad

## Usage

- Open "logger/index.php" and define the Log-Path on line 20.
- The PHP User must have access to the file. Change the owner or grant permission with chmod.
- Check your safe_mode and open_basedir setting in php.ini

## Note

Just testet with Ubuntu 14.04 with PHP5-FPM and Nginx. 
No warranty at all! It was just a quick and dirty solution to display logs inside Codiad!

## Credits

The Logger itself is from Alexandre Plennevaux (pixeline.be), thanks!




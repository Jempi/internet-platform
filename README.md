# README

## Police Internet Platform

The Police Internet Platform is an open-source platform specifically built for the internet websites of the Belgian Police.
It uses a component based architecture. Written in PHP 5.3, HTML, CSS and Javascript, and made by passionate open source technologists.

Developed by <a href="http://www.timble.net">Timble</a>.

## Installation

* Install [VirtualBox](http://www.virtualbox.org/)
* Install [Vagrant](http://downloads.vagrantup.com/)
* Clone this repository
    ```$ git clone https://github.com/belgianpolice/internet-platform.git```
* Download the 'Police Box' from [http://4b79b5d29bda1ea3808e-c0244351096da2f99013ff9619ea0386.r14.cf2.rackcdn.com/police.box](http://4b79b5d29bda1ea3808e-c0244351096da2f99013ff9619ea0386.r14.cf2.rackcdn.com/police.box)
* Setup the server
    ```vagrant box add police local-path-to-police.box```
* Go to the repository folder and bootup the server
    ```vagrant up```
* Add the following line to your hosts file
    ```192.168.52.10 police.dev phpmyadmin.police.dev```

Note: Linux users need to install NFS (Network File System) manually, see [help.ubuntu.com](http://help.ubuntu.com/community/SettingUpNFSHowTo) for more information.


## Vagrant command-line interface

You can use the following commands to manage the server:

* ```vangrant up``` to initially start the server
* ```vagrant reload``` reboots the server
* ```vagrant halt``` powers the server down
* ```vagrant suspend``` & ```vagrant resume``` to make the server sleep/wake up
* ```vangrant destroy``` to stop and destroy all resources of the server

More information about the Vagrant command-line interface can be found at [docs.vagrantup.com](http://docs.vagrantup.com/v2/cli/index.html).


## Access

* The site application is available at [http://police.dev/5388](http://police.dev/5388).
* The admin application is available at [http://police.dev/administrator/5388](http://police.dev/administrator/5388).

    ```
    email: admin@localhost.home
    password: admin
    ```

## Built on Open Source software

The Police Internet Platform is built on open source software and wouldn't be as productive without these open source projects around.
We simply just want to say thank you to the following projects for helping us out:

* [Bootstrap](http://getbootstrap.com)
* [Capistrano](http://www.capistranorb.com)
* [Composer](http://getcomposer.org)
* [Git](http://git-scm.com)
* [Imagine](https://github.com/avalanche123/Imagine)
* [Joomla](http://www.joomla.org)
* [jQuery](http://jquery.com)
* [Linux](http://linux.org)
* [MooTools](http://mootools.net)
* [nginx](http://nginx.org)
* [Nooku](http://www.nooku.org)
* [PageSpeed](http://developers.google.com/speed/pagespeed)
* [PHP](http://php.net)
* [PHP-JWT](http://github.com/firebase/php-jwt)
* [Sass](http://sass-lang.com)
* [Select2](http://ivaynberg.github.io/select2)
* [Vagrant](http://www.vagrantup.com)
* [VirtualBox](http://www.virtualbox.org)


## How to contribute?

Check our [contributing](CONTRIBUTING.md) guide.


## License

The files in this archive are released under the GPLv3 license. You can find a copy of this license in [LICENSE](LICENSE.md).


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/belgianpolice/internet-platform/trend.png)](https://bitdeli.com/free "Bitdeli Badge")


# TDD with PHPUnit

## Installation

* Install [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
* Install [Vagrant](https://www.vagrantup.com/downloads.html)
* Install [Ansible](http://docs.ansible.com/ansible/intro_installation.html#installation)
* Clone repository: `git clone git@github.com:sawyer-effect/tdd-php.git`

## To run VM

* Go to project dir: `cd tdd-php`
* Execute command `vagrant up`

## To run tests

To run tests you can run the following commad from app dir:

`vagrant ssh -c "cd /opt/software/tdd-php && ./vendor/bin/phpunit"`

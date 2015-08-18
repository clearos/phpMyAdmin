# phpMyAdmin

Forked version of phpMyAdmin with ClearOS changes applied

* git clone git+ssh://git@github.com/clearos/phpMyAdmin.git
* cd phpMyAdmin
* git checkout epel7
* git remote add upstream git://pkgs.fedoraproject.org/phpMyAdmin.git
* git pull upstream epel7
* git checkout clear7
* git merge --no-commit epel7
* git commit

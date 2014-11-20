TTLS Standard Edition
========================

Procédure installation projet :

- Créer dossier de code source

- Dans git bash - 'git clone https://github.com/KeurbyCandy/ttls_project.git'

- Mettre à jour vendor : 'php composer.phar self-update' puis 'php composer.phar update'

- En ligne de commande, situé dans le dossie racine du projet : php app:console doctrine:database:create

- En ligne de commande, situé dans le dossie racine du projet : php app:console doctrine:schema:update --force

- Modifier wamp/bin\php\php5.4.12/php.ini 
# Virtual hosts
Include conf/extra/httpd-vhosts.conf

- Créer virtual host /wamp/bin/apache\Apache2.4.4\conf
<VirtualHost *:80>
    ServerAdmin cavannachristophe@gmail.com
    DocumentRoot "C:\wamp\www\ttls_project\web"
    ServerName local.ttls.com
</VirtualHost>

- Importer BDD /ttls_project/docs/ttls_export.sql.gz
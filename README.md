TTLS Standard Edition
========================

Procédure installation projet :

- Installer Git / Wamp

- Mettre le lien de PHP et de Git dans les variables d'environnement :
'C:\wamp\bin\php\php5.4.12;C:\Program Files (x86)\Git\bin'

- Créer dossier de code source "wamp/www/ttls_project"

- Cloner le projet avec git :
Clique droit sur le dossier créée -> 'Git Bash', 
puis entrer dans l'invite de commande 'git clone https://github.com/KeurbyCandy/ttls_project.git'

- Mettre à jour vendor : 
Ligne de commande à la racine du projet
'php composer.phar self-update' puis 'php composer.phar update'

- En ligne de commande, situé dans le dossie racine du projet : php app/console doctrine:database:create

- En ligne de commande, situé dans le dossie racine du projet : php app/console doctrine:schema:update --force

- Modifier wamp/bin\php\php5.4.12/php.ini 
# Virtual hosts
Include conf/extra/httpd-vhosts.conf

- Créer virtual host /wamp/bin/apache\Apache2.4.4\conf
<VirtualHost *:80>
    ServerAdmin user@domaine.com
    DocumentRoot "C:\wamp\www\ttls_project\web" //C'est le mien pour exemple, changer le chemin pour accéder à votre wamp
    ServerName local.ttls.com
</VirtualHost>

- Importer BDD /ttls_project/docs/ttls_export.sql.gz

Puis se connecter à l'adresse :
http://local.ttls.com/app_dev.php/admin/home
login:admin
password:admin
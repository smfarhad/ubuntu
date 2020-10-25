<VirtualHost *:80>
    ServerName ucbmawa.local
    DocumentRoot D:\xampp\htdocs\ucb-framework\Public
    <Directory D:\xampp\htdocs\ucb-framework\Public>
        AllowOverride All
        Order allow,deny
        Allow from all
        <IfModule mod_authz_core.c>
        Require all granted
        </IfModule>
    </Directory>
</VirtualHost>
<VirtualHost *:80>
    DocumentRoot "D:/xampp/htdocs"
    ServerName localhost
    <Directory D:/xampp/htdocs>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>

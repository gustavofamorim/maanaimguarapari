# PHP update
sudo add-apt-repository -y ppa:ondrej/php
sudo apt-get update
sudo apt-get install -y libapache2-mod-php7.1
sudo a2dismod php5
sudo a2enmod php7.1
sudo apt-get install -y php7.1-dom
sudo apt-get install -y php7.1-mbstring
sudo apt-get install -y php7.1-zip
sudo apt-get install -y php7.1-mysql
sudo apt-get install -y php7.1-sqlite

# Project configuration

## Installing Dependencies
composer install

## Getting Laravel environment file example
wget https://raw.githubusercontent.com/laravel/laravel/master/.env.example
mv .env.example .env
php artisan key:generate

## Database Configuration
mysql-ctl install
sed -i 's|DB_DATABASE=homestead|DB_DATABASE=c9|g' .env
sed -i 's|DB_USERNAME=homestead|DB_USERNAME=gustavofamorim|g' .env
sed -i 's|DB_PASSWORD=secret|DB_PASSWORD=|g' .env
sudo sed -i 's|DocumentRoot /home/ubuntu/workspace|DocumentRoot /home/ubuntu/workspace/public|g' /etc/apache2/sites-enabled/001-cloud9.conf

phpmyadmin-ctl install

# Updating node using nvm
wget -qO- https://raw.githubusercontent.com/creationix/nvm/v0.33.2/install.sh | bash

echo "Now you need to reaload your bashrc file, install the latest node version and install dependencies."
echo "Follow the command bellow to do it:"
echo "    source ~/.bashrc && nvm install stable && npm install"

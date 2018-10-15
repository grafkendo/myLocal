#!/bin/bash
BoxVersion='1.0.2';

LBLUE='\e[94m';
RED='\e[31m';
CYN='\e[96m';
GRN='\e[92m';
NC='\e[0m';
bold=$(tput bold);
normal=$(tput sgr0); 
CHK='\xE2\x9C\x94';  
   
printf "\n\n${CYN}Setting up your environment...${NC}\n";

sudo touch /dev/null;
  
# Stopping Apach and restarting services   
printf "\nStopping Apache service in case it's running... ${NC}\n";
sudo systemctl stop apache2 &> /dev/null;
printf "${GRN}${CHK} Complete! ${NC}\n";

printf "\nRestarting Nginx... ${NC}\n";
sudo systemctl restart nginx &> /dev/null;
printf "${GRN}${CHK} Complete! ${NC}\n";

printf "\nRestarting PHP... ${NC}\n"; 
sudo systemctl restart php7.2-fpm &> /dev/null;
printf "${GRN}${CHK} Complete! ${NC}\n";

printf "\nRestarting Redis... ${NC}\n"; 
sudo systemctl restart redis &> /dev/null;
printf "${GRN}${CHK} Complete! ${NC}\n";
 
printf "\nRestarting MongoDB... ${NC}\n"; 
sudo systemctl restart mongod &> /dev/null;
printf "${GRN}${CHK} Complete! ${NC}\n"; 

printf "\nCreating directory for project files on host machine...${NC}\n";
sudo mkdir -p /var/www/html &> /dev/null;
printf "${GRN}${CHK} Complete! ${NC}\n"; 

printf "\nDownloading latest WordPress version... ${NC}\n";
sudo -u vagrant -i -- wp core download --path='/var/www/html' --version='latest' &> /dev/null;
printf "${GRN}${CHK} Complete! ${NC}\n"; 

printf "\nConfiguring WordPress database... ${NC}\n";
sudo -u vagrant -i -- wp core config --dbhost=localhost --path='/var/www/html' --dbname=wp_local --dbuser=root --dbpass=root &> /dev/null;
printf "${GRN}${CHK} Complete! ${NC}\n"; 

printf "\nModifying permissions... ${NC}\n";
chmod 644 /var/www/html/wp-config.php &> /dev/null;
sudo -u www-data -i -- wp core install --url=my.local.com --path='/var/www/html' --title="My local development environment." --admin_name=vagrant --admin_password=vagrant --admin_email=null &> /dev/null;
sudo mkdir -p /var/www/html/wp-content/uploads &> /dev/null;
sudo chgrp vagrant /var/www/html/wp-content/uploads &> /dev/null;
sudo chmod 775 /var/www/html/wp-content/uploads &> /dev/null;
printf "${GRN}${CHK} Complete! ${NC}\n";

printf "\nBox information ready... ${NC}\n";
cp /var/www/info.php /var/www/html/
cp /var/www/box.php /var/www/html/

printf "\n\n${GRN}Box is ready! Enjoy!${NC}\n\n\n";

printf "Use [vagrant ssh] to log in to your new box!\n\n";

printf "Visit ${CYN}my.local.com/info.php${NC} for server information. \n";

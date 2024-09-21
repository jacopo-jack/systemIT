#!/bin/bash
# TODO:0)remove uneeded apps and update distro
#      1)install virtual box and desired os
#      2)backup grub and other configurations
#      3)create a pseudo grub for choose and start vm
#      4) other stuffs
clear
echo "Rice linux bot"
# unistaller & updater
  echo "aggiornamento in corso..."
  sudo apt update || upgrate
  echo "disinstallazione pacchetti in corso..."
  sudo apt remove --purge libreoffice
  sudo apt remove --purge thunderbird
  sudo apt autoremove
  sudo apt clean
  sudo apt remove --purge pcmanfm 
#error handler 1
 sudo apt update || upgrade
 echo "lista pacchetti"
 dpkg --list
#virtualbox installer or other hypervisor"
 echo "installazione di virtual box in corso..."
 wget -O- https://www.virtualbox.org/download/oracle_vbox_2016.asc | sudo gpg --dearmor --yes --output /usr/share/keyrings/oracle-virtualbox-2016.gpg
 echo "deb [arch=amd64 signed-by=/usr/share/keyrings/oracle-virtualbox-2016.gpg] http://download.virtualbox.org/virtualbox/debian $(. /etc/os-release && echo "$VERSION_CODENAME") contrib" | sudo tee /etc/apt/sources.list.d/virtualbox.list
 sudo apt update || upgrate 
 
 
 
 
 
  



#!/bin/bash
echo "WSL error cleaner";
echo "Errore durante il montaggio di uno dei file System.\n Per ulteriori informazioni, eseguire ' dmesg '."
# primo step aggiornare. Secondo reiterare(ho chiesto a Gemini)
# sudo apt-get update 
# sudo apt-get upgrade
errori_presenti=1  # Inizializziamo una variabile per tenere traccia degli errori

while [[ $errori_presenti -eq 1 ]]; do
    echo "Sto cercando di risolvere gli errori di montaggio..."

    # Aggiorna i pacchetti
    sudo apt-get update && sudo apt-get upgrade

    # Controlla se ci sono ancora errori
    if dmesg | grep -iq "error mount"; then
        # Se ci sono errori, stampa un messaggio e fornisci suggerimenti
        echo "Sono stati trovati degli errori. Riproverò ad aggiornarli."
    else
        errori_presenti=0
        echo "Non sono stati trovati errori. Il sistema sembra essere stabile."
    fi
done
# configurare genericamente wsl per problemi di mount
 sudo nano /etc/wsl.conf
 sudo apt-get update
# cookie della cache duplicati verrà risolto decommentando l'unica voce di fuse?
  sudo nano /etc/fuse.conf
  sudo apt-get update && sudo apt-get upgrade
  reboot

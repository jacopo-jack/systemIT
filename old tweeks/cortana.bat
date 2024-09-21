@echo off
cd /d "%~dp0"
echo Uninstalling Contact Support...
CLS
install_wim_tweak.exe /o /l
install_wim_tweak.exe /o /c Microsoft-Windows-ContactSupport /r
install_wim_tweak.exe /h /o /l
echo Windows Contact Support should be uninstalled. Please reboot Windows 10.
pause
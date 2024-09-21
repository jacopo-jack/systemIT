@echo off
cd /d "%~dp0"
echo Uninstalling Windows Feedback...
CLS
install_wim_tweak.exe /o /l
install_wim_tweak.exe /o /c Microsoft-WindowsFeedback /r
install_wim_tweak.exe /h /o /l
echo Windows Feedback should be uninstalled. Please reboot Windows 10.
pause
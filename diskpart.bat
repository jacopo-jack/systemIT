@echo off 
echo Avviso: Questo script richiede privilegi di amministratore.
echo.

REM Controllo se lo script viene eseguito con privilegi di amministratore
net session >nul 2>&1
if %errorLevel% == 0 (
    echo Lo script viene eseguito con privilegi di amministratore.
    echo.

    REM Inserisci qui i comandi che richiedono privilegi di amministratore
    diskpart /?
    pause
) else (
    echo Avvio lo script con privilegi di amministratore...
    echo.

    REM Esegue il comando runas per avviare il file batch con privilegi di amministratore
    runas /user:Administrator "%~0"
)

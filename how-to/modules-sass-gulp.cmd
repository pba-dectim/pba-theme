@ECHO OFF

:: init
set /p numEtud= Entrez votre numero etudiant: 
mkdir %numEtud%
cd %numEtud%

:: Install Gulp globaly
call npm install gulp -g

:: Install Gulp && SASS locally
call npm install gulp
call npm install gulp-ruby-sass

:: Hack for school use
setx PATH "C:\Users\%numEtud%\AppData\Roaming\npm"
setx NODE_PATH "%AppData%\npm\node_modules"

@ECHO ON
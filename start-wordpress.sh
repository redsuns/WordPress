#!/bin/bash

#########################################################
#
#   Inicializador do WordPress
#
# Este script visa inicializar um novo tema do WordPress 
# e instalar os plugins registrados via Composer
#
#
#
#########################################################

echo ""
echo "Bem vindo ao inicializador do WordPress"
echo ""

read -p "Informe o nome do tema que deseja inicializar (O tema deve estar em formato de slug ex: meu-tema): " TEMA 

echo ""
echo "Inicializando o tema " $TEMA " aguarde um momento"
echo ""


cp -r wp-content/themes/redsuns-wordpress-base-theme wp-content/themes/$TEMA

echo "/*
Theme Name: $TEMA
Theme URI: http://underscores.me/
Author: Redsuns
Author URI: http://underscores.me/
Description: Description
Version: 1.0.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: redsuns-wordpress-base-theme
Tags:
*/" >> wp-content/themes/$TEMA/style.css

touch wp-content/themes/$TEMA/theme.css

echo "Tema inicializado com sucesso!"
echo ""

echo "Limpando o repositório antigo do git para inicializar o novo"
rm -rf .git
git init
git add .
git commit -m "Inicializado repositório com base do redsuns/WordPress"
echo "Ok"

echo "Instalando os plugins através do Composer. Isto pode demorar, que tal um café enquanto instalo tudo?"
echo ""

php composer.phar self-update
php composer.phar install --no-dev

echo ""
echo ""
echo "Finalizada instalação, tudo pronto para você desenvolver, bom trabalho!"
echo ""
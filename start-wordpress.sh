#!/bin/bash

echo ""
echo "Bem vindo ao inicializador do WordPress"
echo ""

read -p "Informe o nome do tema que deseja inicializar: O tema deve estar em formato de slug ex: meu-tema " TEMA 

echo ""
echo "Inicializando o tema " $TEMA " aguarde um momento"
echo ""


cp -r wp-content/themes/redsuns-wordpress-base-theme wp-content/themes/$TEMA

echo "Tema inicializado com sucesso!"
echo ""

echo "Instalando os plugins através do Composer. Isto pode demorar, que tal um café enquanto instalo tudo?"
echo ""

php composer.phar self-update
php composer.phar install --no-dev

echo ""
echo ""
echo "Finalizada instalação, tudo pronto para você desenvolver, bom trabalho!"
echo ""
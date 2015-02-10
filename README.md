#WordPress

Este repositório visa agilizar a inicialização de um projeto baseado no WordPress.

##O que é feito?

Este repositório mantém o core do WordPress atualizado com base no branch master do WordPress oficial, mantém a tradução para **pt_BR** atualizada e um tema de pré inicializado com base no [undescores](http://underscores.me/). Desta forma o startup de um projeto baseado em WordPress tende a ficar mais rápido fazendo com que o programador foque nas funcionalidades cruciais para o funcionamento e não em ficar reinventando a roda e configurando o WordPress a cada novo projeto.

##Como utilizar?

Clona-se o repositório e roda o script **start-wordpress.sh**. Ao rodar este script o nome do tema a se inicializar será solicitado, forneça-o e aguarde.

```shell
$  sh start-wordpress.sh 

Bem vindo ao inicializador do WordPress

Informe o nome do tema que deseja inicializar (O tema deve estar em formato de slug ex: meu-tema):{digite aqui o nome do tema}

Inicializando o tema  {nome}  aguarde um momento

Tema inicializado com sucesso!

Limpando o repositório antigo do git para inicializar o novo
Ok

Instalando os plugins através do Composer. Isto pode demorar, que tal um café enquanto instalo tudo?

You are already using composer version 020e1c214385a986e330f93a29143d7cbd1a677e.
Loading composer repositories with package information
Installing dependencies...


Finalizada instalação, tudo pronto para você desenvolver, bom trabalho!

```

##Características

 - Cria um tema pré configurado
 - Separa wp-config entre **global** e **local** para que não seja necessário ignorar as configurações entre  o ambiente de produção e de desenvolvimento
 - Instala alguns plugins comuns em diversos projetos como SEO e formulário de contato

##O que ainda não contempla?

 - Banco de dados
 - Nome correto no CSS do tema copiado
 - Geração dos salts no wp-config

# Hackers do Bem - GT-EXSS

## Tópicos

- [Instalação](#instalação)
- [Uso](#uso)
- [Como recriar a minha própria máquina virtual do projeto?](#Recriar)

## Instalação

Para instalar o projeto, siga estes passos:

1. Realize a instalação do VirtualBox ou VMWare:

    VirtualBox:

    ```bash
    https://www.virtualbox.org/wiki/Downloads
    ```
    VMWare:

    ```bash
    https://www.vmware.com/products/workstation-player/workstation-player-evaluation.html.html.html.html
    ```
Acesse as instruções de instalação através dos links acima de acordo com o sistema operacional que possui em sua máquina. 

2. Faça download da nossa máquina virtual através do site:

   ```bash
   https://pegueoprojetoaqui.com.br
    ```
   - Acesse a aba "Máquina Virtual"
   - Clique em "Fazer Download"

   Isto irá iniciar o processo de download da nossa máquina virtual

3. Adicione a máquina virtual ao gerenciador instalado (VirtualBox ou VMWare):

   - Descrever esses passos


## Uso

Após a instalação ter sido realizada corretamente, você está pronto para acessar o nosso conteúdo:

1. Ligue a máquina virtual
2. Abra o navegador Firefox
3. Digite na barra de busca na parte superior da tela "127.0.0.1"

E pronto, você já está acessando o nosso conteúdo localmente em sua própria máquina. Aproveite! Bons Estudos.

## Recriar

Esta seção é uma demontração de como configurar todo o ambiente do projeto criando uma máquina virtual do zero. Caso já tenha feito a instalação padrão no passo a passo anterior, esta seção não será necessária.

1. Realize a instalação do VirtualBox ou VMWare:

    VirtualBox:

    ```bash
    https://www.virtualbox.org/wiki/Downloads
    ```
    VMWare:

    ```bash
    https://www.vmware.com/products/workstation-player/workstation-player-evaluation.html.html.html.html
    ```
2. Escolha um sistema operacional (recomendamos que seja um sistema baseado em Unix como Ubuntu ou Debian) para criar sua máquina virtual:

    - Você deverá realizar o download da ISO deste sistema operacional em seu site oficial e realizar sua instalação no gerenciador escolhido.

3. Inicialize sua máquina virtual

    - Após ter sido realizada a instalação, ligue sua máquina virtual.

4. Faça download do servidor Apache:

    Digite o comando:

    ```bash
    sudo apt-get install apache2
    ```
    Após a instalação, inicialize o servidor:

    ```bash
    sudo service apache2 start
    ```
    Logo em seguida, acesse o navegador e digite:

    ```bash
    127.0.0.1
    ```
    Se aparecer a tela do Apache 2, a instalação foi bem sucedida.

4. Faça download do Banco de Dados MySQL:

    Digite o comando:

    ```bash
    sudo apt-get install mysql-server
    ```

    Verifique se a instalação foi bem sucedida verificando a versão do seu mysql:

    ```bash
    mysql --version
    ```

5. Execute as configurações de senha do seu mysql:

    Digite o comando:

    ```bash
    sudo mysql_secure_installation
    ```

    Selecione a tecla "Y" ou "y" para setar uma senha e logo em seguida escolha o nível da política de senha do seu banco de dados:

    0 -> Baixa
    1 -> Média
    2 -> Forte

    Lembre-se que, ao escolher um destes níveis, você deverá seguir as regras de quantidades de caracteres e adição de caracteres especiais e outros que é descrito pela política.

    Digite a senha desejada na etapa seguinte, repetindo a senha logo em seguida para confirmação.

    Para as perguntas seguintes a esta, selecione "Y" ou "y" em todas para aceitar.

6. Acesse seu mysql para verificar se a senha foi configurada corretamente:

    Digite o comando:

    ```bash
    sudo mysql -u root -p
    ```

    Digite a senha escolhida. Caso seu acesso ao mysql tenha sido executado as configurações foram realizadas corretamente.

    Para sair do mysql digite:

    ```bash
    exit
    ```

7. Faça download do PHP:

    Digite o seguinte comando:

    ```bash
    sudo apt-get install php libapache2-mod-php php-mysql
    ```

    Verifique se a intalação ocorreu bem testanto o seguinte comando:

    ```bash
    php -m | grep mysqli
    ```

    Caso o retorno seja "mysqli" a instalação está correta.

    Ative o módulo PHP no Apache:
    
    ```bash
    sudo a2enmod php
    ```

    Reinicie o Apache:

    ```bash
    sudo service apache2 restart
    ```

8. Faça download do projeto GT-EXSS a partir do Github:

    Entre na pasta Downloads:

    ```bash
    cd ~/Downloads
    ```
    Clone o repositório do projeto:

    ```bash
    git clone https://gtexssurl.com
    ```

9. Recrie a base de dados do projeto no mysql:

    Execute o comando de criação da base de dados e digite sua senha:

    ```bash
    mysql -u root -p < nomedapastagtexss/databases/database.sql
    ```

    Execute o comando para verificar se a base de dados "lojaXss" foi criada:

    ```bash
    SHOW DATABASES;
    ```
    Para sair do mysql digite:

    ```bash
    exit
    ```

    Volte para a pasta de Downloads:

    ```bash
    cd ~/Downloads
    ```

    ou 

    ```bash
    cd ../../
    ```

10. Mova toda a pasta do projeto para a pasta padrão do sistema:

    Apague a pasta html:

    ```bash
    sudo rm -r /var/www/htm
    ```

    Digite o comando:

    ```bash
    sudo mv nomedapastagtexss /var/ww/html
    ```

11. Recarregue o seu Apache2 e acesse o nevagador:

    ```bash
    sudo service apache2 restart
    ```

    Vá até o seu navegador e digite:

    ```bash
    127.0.0.1
    ```

    Pronto, você já tem o projeto GT-EXSS Hackers do Bem rodando em sua máquina virtual!



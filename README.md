# Hackers do Bem - GT-EXSS

Este repositório está vinculado ao artigo "Um Emulador Educativo de Ataques Cross-Site Scripting". O artigo foi submetido ao Salão de Ferramenta da 24º edição do Simpósio Brasileiro em Segurança da Informação e de Sistemas Computacionais.

Resumo: Este trabalho propõe um emulador de ataques Cross-Site Scripting (XSS) para o aprendizado prático em cibersegurança. O emulador permite que usuários identifiquem sítios Web vulneráveis a ataques XSS em um ambiente controlado. A identificação de vulnerabilidades se dá pela realização de atividades que são compostas por uma introdução teórica sobre o assunto da atividade, seguida de procedimentos práticos para a realização de testes de vulnerabilidade XSS em um servidor Web executado em uma máquina virtual. Ao fim da atividade, o usuário recebe sugestões de melhorias para corrigir as vulnerabilidades XSS dessa atividade. São desenvolvidas atividades para diferentes níveis de conhecimento. A particularidade do emulador proposto é a sua abordagem educativa e seu objetivo é conscientizar alunos de graduação e profissionais de TI a desenvolver sítios Web menos vulneráveis.

Você pode encontrar um vídeo de demonstração das páginas da ferramenta aqui: https://drive.google.com/drive/folders/1P-I-tWrgNDREgSetLyICa3e28z4hrqby


## Tópicos

- [Instalação](#instalação)
- [Uso](#uso)
- [Como recriar a minha própria máquina virtual do projeto?](#Recriar)

## Instalação

Para instalar o projeto, siga estes passos:

1. Realize a instalação do VirtualBox:

    VirtualBox:

    ```bash
    https://www.virtualbox.org/wiki/Downloads
    ```
Acesse as instruções de instalação através do link acima de acordo com o sistema operacional que possui em sua máquina. 

2. Faça download da nossa máquina virtual através do link:

   ```bash
   https://drive.google.com/drive/folders/1Dpi8TWZnwcbUaoh97W8wuYgVQ6S_fajf
    ```
   - Dê um duplo clique no arquivo "lubuntu_gtexss.zip" e clique para fazer download
   

   Isto irá iniciar o processo de download da nossa máquina virtual.

3. Adicione a máquina virtual ao gerenciador instalado (VirtualBox ou VMWare):

   - Após o download ser concluído, extraia o arquivo zip baixado
   - Em seguida, dê um duplo clique no arquivo "lubuntu_gtxss.vbox" para abri-lo no VirtualBox

   Isto irá adicionar nossa máquina virtual ao VirtualBox.


## Uso

Após a instalação ter sido realizada corretamente, você está pronto para acessar o nosso conteúdo:

1. Ligue a máquina virtual daso um duplo clique na máquina "lubuntu_gtxss" que aparecerá no VirtualBox
2. Abra o navegador Firefox
3. Caso não seja redirecionado automaticamente, digite na barra de busca na parte superior da tela "127.0.0.1"

E pronto, você já está acessando o nosso conteúdo localmente em sua própria máquina. Aproveite! Bons Estudos.

## Recriar

Esta seção é uma demonstração de como configurar todo o ambiente do projeto criando uma máquina virtual do zero. Caso já tenha feito a instalação padrão no passo a passo anterior, esta seção não será necessária.

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

    Selecione a tecla "Y" ou "y" para setar uma senha e logo em seguida escolha o nível da política de senha do seu banco de dados selecionando a opção 0.

    Para as perguntas seguintes a esta, selecione "Y" ou "y" em todas para aceitar.

6. Acesse seu mysql para verificar se foi configurado corretamente:

    Digite o comando:

    ```bash
    sudo mysql -u root -p
    ```

    Pressione Enter. Caso seu acesso ao mysql tenha sido executado, as configurações foram realizadas corretamente. Caso opte por escolher uma senha ao invés da autenticação padrão, use o comando:

   ```bash
   ALTER USER 'root'@'localhost' IDENTIFIED BY 'NovaSenha';
   ```
    
    Para sair do mysql digite:

    ```bash
    exit
    ```

8. Faça download do PHP:

    Digite o seguinte comando:

    ```bash
    sudo apt-get install php libapache2-mod-php php-mysql
    ```

    Verifique se a intalação ocorreu bem testanto o seguinte comando:

    ```bash
    php -m | grep mysqli
    ```

    Caso o retorno seja "mysqli" a instalação está correta.

    Reinicie o Apache:

    ```bash
    sudo service apache2 restart
    ```

9. Faça download do projeto GT-EXSS a partir do Github:

    Entre na pasta Downloads:

    ```bash
    cd ~/Downloads
    ```
    Clone o repositório do projeto:

    ```bash
    git clone https://github.com/bguarizi/emuladorXSS-HackersdoBem
    ```

10. Recrie a base de dados do projeto no mysql:

    Execute o comando de criação da base de dados e digite sua senha:

    ```bash
    sudo mysql -u root -p < emuladorXSS-HackersdoBem/database/database.sql
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

11. Mova toda a pasta do projeto para a pasta padrão do sistema:

    Apague a pasta html:

    ```bash
    sudo rm -r /var/www/html
    ```

    Digite o comando:

    ```bash
    sudo mv emuladorXSS-HackersdoBem /var/www/html
    ```

12. Recarregue o seu Apache2 e acesse o nevagador:

    ```bash
    sudo service apache2 restart
    ```

    Vá até o seu navegador e digite:

    ```bash
    127.0.0.1
    ```

    Pronto, você já tem o projeto GT-EXSS Hackers do Bem rodando em sua máquina virtual!



# cadastro-php
Sistema de cadastro de usuário e senha direto no banco de dados.
O método utilizado foi a conexão via PDO, pois é mais segura e estruturada, podendo assim se utilizar das classes para fatorar o código.
A senha salva no banco de dados ainda não está criptografada pois este foi um sistema simples mas é simples implementar esta funcionalidade, o próprio php oferece uma função: md5() que criptografa a senha, ou podemos utilizar outras formas mais seguras de hash e criptografia, oque não é o caso no momento.
Apenas está funcional a tela de cadastro, logo que você efetuar o cadastro você é redirecionado para a tela de login, mas como já disse o foco desse sistema, inicialmente, é apenas para cadastro.

0 - clone ou baixe este projeto e mova para o htdocs, dentro do Xampp ou Lampp.
1 - Crie seu banco de dados e coloque o nome na variavel $db no conexao.php.
2 - Inicie seu Xampp/Lampp ou seu servidor de forma manual(PHP, MySQL, APACHE).
3 - Rode em seu navegador: localhost/cadastro-php

Vídeo do sistema em funcionamento: https://youtu.be/aiVFiakra70?si=c22s-Pg7mw76oQUW

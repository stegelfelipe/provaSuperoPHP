#TaskList em PHP - Prova Supero Tecnologia

Aplicação Simples para gerenciar tarefas, onde poderá se cadastrar e criar suas próprias tarefas, podendo visualizá-las, editá-las, excluí-las, concluí-las, e reabrí-las. 

- Está sendo utilizado o MySQL/MariaDB como Banco de Dados;
- Está sendo utilizado framework frontend Bootstrap e Jquery;
- E para backend framework CodeIgniter versão 3.1.3;


**************************
Instalação
**************************
-  `Ter no minimo o PHP 5.6;`

-  `Criar um .htaccess na raiz do sistema com o código abaixo:`
```
RewriteEngine on
RewriteCond $1 !^(index\.php|assets|robots\.txt)
RewriteRule ^(.*)$ index.php/$1 [L]
```

-  `Após obter a aplicação abra o arquivo {application/config/config.php} e altere a linha 26 de acordo com o endereço web da aplicação onde você instalar;`

-  `Crie um banco de dados e importe o arquivo {database/database.sql}, lembre-se de remover esse arquivo para que o mesmo não fique disponível.`

-  `Altere o seu arquivo {application/config/database.php} de acordo com a configuração de seu banco de dados.`

Para acessar a aplicação online, acesse: https://tasklistsupero.000webhostapp.com/

**************************
ScreenShots do Projeto
**************************
- Listagem de tarefas: http://prntscr.com/j66x7v
- Listagem de tarefas concluídas: http://prntscr.com/j66xem
- Adicionar nova tarefa: http://prntscr.com/j66xll
- Edição de tarefa: http://prntscr.com/j66xsi

# Sua Como Éter

Trabalho de aula desenvolvido para a disciplina de Análise e Modelagem de Sistemas do Curso Técnico Integrado ao Ensino Médio em Informática para Internet, IFRS - Campus Bento Gonçalves.

Para utilizar o sistema, é necessário criar ou editar dois arquivos dentro do diretório app/Config:

DataBase.php:

```
<?php

namespace Config;

class DataBase
{
    public static $driver = 'mysql';
    public static $host = 'localhost';
    public static $username = 'root';
    public static $password = '123';
    public static $database = 'suacomoeter';
    public static $charset = 'UTF8';
}
```

Server.php:

```
<?php
/**
 * Created by PhpStorm.
 * User: ggcorrea
 * Date: 10/10/16
 * Time: 08:33
 */

define('APP_DIR', 'app'); // diretório das classes e arquivos da Model, View e Controller
define('APP_NAME', 'Sua Como Éter'); // nome da aplicação
define('ASSETS_DIR', 'assets'); // diretório do JS, CSS e fontes
define('PROTOCOL', 'http'); // ou https
define('WEB_ROOT', PROTOCOL . '://' . $_SERVER['HTTP_HOST'] . '/sua-como-eter'); // caminho da raiz da aplicação (não do sistema)
define('SERVER_DIR', '/var/www/html/sua-como-eter'); // diretório da aplicação dentro do sistema
```

Alguns valores das constantes do arquivo `Server.php` talvez não seja necessário se alterar.
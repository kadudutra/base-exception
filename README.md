# BaseException

[![License](https://img.shields.io/badge/license-MIT-green)](https://github.com/GustavoSantosBr/)
[![Minimum PHP Version](https://img.shields.io/badge/php-%5E7.3.6-blue)](https://php.net/)

Esta biblioteca é destinada a fornecer uma implementação customizada
de exceções. 

## Instalação

Execute o comando:
```bash
composer require gustavosantos/base-exception
```
## Implementação

- Para criar sua exceção personalizada, basta extender ***BaseException***.

```php
<?php

declare(strict_types=1);

namespace Person\Exception;

use Exception\BaseException;

class PersonException extends BaseException
{

}
```

- Depois de criada a exceção, basta lançar: 

```php
throw new PersonException(StatusHttp::INTERNAL_SERVER_ERROR, "Ocorreu um erro ao xxxxxxxx!");
```

- Os parâmetros aceitos pelo construtor do  ***BaseException*** são:

    - $statusCode (**int**): Status de requisição http.
    - $messageError (**string** ou **null**): Mensagem de erro (para o usuário).
    - $internalMessageError (**strig** ou **null**): Mensagem de erro adicional (para o desenvolvedor).
    - $internalCodeError (**int** ou **null**): Status de erro interno (para o desenvolvedor).
    - $arrayMessageError (**array** ou **null**): Aceita um erro array de erros.
    

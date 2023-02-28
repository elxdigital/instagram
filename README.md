# Correios SDK

[![Maintainer](http://img.shields.io/badge/maintainer-@elxdigital-blue.svg?style=flat-square)](https://twitter.com/elxdigital)
[![Source Code](http://img.shields.io/badge/source-elxdigital/instagram-blue.svg?style=flat-square)](https://github.com/elxdigital/instagram)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/elxdigital/instagram.svg?style=flat-square)](https://packagist.org/packages/elxdigital/instagram)
[![Latest Version](https://img.shields.io/github/release/elxdigital/instagram.svg?style=flat-square)](https://github.com/elxdigital/instagram/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/elxdigital/instagram.svg?style=flat-square)](https://scrutinizer-ci.com/g/elxdigital/instagram)
[![Quality Score](https://img.shields.io/scrutinizer/g/elxdigital/instagram.svg?style=flat-square)](https://scrutinizer-ci.com/g/elxdigital/instagram)
[![Total Downloads](https://img.shields.io/packagist/dt/elxdigital/instagram.svg?style=flat-square)](https://packagist.org/packages/celxdigital/instagram)

###### A simple and fast integration with the Instagram integration feed developed in PHP

Uma simples e rápida integração com o feed de integração do Instagram desenvolvido em PHP

### Highlights

- Simple installation (Instalação simples)
- Simple and fast use (Uso simples e rápido)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Uploader is available via Composer:

```bash
"elxdigital/instagram": "^1.0"
```

or run

```bash
composer require elxdigital/instagram
```

## Documentation

###### For details on how to use, see a sample folder in the component directory. In it you will have an example of use for each class. It works like this:

Para mais detalhes sobre como usar, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. Ele funciona assim:

#### User endpoint:

```php
<?php

require __DIR__ . "/../vendor/autoload.php";

define('INSTAGRAM_TOKEN', '<YOUR_TOKEN help="manual.md"/>');

$instagram = new ElxDigital\Instagram\Services\Media(INSTAGRAM_TOKEN);
$medias = $instagram->getMedia();

if (!empty($medias)) {
    foreach ($medias as $media) {
        if ($media->media_type == 'IMAGE') {
            echo "<img src='{$media->media_url}' alt='{$media->caption}' width='200'>";
        }
    }
}
```

## Contributing

Please see [CONTRIBUTING](https://github.com/elxdigital/uploader/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email desenvolvimento@ellox.com.br instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para desenvolvimento@ellox.com.br em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Ellox Digital](https://github.com/elxdigital) (Team)
- [All Contributors](https://github.com/elxdigital/instagram/contributors) (This Rock)

## License

The MIT License (MIT). Please see [License File](https://github.com/elxdigital/instagram/blob/master/LICENSE) for more information.
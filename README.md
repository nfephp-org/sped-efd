# sped-efd

## EM DESENVOLVIMENTO !!! não util ...

Classes para a geração do SPED EFD (fiscal ICMS IPI) e para o SPED EFD contribuições

## IMPORTANTE

- A finalidade desse projeto é APENAS fornecer os meios para criar os arquivos EFD ICMS/IPI e contribuições a partir de dados formecidos pelo sistema ERP.
- É necessario que os dados já estejam previamente tratados e consolidados internamente no ERP antes da geração dos arquivos de transmissão.
- Para entender o processo de montagem dos arquivos de envio, é OBRIGATÓRIO o conhecimento sobre esses dados e o estudo da documentação da Receita Federal. 
- Haverão centenas de classes !!! uma para cada elemento de um bloco, esses elementos poderão ser unicos, varios, obrigatórios ou não dependendo de uma série de condições, que não serão gerenciadas por esse construtor.
- O processo de montagem dos blocos é complexo e irá requerer tempo de processamento e memória, tendo em vista o volume de dados que poderá existir.  
- Após a geração do arquivo o mesmo deve ser validado pelo validador oficial da Receita e transmitido pelo Receitanet, não é possivel a validação automática nem o envio automatico por webservice

*Utilize o chat do Gitter para iniciar discussões específicas sobre o desenvolvimento deste pacote.*

[![Chat][ico-gitter]][link-gitter]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Code Intelligence Status](https://scrutinizer-ci.com/g/nfephp-org/sped-efd/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

[![Latest Stable Version][ico-stable]][link-packagist]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![License][ico-license]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]

[![Issues][ico-issues]][link-issues]
[![Forks][ico-forks]][link-forks]
[![Stars][ico-stars]][link-stars]



## Detalhes dos Campos

Todos os campos "C" strings apenas com caracteres ASCII, não são permitidos outro charsets, preferencialmente em "MAIUSCULAS"

Todos os campos "N" apenas numericos como:

$ 1.129.998,99 => 1129998,99

1.255,42 => 1255,42

234,567 => 234,567

10.000 => 10000

10.000,00 => 10000 ou 10000,00

17,00 % => 17,00 ou 17

18,50 % => 18,5 ou 18,50

30 => 30

1.123,456 Kg => 1123,456

0,010 litros => 0,010

0,00 => 0 ou 0,00

0 => 0

campo vazio => 

Observando o numero de decimais em cada caso



## Credits

Roberto L. Machado (owner and developer)

## License

Este pacote está diponibilizado sob LGPLv3 ou MIT License (MIT). Leia  [Arquivo de Licença](LICENSE.md) para maiores informações.

[ico-stable]: https://poser.pugx.org/nfephp-org/sped-efd/version
[ico-stars]: https://img.shields.io/github/stars/nfephp-org/sped-efd.svg?style=flat-square
[ico-forks]: https://img.shields.io/github/forks/nfephp-org/sped-efd.svg?style=flat-square
[ico-issues]: https://img.shields.io/github/issues/nfephp-org/sped-efd.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/nfephp-org/sped-efd/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/nfephp-org/sped-efd.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/nfephp-org/sped-efd.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/nfephp-org/sped-efd.svg?style=flat-square
[ico-version]: https://img.shields.io/packagist/v/nfephp-org/sped-efd.svg?style=flat-square
[ico-license]: https://poser.pugx.org/nfephp-org/nfephp/license.svg?style=flat-square
[ico-gitter]: https://img.shields.io/badge/GITTER-4%20users%20online-green.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/nfephp-org/sped-efd
[link-travis]: https://travis-ci.org/nfephp-org/sped-efd
[link-scrutinizer]: https://scrutinizer-ci.com/g/nfephp-org/sped-efd/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/nfephp-org/sped-efd
[link-downloads]: https://packagist.org/packages/nfephp-org/sped-efd
[link-author]: https://github.com/nfephp-org
[link-issues]: https://github.com/nfephp-org/sped-efd/issues
[link-forks]: https://github.com/nfephp-org/sped-efd/network
[link-stars]: https://github.com/nfephp-org/sped-efd/stargazers
[link-gitter]: https://gitter.im/nfephp-org/sped-efd?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge

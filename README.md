# sped-efd

Classes para a geração do SPED EFD (fiscal)


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


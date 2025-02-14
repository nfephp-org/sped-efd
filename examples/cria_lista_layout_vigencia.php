<?php

$layouts = [
    '002' => ['versao' => '1.01', 'inicio' => '01012009', 'fim' => '31122009'],
    '003' => ['versao' => '1.02', 'inicio' => '01012010', 'fim' => '31122010'],
    '004' => ['versao' => '1.03', 'inicio' => '01012011', 'fim' => '31122011'],
    '005' => ['versao' => '1.04', 'inicio' => '01012012', 'fim' => '30062012'],
    '006' => ['versao' => '1.05', 'inicio' => '01072012', 'fim' => '31122012'],
    '007' => ['versao' => '1.06', 'inicio' => '01012013', 'fim' => '31122013'],
    '008' => ['versao' => '1.07', 'inicio' => '01012014', 'fim' => '31122014'],
    '009' => ['versao' => '1.08', 'inicio' => '01012015', 'fim' => '31122015'],
    '010' => ['versao' => '1.09', 'inicio' => '01012016', 'fim' => '31122016'],
    '011' => ['versao' => '1.10', 'inicio' => '01012017', 'fim' => '31122017'],
    '012' => ['versao' => '1.11', 'inicio' => '01012018', 'fim' => '31122018'],
    '013' => ['versao' => '1.12', 'inicio' => '01012019', 'fim' => '31122019'],
    '014' => ['versao' => '1.13', 'inicio' => '01012020', 'fim' => '31122020'],
    '015' => ['versao' => '1.14', 'inicio' => '01012021', 'fim' => '31122021'],
    '016' => ['versao' => '1.15', 'inicio' => '01012022', 'fim' => '31122022'],
    '017' => ['versao' => '1.16', 'inicio' => '01012023', 'fim' => '31122023'],
    '018' => ['versao' => '1.17', 'inicio' => '01012024', 'fim' => ''],
];

file_put_contents(__DIR__.'/../storage/layouts/ICMSIPI/vigencias.json', json_encode($layouts, JSON_PRETTY_PRINT));

$layouts = [
    '002' => ['versao' => '101', 'inicio' => '01012011', 'fim' => '30062012'],
    '003' => ['versao' => '101', 'inicio' => '01072012', 'fim' => '31052018'],
    '004' => ['versao' => '101', 'inicio' => '01062018', 'fim' => '31122018'],
    '005' => ['versao' => '101', 'inicio' => '01012019', 'fim' => '31122019'],
    '006' => ['versao' => '101', 'inicio' => '01012020', 'fim' => '']
];

file_put_contents(__DIR__.'/../storage/layouts/Contribuicoes/vigencias.json', json_encode($layouts, JSON_PRETTY_PRINT));

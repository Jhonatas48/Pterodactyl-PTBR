<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'notices' => [
        'created' => 'Um novo nest, :name, foi criado com sucesso!.',
        'deleted' => 'O nest selecionado foi excluido do painel.',
        'updated' => 'As opções de configuração do nest foram atualizadas com sucesso.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Importado com sucesso o egg e suas variáveis associadas.',
            'updated_via_import' => 'Este egg foi atualizado usando o arquivo fornecido.',
            'deleted' => 'O egg foi removido com sucessso do painel.',
            'updated' => 'As configurações do egg foi atualizado com sucesso',
            'script_updated' => 'O script de instalação do Egg foi atualizado e será executado sempre que os servidores forem instalados.',
            'egg_created' => 'Um egg ovo foi colocado com sucesso. Você precisará reiniciar todos os daemons em execução para aplicar este novo ovo.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'A variavel ":variable" foi excluída e não estará mais disponível para os servidores após a reconstrução.',
            'variable_updated' => 'A variavel ":variable" foi atualizada. Você precisará reconstruir todos os servidores usando esta variável para aplicar as alterações.',
            'variable_created' => 'Nova variável foi criada com sucesso e atribuída a este egg.',
        ],
    ],
];

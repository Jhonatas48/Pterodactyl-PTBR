<?php
/**
 * Pterodactyl - Panel
 * Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com>.
 *
 * This software is licensed under the terms of the MIT license.
 * https://opensource.org/licenses/MIT
 */

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Você está tentando excluir a alocação padrão para este servidor, mas não há alocação mais para usar.',
        'marked_as_failed' => 'Este servidor teve falha em uma instalação anterior.Portanto não é possível mudar de estado',
        'bad_variable' => 'Ocorreu um erro de validação com a variável :name.',
        'daemon_exception' => 'Houve uma exceção ao tentar se comunicar com o daemon, resultando em um código de resposta HTTP/:code. Esta exceção foi registrada.',
        'default_allocation_not_found' => 'A alocação padrão solicitada não foi encontrada nas alocações deste servidor.',
    ],
    'alerts' => [
        'startup_changed' => 'A configuração de inicialização para este servidor foi atualizada. Se o nest ou egg deste servidor foi alterado, uma reinstalação ocorrerá agora.',
        'server_deleted' => 'O servidor foi excluído com sucesso do sistema.',
        'server_created' => 'O servidor foi criado com sucesso no painel. Por favor, aguarde alguns minutos para que o daemon instale completamente este servidor.',
        'build_updated' => 'Os detalhes de compilação para este servidor foram atualizados. Algumas alterações podem exigir uma reinicialização para entrar em vigor.',
        'suspension_toggled' => 'O status de suspensão do servidor foi alterado para :status.',
        'rebuild_on_boot' => 'Este servidor foi marcado como exigindo uma reconstrução do Docker Container. Isso acontecerá na próxima vez que o servidor for iniciado.',
        'install_toggled' => 'O status de instalação deste servidor foi alternado.',
        'server_reinstalled' => 'Este servidor foi colocado na fila para uma reinstalação a partir de agora.',
        'details_updated' => 'Os detalhes do servidor foram atualizados com sucesso.',
        'docker_image_updated' => 'A imagem padrão do Docker foi alterada com êxito para este servidor. Uma reinicialização é necessária para aplicar essa alteração.',
        'node_required' => 'Você deve ter pelo menos um node configurado antes de poder adicionar um servidor a este painel.',
    ],
];

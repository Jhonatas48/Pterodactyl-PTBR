<?php

return [
    'validation_error' => 'Ocorreu um erro com um ou mais campos na solicitação.',
    'errors' => [
        'return' => 'Retornar para a página anterior',
        'home' => 'Ir para início',
        '403' => [
            'header' => 'Proibido',
            'desc' => 'Você não tem permissão para acessar este recurso neste servidor.',
        ],
        '404' => [
            'header' => 'File Not Found',
            'desc' => 'Não foi possível localizar o recurso solicitado no servidor.',
        ],
        'installing' => [
            'header' => 'Instalando servidor',
            'desc' => 'O servidor solicitado ainda está concluindo o processo de instalação. Verifique novamente em alguns minutos. Você receberá um e-mail assim que esse processo for concluído.',
        ],
        'suspended' => [
            'header' => 'Servidor suspenso',
            'desc' => 'Esse servidor foi suspenso e não pode ser acessado.',
        ],
        'maintenance' => [
            'header' => 'Host em Manutenção',
            'title' => 'Indisponível Temporariamente',
            'desc' => 'Este host está em manutenção, portanto, seu servidor não pode ser acessado temporariamente.',
        ],
    ],
    'index' => [
        'header' => 'Seus servidores',
        'header_sub' => 'Servidores aos quais você tem acesso.',
        'list' => 'Lista de Servidores',
    ],
    'api' => [
        'index' => [
            'list' => 'Suas Chaves',
            'header' => 'API da conta',
            'header_sub' => 'Gerencie chaves de acesso que permitem executar ações no painel.',
            'create_new' => 'Criar Nova chave de API',
            'keypair_created' => 'Uma chave de API foi gerada com sucesso e está listada abaixo.',
        ],
        'new' => [
            'header' => 'Nova Chave de API',
            'header_sub' => 'Crie uma nova chave de acesso à conta.',
            'form_title' => 'Detalhes',
            'descriptive_memo' => [
                'title' => 'Descrição',
                'description' => 'Digite uma breve descrição dessa chave que será útil para referência.',
            ],
            'allowed_ips' => [
                'title' => 'Allowed IPs',
                'description' => 'Digite uma lista delimitada por linha de IPs com permissão para acessar a API usando essa chave. A notação CIDR é permitida. Deixe em branco para permitir qualquer IP.',
            ],
        ],
    ],
    'account' => [
        'details_updated' => 'Os detalhes da sua conta foram atualizados com sucesso.',
        'invalid_password' => 'A senha fornecida para sua conta não era válida.',
        'header' => 'Sua conta',
        'header_sub' => 'Gerencie a sua conta.',
        'update_pass' => 'Atualizar senha',
        'update_email' => 'Atualizar email',
        'current_password' => 'Senha Atual',
        'new_password' => 'Nova Senha',
        'new_password_again' => 'Repita a nova senha',
        'new_email' => 'Novo email',
        'first_name' => 'Primeiro Nome',
        'last_name' => 'Último Nome',
        'update_identity' => 'Atualizar identidade',
        'username_help' => 'Seu nome de usuário deve ser exclusivo da sua conta e pode conter apenas os seguintes caracteres: :requirements.',
        'language' => 'Idioma',
    ],
    'security' => [
        'session_mgmt_disabled' => 'Seu host não ativou a capacidade de gerenciar sessões da conta por meio dessa interface.',
        'header' => 'Segurança da Conta',
        'header_sub' => 'Controlar sessões ativas e autenticação de 2-Fatores.',
        'sessions' => 'Sessões Ativas',
        '2fa_header' => 'Autenticação de 2-Fatores',
        '2fa_token_help' => 'Digite o token 2FA gerado pelo seu aplicativo (Google Authenticator, Authy, etc.).',
        'disable_2fa' => 'Desabilitar Autenticação de 2-Fatores',
        '2fa_enabled' => 'A autenticação de 2-Fatores está ativada nesta conta e será necessária para fazer login no painel. Se você deseja desativar o 2FA, basta inserir um token válido abaixo e enviar o formulário.',
        '2fa_disabled' => 'A autenticação de 2-Fatores está desativada em sua conta! Você deve ativar o 2FA para adicionar um nível extra de proteção à sua conta.',
        'enable_2fa' => 'Habilitar Autenticação de 2-Fatores',
        '2fa_qr' => 'Configure 2FA no seu dispositivo',
        '2fa_checkpoint_help' => 'Use o aplicativo 2FA no telefone para tirar uma foto do código QR à esquerda ou digite manualmente o código abaixo dele. Depois de fazer isso, gere um token e digite-o abaixo.',
        '2fa_disable_error' => 'O token 2FA fornecido não era válido. A proteção não foi desativada para esta conta.',
    ],
];

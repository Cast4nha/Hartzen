# Hartzen - Website Corporativo

Website institucional da Hartzen, especializada em transformação digital B2B.

## Requisitos

- PHP 8.1 ou superior
- Servidor Apache com mod_rewrite habilitado
- Acesso SFTP ao servidor

## Estrutura do Projeto

```
.
├── app/
│   ├── Controllers/    # Controladores PHP
│   ├── Models/         # Modelos de dados
│   └── Views/          # Templates de visualização
├── config/            # Arquivos de configuração
├── public/            # Arquivos públicos
│   ├── css/          # Arquivos CSS
│   ├── js/           # Arquivos JavaScript
│   └── images/       # Imagens e recursos
└── README.md         # Este arquivo
```

## Instalação

1. Configure o PHP 8.1 no cPanel:
   - Acesse o cPanel
   - Vá para "Select PHP Version"
   - Selecione PHP 8.1

2. Upload via SFTP:
   - Conecte ao servidor usando suas credenciais SFTP
   - Faça upload dos arquivos para o diretório `public_html`
   - Certifique-se de que as permissões dos arquivos estejam corretas:
     - Diretórios: 755
     - Arquivos: 644

3. Configuração do Apache:
   - Verifique se o mod_rewrite está habilitado
   - O arquivo .htaccess já está configurado na pasta public/

4. Configuração de Email:
   - Configure o PHP mail() no cPanel
   - Ou ajuste as configurações SMTP no arquivo config/config.php

## Desenvolvimento

Para desenvolvimento local:

1. Clone o repositório
2. Configure um servidor Apache local
3. Aponte o DocumentRoot para a pasta `public/`
4. Inicie o servidor PHP: `php -S localhost:8000 -t public`

## Manutenção

- Os arquivos de conteúdo estão em `app/Views/`
- Estilos CSS em `public/css/main.css`
- JavaScript em `public/js/main.js`
- Configurações gerais em `config/config.php`

## Segurança

- Todas as entradas de usuário são sanitizadas
- CSRF protection implementado
- Arquivos sensíveis protegidos via .htaccess
- HTTPS forçado

## Contato

Para suporte ou dúvidas, entre em contato:
- Email: contato@hartzen.com.br 
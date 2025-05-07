#!/bin/bash

# Criar diretório temporário
mkdir -p ~/temp_hartzen

# Mover todos os arquivos para o diretório temporário
mv ~/public_html/* ~/temp_hartzen/

# Recriar a estrutura correta
mkdir -p ~/public_html/app
mkdir -p ~/public_html/config

# Mover os arquivos da pasta public para public_html
mv ~/temp_hartzen/public/* ~/public_html/

# Mover os outros diretórios para seus lugares corretos
mv ~/temp_hartzen/app/* ~/public_html/app/
mv ~/temp_hartzen/config/* ~/public_html/config/

# Mover arquivos da raiz
mv ~/temp_hartzen/.htaccess ~/public_html/
mv ~/temp_hartzen/.editorconfig ~/public_html/
mv ~/temp_hartzen/.gitignore ~/public_html/
mv ~/temp_hartzen/README.md ~/public_html/

# Limpar diretório temporário
rm -rf ~/temp_hartzen

# Ajustar permissões
find ~/public_html -type d -exec chmod 755 {} \;
find ~/public_html -type f -exec chmod 644 {} \;

echo "Reorganização concluída!" 
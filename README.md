# nanodegreePhpMongoDB
Projeto referente ao Nanodegree MongoDB - Introdução Prática da faculdade Impacta 

## Instalação
para instalar o MongoDB foi necessário acessar esse [site](https://www.mongodb.com/try/download/community) e instalar a versão para windows X64 e **MongoDB** na versão: 7.0.16 no formato MSI. E para melhor visualização durante a instalação também foi baixado o MongoDB Compass.

## MongoDB Comandos
- Para criar um usuário:
```bash
db.createUser({user:"admin", pwd:"senhaDesejada", roles:[{role:"root", db:"admin"}]})
```

- Para retornar todos os usuários criados:
```bash
db.getUsers()
```

- Para autenticar um usuário no banco de dados atual:
```bash
db.auth('admin', 'senhaDesejada')
```

- Para criar um novo usuário no banco de dados atual somente com permissão de leitura e escrita:
```bash
db.createUser({user:"leitor", pwd:"senhaDesejada", roles:["readWrite"]})
```

- Para remover um usuário específico do banco de dados atual:
```bash
db.dropUser('admin')
```

## Versão
**MongoDB** - 7.0.16
**PHP** - 8.3
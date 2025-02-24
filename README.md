# nanodegreePhpMongoDB
Projeto referente ao Nanodegree MongoDB - Introdução Prática da faculdade Impacta 

## Instalação
para instalar o MongoDB foi necessário acessar esse [site](https://www.mongodb.com/try/download/community) e instalar a versão para windows X64 e **MongoDB** na versão: 7.0.16 no formato MSI. E para melhor visualização durante a instalação também foi baixado o MongoDB Compass.

## Códigos
- **testes**
    - **teste.php**: Contém um código que exibirá um hello-wolrd e as informações do php para saber que a instalação do php esta correta.

    - **testeMongo.php**: Fazendo conexão com o banco de dados MongoDB.

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

- Selecionando o banco de dados classedb:
```bash
use classedb
```

- Criando uma Coleção no MongoDB
```bash
db.createCollection('turma')
```

- Para verificar a coleção criada, utilize o comando:
```bash
show collections
```

- Para remover a coleção turma utilize o comando:
```bash
db.turma.drop() 
```

- Outra forma de adicionar uma coleção é inserindo um documento na coleção mesmo que esta ainda não exista:
```bash
db.alunos.insertOne({‘nome’:’Marcos’})
db.alunos.insertOne({'nome':'Pedro','turma':'Python','nota': 10})
db.alunos.insertOne({'nome':'Maria', 'turma':'MySQL','nota': 7})
db.alunos.insertOne({'nome': 'Carolina',	'sobrenome': 'Ferreira','sexo': 'feminino','idade': 29,	'email': 'carol@yahoo.com', 'materias': ['MongoDB','Riak','Java'], 	'notas': {'MongoDB': 10, 'Riak': 8, 'Java': 9}})

db.alunos.insertOne({'nome': 'Juliana','sobrenome': 'Silva','sexo': 'feminino','idade': 21,'materias': ['Riak','Python']})
```

- Comando para buscar documentos em uma coleção:
```bash
db.alunos.find()
```

- Melhorando a apresentação dos documentos utilizando o pretty():
```bash
db.alunos.find().pretty();
```

- Comando para listar somente o primeiro documento:
```bash
db.alunos.findOne()
```


- Comando para contar o número de documentos em uma coleção:
```bash
db.alunos.count()
```

- Listando apenas o registro da Carolina
```bash
db.alunos.find({'nome':'Carolina'}).pretty()
db.alunos.find({sexo:'feminino'})
db.alunos.find({materias:'MongoDB'})
db.alunos.find({'materias':'MongoDB', 'sexo':‘feminino'})
```

- Atualizando um documento
```bash
db.alunos.update({'nome':'Carolina'},{$set:  {'sobrenome':'Ferreira Martins'}})
```

- Atualizando todos os documentos que atendem ao filtro
```bash
db.alunos.update({ },{ $set: { 'aprovado': true  } },{ multi: true })
```

- Removendo um documento
```bash
db.alunos.remove({'sobrenome':'Ferreira Martins'})
```

## Versão
**MongoDB** - 7.0.16
**PHP** - 8.3
# SISTEMA DE CONTATO

Assuntos

### **Frameworks:**
- Laravel 8
- Vue 2
- Vuetify

### **GIT:**
- [https://github.com/tisomar/grancursos.git](https://github.com/tisomar/grancursos.git)

### **Desenvolvedor:**
- Tiago de Souza Marques Rodrigues - [tisomar@gmail.com](mailto:tisomar@gmail.com)

---

### **Pré-requisitos**
```
Docker
docker-compose
```
### **BUILD DOCKER**

```
docker-compose up -d --build

Comandos para acompanhar a subida dos containers:

docker logs grancursos-cliente --follow
docker logs grancursos-servico --follow
docker logs grancursos-bd --follow

Obs: É necessário acompanhar o log até o fim a instalação das dependências do container cliente.

```

### ** ROTA ** ###

assunto: [http://localhost:8080/api/grancursos/assunto](http://localhost:8080/api/grancursos/assunto)
banca: [http://localhost:8080/api/grancursos/banca](http://localhost:8080/api/grancursos/banca)
orgao: [http://localhost:8080/api/grancursos/orgao](http://localhost:8080/api/grancursos/orgao)

### ** BANCO DE DADOS ** ###


| Acesso Banco de Dados |          |
|---------------|---------------          | 
| **Host**             | localhost        |
| **Porta**            | 3606             |
| **banco de dados**   | grancursos     |
| **Usuário**          | grancursos     |
| **Senha**            | grancursos     |

----

### **TABELAS DO SISTEMA** ### 

|                   |
|-------------------|
| assuntos 		    |
| assuntos_filhos   |
| bancas 		    |
| orgaos 		    |
| questoes 		    |



## Sistema de Registro de Pontos Online em PHP (Em Desenvolvimento)

Este projeto consiste em um sistema web em desenvolvimento, desenvolvido em PHP para facilitar o registro de pontos online. O sistema permitirá que os usuários entrem no sistema web, onde a hora e a data serão automaticamente capturadas, e eles poderão confirmar a forma do ponto - entrada, saída ou almoço.

### Funcionalidades Planejadas
- **Registro Automático de Hora e Data:** O sistema capturará automaticamente a hora e a data quando o usuário entrar no sistema web, eliminando a necessidade de entrada manual.
- **Opções de Registro de Ponto:** Os usuários poderão selecionar entre as opções de registro de ponto, como entrada, saída ou almoço, facilitando o controle do tempo de trabalho.

### Como Usar
1. **Acesso ao Sistema:** Os usuários deverão acessar o sistema web usando suas credenciais de login.
   
2. **Registro de Ponto:** Após o acesso, a hora e a data atuais serão automaticamente capturadas. Os usuários poderão então selecionar a forma do ponto - entrada, saída ou almoço - e confirmar o registro.

3. **Visualização do Registro:** Os registros de pontos serão armazenados no banco de dados e poderão ser visualizados posteriormente pelos usuários ou pelos administradores do sistema.

### Pré-requisitos
- Servidor web (como Apache) com suporte a PHP
- Banco de dados MySQL (ou outro banco de dados compatível com PHP)

### Configuração
1. **Importação do Banco de Dados:** Importe o arquivo SQL fornecido (`database.sql`) para criar a estrutura do banco de dados necessária.

2. **Configuração do Banco de Dados:** Edite o arquivo `config.php` para configurar as credenciais de acesso ao banco de dados.

3. **Hospedagem do Sistema:** Hospede os arquivos do sistema em um servidor web compatível com PHP.

### Observação
Este projeto ainda está em desenvolvimento. Recomenda-se não utilizar em produção até que uma versão estável seja lançada.


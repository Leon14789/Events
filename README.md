![Header](public/assets/images/header.png)

# Sistema de Gestão de Eventos e Atividades - ETEC Elias Miguel Junior

## Descrição do Projeto

O presente sistema tem como objetivo otimizar e automatizar os processos de inscrição e organização de eventos e atividades na **Escola Técnica Elias Miguel Junior**. Tradicionalmente, a gestão de eventos envolvia a criação manual de fichas de inscrição, o controle de vagas e a elaboração de listas de chamada por meio de planilhas no Excel. Com a implementação deste sistema, todos esses processos são centralizados e automatizados, proporcionando maior eficiência, precisão e praticidade para a equipe organizadora.

A plataforma permite a criação de eventos e a atribuição de atividades a eles, com a possibilidade de definir um número específico de vagas por atividade. Além disso, o sistema gera automaticamente as listas de chamada dos alunos participantes, facilita a verificação de inscrições e proporciona diversas outras funcionalidades essenciais para a gestão de eventos escolares.

### Funcionalidades Principais

- **Criação de Eventos e Atribuição de Atividades**: O administrador pode criar eventos, associar atividades a esses eventos e determinar a quantidade de vagas por atividade.
  
- **Inscrições Automatizadas**: O sistema permite que os alunos se inscrevam automaticamente, evitando a necessidade de registros manuais.

- **Geração de Lista de Chamada**: Para cada atividade, o sistema gera uma lista de chamada com os alunos inscritos, permitindo a verificação e o controle de presença.

- **Verificação de Inscrições**: O sistema permite ao administrador verificar e confirmar a participação dos alunos nas atividades, garantindo a organização e a precisão nas informações.

- **Painel Administrativo**: O sistema conta com um painel administrativo onde o administrador pode gerenciar eventos, atividades e usuários, criando novos posts de eventos, gerenciando inscrições e acessando relatórios.

- **Responsividade**: O sistema é completamente responsivo, garantindo que ele seja acessível e funcional tanto em computadores quanto em dispositivos móveis (smartphones e tablets).

## Tecnologias Utilizadas

- **Frontend**: O frontend foi desenvolvido utilizando **HTML**, **CSS**, **JavaScript** e **React** para garantir uma interface de usuário dinâmica e intuitiva.
  
- **Backend**: O backend do sistema foi desenvolvido utilizando **Node.js** e **Express.js**, permitindo uma estrutura robusta e escalável.

- **Banco de Dados**: Utilizamos **MongoDB** para armazenamento de dados, garantindo alta disponibilidade e performance nas operações de leitura e escrita.

- **Responsividade**: A interface é desenvolvida com **Bootstrap** e técnicas de **CSS Grid** e **Flexbox**, assegurando a adaptação do layout para diferentes dispositivos.

## Endpoints

- **/login**: Endpoint para acesso ao painel administrativo. Requer autenticação de usuário com privilégios administrativos.

- **/RegisterNewAdm**: Endpoint para a criação de novos usuários administradores. Apenas usuários com privilégios de administrador podem acessar este endpoint.

## Instruções de Uso

1. **Acesso ao Sistema**: Para acessar o painel administrativo, o usuário deve utilizar o endpoint **/login**. Após o login, será possível criar, editar e gerenciar eventos e atividades, assim como visualizar as listas de chamada e inscrições dos alunos.

2. **Cadastro de Novo Administrador**: Para criar um novo administrador, acesse o endpoint **/RegisterNewAdm** e forneça os dados necessários para o registro de um novo usuário administrador.

3. **Criação de Eventos e Atividades**: No painel administrativo, o administrador pode criar novos eventos, associar atividades a esses eventos e definir o número de vagas disponíveis para cada atividade. O sistema gerará automaticamente as listas de chamada dos alunos inscritos.

4. **Responsividade**: O sistema foi desenvolvido para ser totalmente responsivo, permitindo que os usuários acessem a plataforma e utilizem suas funcionalidades tanto em dispositivos de tela grande quanto em smartphones e tablets, garantindo uma experiência de usuário consistente em diferentes dispositivos.

## Instalação

1. **Clone o repositório**:
   ```bash
   git clone <URL do repositório>

## Instale as dependências:
    ```bash
        npm install
        composer install
    ```

<h1> Conclusão</h1>
Este sistema visa simplificar e agilizar o gerenciamento de eventos e atividades na ETEC Elias Miguel Junior, com uma interface amigável e funcionalidades completas para a gestão de inscrições e controle de presença. Sua implementação elimina a necessidade de processos manuais e garante a organização de todos os dados envolvidos, tornando o trabalho administrativo mais eficiente e livre de erros.





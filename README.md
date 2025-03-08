# Projeto FindMe

## Visão Geral
O Projeto FindMe é uma plataforma de impacto social que utiliza o poder das redes sociais (Facebook e Twitter) para amplificar a divulgação de informações sobre pessoas desaparecidas. Através de um sistema automatizado de distribuição de publicações, o FindMe aumenta significativamente o alcance e a visibilidade dos casos de desaparecimento, potencializando as chances de reencontro.

## Propósito e Impacto Social
No Brasil, milhares de pessoas desaparecem anualmente, e a visibilidade desses casos é crucial para aumentar as chances de localização. O FindMe foi desenvolvido para:

- Democratizar a divulgação de casos de desaparecimento, independentemente da condição socioeconômica da família
- Criar uma rede colaborativa de compartilhamento de informações sobre desaparecidos
- Aumentar exponencialmente o alcance das buscas através do efeito viral das redes sociais
- Oferecer uma ferramenta gratuita e eficiente para famílias e instituições que buscam pessoas desaparecidas

## Como Funciona

### Para Usuários
1. Usuários se cadastram na plataforma e autorizam o FindMe a publicar em suas redes sociais
2. O sistema coleta e armazena tokens de acesso às contas (com consentimento explícito)
3. Periodicamente, o sistema publica informações sobre pessoas desaparecidas nas redes dos usuários cadastrados
4. Cada usuário contribui para a divulgação sem precisar fazer nada manualmente após o cadastro inicial

### Para Administradores
1. Cadastro e gerenciamento de perfis de pessoas desaparecidas
2. Monitoramento da distribuição das publicações
3. Acompanhamento de métricas de alcance e engajamento

## Estratégias de Crescimento e Engajamento

Reconhecendo que as redes sociais atuais funcionam com base em métricas de engajamento e algoritmos que priorizam conteúdo viral, apresentamos estratégias inovadoras para impulsionar o alcance do Projeto FindMe:

### Sistema de Recompensas "FindMe Points"

1. **Programa de Pontuação por Engajamento**
   - Usuários ganham pontos quando suas publicações do FindMe geram interações (curtidas, compartilhamentos, comentários)
   - Pontos extras para interações que levam a pistas concretas sobre desaparecidos
   - Ranking mensal dos usuários mais engajados com reconhecimento público

2. **Parcerias com Empresas**
   - Conversão de pontos em descontos reais em estabelecimentos parceiros
   - Empresas patrocinadoras oferecem produtos/serviços em troca de exposição positiva
   - Programa de responsabilidade social corporativa com selo "Empresa Amiga do FindMe"

3. **Cashback Solidário**
   - Percentual de compras em lojas parceiras é revertido para o Projeto FindMe
   - Usuários podem optar por receber o cashback ou doá-lo para melhorias na plataforma

### Gamificação da Solidariedade

1. **Desafios Comunitários**
   - Metas coletivas de compartilhamento com recompensas para toda a comunidade
   - Eventos sazonais com objetivos específicos (ex: "Operação Natal: 100 mil compartilhamentos em dezembro")
   - Desbloqueio de recursos especiais na plataforma quando metas são atingidas

2. **Níveis de Impacto**
   - Usuários progridem em níveis conforme seu engajamento (Iniciante, Colaborador, Herói, Guardião)
   - Cada nível desbloqueia novas funcionalidades e benefícios exclusivos
   - Emblemas virtuais para conquistas específicas (primeiro reencontro, 100 compartilhamentos, etc.)

3. **Histórias de Sucesso**
   - Compartilhamento de casos resolvidos com destaque para os usuários que contribuíram
   - Cerimônias virtuais de reconhecimento com participação das famílias beneficiadas
   - Documentação em vídeo dos reencontros (com consentimento) para inspirar novos usuários

### Monetização Ética e Sustentabilidade

1. **Marketplace Solidário**
   - Plataforma para venda de produtos com parte da renda revertida para o projeto
   - Artistas e artesãos podem criar produtos temáticos exclusivos
   - Leilões de itens doados por celebridades e influenciadores apoiadores

2. **Assinatura Premium Opcional**
   - Modelo freemium com recursos avançados para assinantes
   - Assinantes podem personalizar quais tipos de casos desejam apoiar
   - Acesso a estatísticas detalhadas sobre o impacto de suas contribuições

3. **Crowdfunding Integrado**
   - Campanhas específicas para melhorias na plataforma
   - Financiamento coletivo para casos prioritários que necessitam de recursos adicionais
   - Transparência total sobre o uso dos recursos arrecadados

### Tecnologias Emergentes

1. **NFTs Solidários**
   - Criação de tokens não fungíveis representando marcos importantes do projeto
   - Artistas doam obras digitais cujas vendas beneficiam o projeto
   - Colecionáveis digitais que contam a história do projeto e seus casos de sucesso

2. **Integração com Web3**
   - Sistema de microdoações em criptomoedas com smart contracts transparentes
   - DAO (Organização Autônoma Descentralizada) para governança comunitária do projeto
   - Tokens de governança que permitem à comunidade votar em melhorias e prioridades

3. **Realidade Aumentada**
   - Filtros de RA para redes sociais que aumentam a visibilidade dos casos
   - Experiências interativas que educam sobre a causa dos desaparecidos
   - Mapeamento em tempo real de áreas com buscas ativas

### Estratégias de Conteúdo

1. **Formatos Otimizados para Algoritmos**
   - Adaptação das publicações para formatos que os algoritmos favorecem (Reels, Stories, etc.)
   - Uso estratégico de hashtags e tendências para aumentar o alcance orgânico
   - Variação de formatos para evitar fadiga de conteúdo

2. **Conteúdo Educativo**
   - Séries de posts sobre prevenção de desaparecimentos
   - Infográficos compartilháveis sobre estatísticas e informações relevantes
   - Webinars com especialistas em segurança pública e busca de pessoas

3. **Colaborações com Influenciadores**
   - Programa de embaixadores com influenciadores comprometidos com a causa
   - Desafios virais específicos para aumentar a conscientização
   - Takeovers periódicos de contas de influenciadores para amplificar casos urgentes

## Arquitetura Técnica

### Componentes Principais
- **Sistema de Gerenciamento**: Interface para cadastro e administração de perfis de desaparecidos
- **Cerebro (cerebro.class.php)**: Algoritmo inteligente que distribui as publicações de forma equilibrada entre os tokens disponíveis
- **Integração com Redes Sociais**: Módulos de autenticação e publicação para Facebook e Twitter

### Funcionamento do Algoritmo de Distribuição
O sistema executa automaticamente duas vezes ao dia através de cronjobs, seguindo a lógica:

1. Coleta todos os tokens de usuários disponíveis
2. Recupera a lista de desaparecidos cadastrados
3. Distribui as publicações de forma inteligente:
   - Cada token é utilizado apenas uma vez por execução
   - Se houver mais tokens que desaparecidos, alguns casos recebem maior visibilidade
   - Se houver mais desaparecidos que tokens, o sistema registra onde parou e continua na próxima execução
   - O algoritmo garante que todos os casos recebam visibilidade de forma justa e rotativa

### Tecnologias Utilizadas
- Arquitetura MVC personalizada sem frameworks externos
- Banco de dados relacional (tabela principal: `desap`)
- APIs oficiais do Facebook e Twitter

## Roadmap e Melhorias Planejadas

- **Atualização do Sistema de Tokens**: Adaptação à nova política do Facebook que limita a duração dos tokens (implementação de sistema de renovação automática)
- **Refatoração do Sistema de Autoload**: Melhoria na estrutura de carregamento de classes
- **Correção de Problemas de Path**: Padronização dos caminhos de inclusão de arquivos
- **Finalização do Layout**: Conclusão das interfaces de gerenciamento
- **Expansão para Outras Redes**: Integração com Instagram, LinkedIn e outras plataformas relevantes
- **Implementação do Sistema de Recompensas**: Desenvolvimento da infraestrutura para o programa FindMe Points
- **Módulo de Gamificação**: Criação do sistema de níveis, desafios e recompensas
- **Plataforma de Monetização Ética**: Desenvolvimento do marketplace e sistema de assinaturas

## Contribuição
Contribuições são bem-vindas! Se você é desenvolvedor, designer ou tem experiência em redes sociais e deseja contribuir para este projeto de impacto social, entre em contato.

---

*O Projeto FindMe é uma iniciativa sem fins lucrativos dedicada a reunir famílias e entes queridos através do poder das redes sociais e da tecnologia. Juntos, podemos transformar a solidariedade em uma força viral.*

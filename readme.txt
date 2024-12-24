# Os padrões de projeto tem como função ser um guia para otimização e economia de recursos,
# estes padrões são os criacionais, estruturais e comportamentais.

* Criacionais -> Mais alternativas para criação de objetos, maior flexibilidade e reuso do código,
como o uso de interfaces, factory method e outros recursos.
* Estruturais -> Consiste na criação de classes e objetos em estruturas maiores, sem perder eficiência,
como é feito normalmente o mvc, sem classes de apoio, com arquivos contendo mais linhas de código.
* Comportamentais -> Trabalha com a melhor divisão da responsabilidade entre as classes, contendo mais
métodos para auxiliar ao longo do script como helpers, repositories, services, etc.

# Strategy
* O padrão Strategy sugere que você pegue uma classe que faz algo específico de muitas maneiras diferentes e extraia todos esses algoritmos em classes separadas chamadas strategies. É o que
fizemos com as classes relacionadas aos impostos neste projeto. Como cada imposto tem seu cálculo específico, em vez de fazer diversos ifs, simplesmente criamos uma interface para garantir
que a classe do imposto teria o método de cálculo e, em seguida, passamos a class do próprio para servir como um parâmetro na class principal.

# Chain of Responsibility
* Trata-se um padrão de design comportamental que permite que você passe solicitações ao longo de uma cadeia de manipuladores. Ao receber uma solicitação, cada
manipulador decide se processa a solicitação ou se a passa para o próximo manipulador na cadeia. Em questão do nosso código, podemos considerar a calculadora do desconto
como uma cadeira, considerando que vamos passando de manipulador a manipulador, definindo até um último valor "Sem desconto" para decidir qual se aplica à regra do código.

# Template Method
* Consiste em um padrão de design comportamental que define o esqueleto de um algoritmo na superclasse, 
mas permite que subclasses substituam etapas específicas do algoritmo sem alterar sua estrutura. Um exemplo
disso são as classes Icpp e Ikcv do projeto, que extendem a classe ImpostoCom2Aliquotas, mas define em cada uma
as regras de cada função abstrata que é implementada.

# A fim de fixar, entende-se que:
* Interfaces: Uma espécie de sinalização sobre métodos que uma classe deve implementar, assim sempre garantimos
que as classes poderão ser utilizadas e instanciadas, sem a preopação de não ter criado um método específico. Por exemplo,
neste projeto, a interface Imposto garante que todas as classes implementem o método calculaImposto() e se certifica sobre seus
parâmetros e tipos de retorno.
* Classes Abstratas:  Esta não pode ser instanciada diretamente (criar objetos a partir dela). Ela é usada como uma classe base para outras classes, 
permitindo que você defina métodos que devem ser implementados pelas subclasses, bem como métodos que já possuem uma implementação padrão. Um exemplo disso,
no Template Method, foi quando utilizamos a classe ImpostoCom2Aliquotas com a abstração, servindo para definir um comportamento padrão entre Ikcv e Icpp, além
de garantir que estas criassem os próprios métodos padrão.

# State
* O State é um padrão de projeto comportamental que permite que um objeto altere seu comportamento quando seu estado interno muda. Parece 
como se o objeto mudasse de classe. Um exemplo são os estados presentes na classe Orcamento, o qual definem os comportamentos de aprovado, reprovado
e finaliza, baseado nas regras de negócio internas de cada estado.

# Command
* São os comandos dinâmicos que podemos rodar com php. É muito comum com frameworks como Laravel rodar comandos como "php artisan (...)". Assim podemos também
separar as ordens e instruções de um comando em classes e, ao executar um arquivo, utilizar a variável $argv (que recebe dados de execuções por commands) e para prosseguir.

# Observer
* O Observer é um padrão de projeto comportamental que permite que um objeto notifique outros objetos sobre alterações em seu estado.
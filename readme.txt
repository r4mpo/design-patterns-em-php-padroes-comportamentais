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
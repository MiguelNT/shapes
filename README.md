**PROBLEMA**

Pretende-se explorar as tuas habilidades de POO em PHP criando 3 classes.
 - `Shape.php`, `Rectangle.php` e `Circle.php`.

O Shape.php deverá ser a classe base com os seguintes requisitos:

 - 4 propriedades com diferentes tipos de visibilidade.
    - Um `name` *público*.
    - Um `width` e `length` *protegido*.
    - Um `id` *privado*.
 - Uma *constante* chamada de `SHAPE_TYPE` com o valor `1`.
- Um construtor que aceita o `length` e `width` como parâmetros para inicializar as respetivas propriedades do objeto.
- O construtor deverá também inicializar o `id`, que deverá ser um valor único (fica à tua liberdade a forma de o fazeres).
- Getters e Setters da propriedade `name`.
- Um método público que calcula e retorna a área do objeto.
- Um método público estático que retorna o `SHAPE_TYPE` do objeto.
- Um método que retorna um outro objeto com todas as propriedades do mesmo (`name`, `width`, `length`, `id`).
    - **Nota:** Tens a liberdade de retornar este objeto da forma que aches mais adequada ao problema.

O Rectangle.php deverá herdar do Shape.php e os requisitos são os seguintes:

- Uma constante chamada de `SHAPE_TYPE` com o valor `2`.
   (**Nota:** Se usares a herança devidamente não deverá requerer nenhum método nem parâmetro). 
  
O Circle.php deverá herdar do Shape.php e os requisitos são os seguintes:

- Uma constante chamada de `SHAPE_TYPE` com o valor `3`.
- Uma propriedade protegida chamada de `radius`.
- Um construtor que aceita o parâmetro `radius` e inicializa a devida propriedade do objeto. (Deverás chamar o construtor da herança devidamente).
- Um método público que calcula e retorna a área do Círculo.
- Deverá reescrever o método que foi definido no Shape.php para retornar um outro objeto com as devidas propriedades (`name`, `radius`, `id`).

**Resolução**

- Shapes.php
    - implementados os métodos:
        - `getName()` - Retorna o parâmetro `Nome` do tipo *string* do Objeto da class shape.
        - `setName()` - Atribui o valor passado ao parâmetro `Nome` do Objeto da class shape.
        - `getId()` - Retorna o parâmetro `Id` do Objeto da class shape (Este parâmetro foi gerado com a função uniqid () do PHP).
        - `getWidth()` - Retorna o parâmetro `Width` do tipo *float* do Objeto da class shape.
        - `getLength()` - Retorna o parâmetro `Length` do tipo *float* do Objeto da class shape.
        - `getShapeArea()` - Retorna o valor da `Área` do Objeto da class shape.
        - `getShapeProperties()` - Retorna um objeto com todos os parâmetros do Objeto da class shape.
        - `getShapeType()` - Retorna o parâmetro do tipo *constante* `SHAPE_TYPE` do Objeto da class shape.

- Rectangle.php
    - Esta class herda o Shape.php onde o valor da *constante* `SHAPE_TYPE` é reescrito com o valor `2`

- Circle.php
    - Esta class herda o Shape.php onde o valor da *constante* `SHAPE_TYPE` é reescrito com o valor `3` e é criado o parâmetro `radius` do tipo *float*.
    - implementados os métodos:
        - `getShapeArea()` - Retorna o valor da `Área` do Objeto da class shape (Este método reescreve o método `getShapeArea()` definido na *classe* `Shape.php` de forma a adaptar a fórmula do cálculo da area do círculo e retornar corretamente o seu valor.
        - `getShapeProperties()` - Retorna um objeto com todos os parâmetros do Objeto da class shape (Este método reescreve o método `getShapeProperties()` definido na *classe* `Shape.php` de forma a retornar também o novo parâmetro `radius` que foi criado).

 - Testes Unitários
    -
    - implementados os métodos:
        - `testGetId()` - Retorna o parâmetro `Id` do Objeto da class shape (Este parâmetro foi gerado com a função uniqid () do PHP).
        - `testGetName()` - Testa se o valor do parâmetro o valor passado ao parâmetro `Nome` do Objeto da class shape corresponde ao valor que lhe é atribuído.
        - `testGetWidth()` - Testa se o valor do parâmetro `Width` do tipo *float* do Objeto da class shape.
        - `testGetLength()` - Testa se o valor do parâmetro `Length` do tipo *float* do Objeto da class shape.
        - `testGetShapeType()` - Testa se o valor do parâmetro do tipo *constante* `SHAPE_TYPE` do Objeto da class shape corresponde ao valor correto.
        - `testShapeType()` - Testa se o valor do parâmetro do tipo *constante* `SHAPE_TYPE` do Objeto da class shape corresponde ao valor correto.
        - `testGetShapeArea()` - Testa se o valor da `Área` do Objeto da class shape corresponde ao valor correto testando a formula aplicada.
        - `testNameVisibility()` - Testa se a visibilidade do parâmetro `name` é do tipo *publico*
        - `testWidthVisibility()` - Testa se a visibilidade do parâmetro `width` é do tipo *protegido*
        - `testLengthVisibility()` - Testa se a visibilidade do parâmetro `length` é do tipo *protegido*
        - `testIdVisibility()` - Testa se a visibilidade do parâmetro `Id` é do tipo *privado*

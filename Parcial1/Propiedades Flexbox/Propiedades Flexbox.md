#***Propiedades Flexbox***
 ***Propiedades para el padre***

**Propiedad**|**Descripción**|**Valores**|
------------ | -------------| -------|
|Display|Declarar un contenedor como flex|<p>- flex</p><p>- inline-flex</p>|
|flex-direction|Cambia la orientación del eje principal|<p>- row</p><p>- row-reverse</p><p>- column</p><p>- column-reverse</p>|
|flex-wrap|Evita o permite el desbordamiento (multilinea)|<p>- no-wrap</p><p>- wrap</p><p>- wrap-reverse</p>|
|flex-flow|Valor por defecto|- row nowrap|
|justify-content|Alineacion en el eje principal|<p>- flex-start</p><p>- flex-end</p><p>- center</p><p>- space-between</p><p>- space-evenly</p><p>- space-around</p>|
|align-items|Acomoda los hijos en el eje transversal|<p>- stretch</p><p>- flex-start</p><p>- flex-end</p><p>- center</p><p>- baseline</p>|

***Propiedades para el hijo***

|**Propiedad**|**Descripción**|**Valores**|
------------ | -------------| -------|
|order|Controla el orden en el que se desplegaran los hijos|- 0-n|
|flex-grow|Establece la habilidad del hijo para crecer|- 1-n|
|flex-shrink|Establece la habilidad del hijo para encojerse|- 1-n|
|flex-basis|Tamaño default para un elemento antes de que el espacio restante sea distribuido.Puede ser en porcentaje.|- Auto content|
|flex|Abreviacion para flex-grow, flex-shrink y flex-basis|- 0 -1 auto|
***Modelo De Caja***

El modelo de caja es la manera en que se representan todos los elementos html en una página. Cada elemento genera una caja, el comportamiento de esa caja depende de su clasificación: si es de línea o de bloque.

A todas las cajas se les puede aplicar las siguientes propiedades: width, height, padding, margin, border, background. Lo particular de este concepto es que por defecto el width se refiere al ancho del contenido de un elemento (no al ancho total, de borde a borde). 

En el gráfico muestro cómo se comporta cada una de las propiedades:

![Modelo de caja](https://www.laurachuburu.com.ar/img/tutoriales/css/modelo-de-caja.png)

Para calcular el **ancho total** de un elemento es necesario sumar el ancho, más los dos padding (izquierda y derecha), más los bordes  (izquierda y derecha). En cuanto a los valores verticales pasa lo mismo, pero en diseño web generalmente nos preocupa más definir los anchos de los elementos ya que las alturas están dadas en general por el contenido de cada elemento.

Existe una propiedad nueva (CSS3) que modifica este concepto y si la aplicamos, se considera el ancho del elemento a la distancia entre los bordes. Esta propiedad es **box-sizing:border-box**.

El **background** (imagen o color) ocupa todo el elemento desde los bordes.
El **margin** es la distancia desde el borde de un elemento hacia otro.
El **padding** es la distancia desde el borde hacia el contenido.

**Para que un elemento acepte las propiedades width, height, padding y margin tiene que ser de bloque.** Si la etiqueta no es bloque originalmente, se puede modificar su condición con otra propiedad CSS: **display**.

**Medidas flexibles:**

Existen propiedades que definen el valor máximo o mínimo, éstas permiten mayor flexibilidad y se usan especialmente en los sitios responsive:

**Max-width:** ancho máximo. El elemento no puede ser más ancho que el valor especificado pero sí puede achicarse.

**Min-width:** ancho mínimo.  El elemento no puede ser más angosto que el valor especificado pero sí puede agrandarse.

**Max-height**: alto máximo. El elemento no puede ser más alto que el valor especificado pero sí puede achicarse.

**Min-height**: alto mínimo. El elemento no puede ser más bajo que el valor especificado pero sí puede agrandarse.
#### **Propiedades que controlan el flujo del contenido en una caja.**
- box-decoration-break (en-US)
- box-sizing
- overflow
- overflow-x (en-US)
- overflow-y
#### **Propiedades que controlan el tamaño de una caja.**
- height
- width
- max-height
- max-width (en-US)
- min-height
- min-width
#### **Propiedades que controlan los márgenes de una caja.**
- margin
- margin-bottom
- margin-left (en-US)
- margin-right
- margin-top (en-US)
#### **Propiedades que controlan los rellenos de una caja**
- padding
- padding-bottom
- padding-left (en-US)
- padding-right (en-US)
- padding-top
#### **Otras propiedades**
- box-shadow
- visibility

Los navegadores crean y colocan las cajas de forma automática, pero CSS permite modificar todas sus características. Cada una de las cajas está formada por seis partes, tal y como muestra la siguiente imagen:

![Representación tridimensional del box model de CSS](https://uniwebsidad.com/static/libros/imagenes/css/f0403.gif)

Las partes que componen cada caja y su orden de visualización desde el punto de vista del usuario son las siguientes:

- **Contenido (*content*):** se trata del contenido HTML del elemento (las palabras de un párrafo, una imagen, el texto de una lista de elementos, etc.)
- **Relleno (*padding*):** espacio libre opcional existente entre el contenido y el borde.
- **Borde (*border*):** línea que encierra completamente el contenido y su relleno.
- **Imagen de fondo (*background image***): imagen que se muestra por detrás del contenido y el espacio de relleno.
- **Color de fondo (*background color*):** color que se muestra por detrás del contenido y el espacio de relleno.
- **Margen (*margin*):** separación opcional existente entre la caja y el resto de cajas adyacentes.

El relleno y el margen son transparentes, por lo que en el espacio ocupado por el relleno se muestra el color o imagen de fondo (si están definidos) y en el espacio ocupado por el margen se muestra el color o imagen de fondo de su elemento padre (si están definidos). Si ningún elemento padre tiene definido un color o imagen de fondo, se muestra el color o imagen de fondo de la propia página (si están definidos).

Si una caja define tanto un color como una imagen de fondo, la imagen tiene más prioridad y es la que se visualiza. No obstante, si la imagen de fondo no cubre totalmente la caja del elemento o si la imagen tiene zonas transparentes, también se visualiza el color de fondo. Combinando imagenes transparentes y colores de fondo se pueden lograr efectos gráficos muy interesantes.


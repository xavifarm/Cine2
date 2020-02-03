Nos piden hacer un programa POO sobre un cine (una única sala)
    - Tiene un conjunto de asientos de 8 filas por 9 columnas
    - Del cine nos interesa conocer la película que se está reproduciendo
      y el precio de la entrada.
    - De las películas, nos interesa el título, la duración, edad mínima y el director.
    - Del espectador el nombre, la edad y el dinero que tiene.

    Los asientos son etiquetados por una letra (que representa la columna)
                               y por un número (que representa el orden de la fila).
    La fila empieza al final de la matriz. También debemos conocer si está ocupado o no el asiento.

    8A  8B  8C  8D  8E  8F  8G  8H  8I
    7A  7B  7C  7D  7E  7F  7G  7H  7I
    6A  6B  6C  6D  6E  6F  6G  6H  6I
    5A  5B  5C  5D  5E  5F  5G  5H  5I
    4A  4B  4C  4D  4E  4F  4G  4H  4I
    3A  3B  3C  3D  3E  3F  3G  3H  3I
    2A  2B  2C  2D  2E  2F  2G  2H  2I
    1A  1B  1C  1D  1E  1F  1G  1H  1I

    Los espectadores sólo se podrán sentar si tienen suficiente dinero, hay espacio libre y tienen
    edad para ver la película.
    En caso que un asiento esté ocupado le buscaremos uno nuevo.
    Los datos del espectador y la película pueden ser totalmente aleatorios.

    Realizaremos una pequeña simulación que genere algunos espectadores y los sentaremos aleatoriamente
    (no podemos donde ya está ocupado)
    Luego insertaremos algunos espectadores manualmente.
    
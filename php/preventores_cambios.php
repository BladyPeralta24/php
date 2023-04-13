<?php
    /* 
    Las jerarquias de herencia paralelas son aquellas clases que de por si
    estan duplicadas y que en un principio funcione el codigo, cuando se tenga
    que implementar algun método de una clase, dicho metodo necesita de implementarse
    tambien en las otras clases que van relacionadas con la principal y el codigo
    se vuelve mas enredado y complicado de hacerse. Y dicho problema es un mal olor.
    */
    // Jerarquias de herencia paralela ejemplo:

    class Empleado
    {
        public static string $nombre;
        public static string $apellido1;
        public static string $apellido2;
        public static string $nif;
        public static int $edad;
    }

    class Cliente
    {
        public static string $nombre;
        public static string $apellido1;
        public static string $apellido2;
        public static string $nif;
        public static int $edad;
    }

    /*
    La cirugía de escopeta se trata de un pequeño cambio a la clase pero dicho cambio
    se tiene que implementarse en varias clases que neecesita de dicho cambio; por lo
    cual es un sintoma de mal olor ya que necesita de un solo cambiar en una sola parte
    y no en el resto del codigo.
    */
    // Ejemplo de cirugía de escopeta

    class Venta
    {
        IVA = 21;
    }

    class producto
    {
        IVA = 21;
    }

    class Movil
    {
        IVA = 21;
    }

    //...

    /*
    El cambio divergente es como la cirugia de escopeta pero solo se realiza
    los varios cambios en una sola clase.
    Esto crea problemas de la clase cuando no se ha impleentado bien el codigo
    y que tenga que dependerse de valores no muy bien definidos.
    */
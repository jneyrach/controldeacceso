<?php
include_once("gui/contenidos/tablas/horariosAsignados/TablaHorariosAsignados.php");

/**
 * Representa una tabla con los horarios asignados agregados.
 *
 * @author Ramiro Savoie (rsavo84@gmail.com)
 * @since 20-12-2009
 * @version 0.5
 */
class TablaHorariosAsignadosAgregados extends TablaHorariosAsignados
{
    function __construct($horarios)
    {
        parent::__construct($horarios);
    }
}
?>

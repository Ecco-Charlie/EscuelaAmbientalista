<?php
include("controller/conexion.php");
$rutaP = "assets/img/";
$numero = 0;
$can = new Con();
$con = $can->Conectar();

$pst = "select `Titulo`, `Descripcion`, `imagen` from `tbl_targetas`";
$rs = $con->query($pst);
if ($rs) {
    while ($row = $rs->fetchArray()) {
        $Titulo = $row['Titulo'];
        $Descripcion = $row['Descripcion'];
        $Imagen = $row['imagen'];
        $RutaCom = "";
        $RutaCom = $rutaP.$Imagen;
        $numero++;
?>

    
    <?php echo '<div class="targetas__targeta targetas__targeta--'.$numero.'"></div> '?>
    <?php echo '<style>
        
        ::root{
            --a : scale(0);
        }

        .targetas__targeta--'.$numero.'{
            background-image:url('.$RutaCom.');
        }
        .targetas__targeta--'.$numero.'::after
        {
            content:"'.$Titulo.'";
            position:absolute;
            inset: 0 0 0 0;
            background-image: linear-gradient(300deg, rgba(254, 206, 171, 0.300), rgb(232, 74, 95, 0.350));
            display:flex;
            justify-content:center;
            align-items:center;
            font-weight: 700 ;
            font-size:150%;
            color:#f5f5f5;
            transition: all .5s;

            transform: var(--a);
        }
        .targetas__targeta--'.$numero.':hover{
            --a:scale(1);
        }

    </style>';?>

</div><?php
            }
        }
?>
<?php
    define( 'DIR_CAMINO' , 'integradora/' );
    define( 'SIS_HTTP' , 'http://' );
    define( 'SIS_URL' , SIS_HTTP . $_SERVER['HTTP_HOST'] . '/' . DIR_CAMINO );

    define( 'SIS_CAMINO' , $_SERVER['DOCUMENT_ROOT']. '/' .DIR_CAMINO );
?>
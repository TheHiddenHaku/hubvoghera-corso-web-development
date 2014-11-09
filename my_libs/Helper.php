<?php

/*
 * To change this template use Tools | Templates.
 */

/**
 * Description of newPHPClass
 *
 * @author TheHiddenHaku
 */
class Helper {
    /**
     * Questo metodo consente di mostrare un output deirettamente nella console Javascritp del browser
     * @params: $data [any] Il valore che vogliamo mostrare in console. Può essere qualuntie tipo di dato
     * @params: $table [boolena] se true la verrà usato il metodo console.table al posto di console.log
    */
    static function console_log($data, $table = false) {
        $verb = $table ? 'table' : 'log';
        if(is_array($data) || is_object($data)) {
            echo "<script>console.".$verb."(".json_encode($data).");</script>" ;
        } else {
            echo "<script>console.".$verb."('".$data."');</script>" ;
        }
    }
    
}

?>
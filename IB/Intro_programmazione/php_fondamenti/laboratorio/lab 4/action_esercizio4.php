<?php 
    /**
     * PSEUDOCODICE processaParola(parola da filtrare)
     * 
     * risultato = ""
     * vocali = []
     * 
     * per ogni lettera della parola 
     *      se è vocale 
     *          aggiunila a vocali[]
     *      altrimenti
     *          concatena a risultato 
     * 
     * caratteri mancanti = len(risultato) - 3
     * se caratteri mancanti > 0 allora
     *      finché caratteri mancanti > 0 AND vocali[] non è vuoto 
     *          concatena vocale[contatore] a risultato
     *          togli la vocale concatenata da risultato
     *          aggiorna i contatori del ciclo 
     * 
     * se len(risultato)>3 
     *      torna sottostringa 0-3 di risultato
     * altrimenti
     *      torna risultato
     */

    $codice_fiscale = '';

    $name = strtoupper($_POST['nome_utente']); 
    $surname = strtoupper($_POST['cognome_utente']); 
    $data_nascita = $_POST['data_nascita']; 
    $data_nascita_explode = explode("-", $data_nascita); //1987-07-18

    //Voglio trasformare le stringhe in array di caratteri con str_split per poter
    //iterare sui caratteri.
    $codice_fiscale = processaParola(str_split($surname));
    $codice_fiscale .= processaParola(str_split($name));
    $codice_fiscale .= substr($data_nascita_explode[0], 2, 2); //anno di nascita
    $codice_fiscale .=  converti_mese_in_lettera($data_nascita_explode[1]); 
    $codice_fiscale .= $data_nascita_explode[2]; //giorno di nascita

    stampa_elemento_con_tag($codice_fiscale); 

    function processaParola($parola){
        $result = ""; 
        $vocali = array(); 

        foreach($parola as $lettera){
            if (isVocale($lettera)){
                $vocali[] = $lettera;
            }
            else{ 
                $result .= $lettera; 
            }       
        }

        //Se result è inferiore a 3, devo prendere anche le vocali. 
        $caratteri_mancanti = 3 - strlen($result); 
        $contatore_vocali = 0; 
        while( ($caratteri_mancanti>0) && (!empty($vocali)) ) {
            $result .= $vocali[$contatore_vocali]; 
            unset($vocali[$contatore_vocali]);

            $contatore_vocali++; 
            $caratteri_mancanti--; 
        }

        /**
         * 
         * DA FARE: Prevedere aggiunta di X se neanche le vocali sono sufficienti per 
         * arrivare ad una lunghezza di $result di 3
         */
    
        return strlen($result) > 3 ? substr($result,0, 3) : $result; 
    }

    function isVocale($char){
        return in_array($char, array('A','E','I','O','U')); 
    }
    
    function converti_mese_in_lettera($lettera){
        switch ($lettera){
            case 1: 
                return "A"; 
                break; 
            case 2: 
                return "B"; 
                break; 
            case 3: 
                return "C"; 
                break; 
            case 4:
                return "D"; 
                break; 
            case 5: 
                return "E"; 
                break; 
            case 6: 
                return "H"; 
                break; 
            case 7: 
                return "L"; 
                break; 
            case 8: 
                return "M"; 
                break; 
            case 9: 
                return "P"; 
                break; 
            case 10: 
                return "R"; 
                break; 
            case 11: 
                return "S"; 
                break; 
            case 12: 
                return "T"; 
                break; 
        }
    }

    function stampa_elemento_con_tag($valore){
        echo "<pre>\n";
        echo $valore;
        echo "</pre>\n";
    }
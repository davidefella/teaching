/* 1. Crea la relazione
 "cliente" con i seguenti attributi: 
    - id --> numerico non nullo, chiave primaria
    - nome --> text 
    - email --> text 
    - telefono --> text*/



/* 2. Crea la relazione "riga_ordine" con i seguenti attributi: 
    - id --> numerico non nullo, chiave primaria
    - fk_ordine numero non nullo, chiave esterna verso "ordine" 
    - fk_riga_menu numerico non nulla, chiave esterna verso "menu"*/



/* 3. Modificare la relazione  "ordine": 
    - Eliminare la colonna "nome_cliente"
    - Aggiungere una colonna fk_cliente di tipo integer, chiave esterna verso la relazione
     "cliente" */



/* 4. Creare una relazione "tessera_punti" con i seguenti attributi: 
    - id --> numerico chiave primaria 
    - data_creazione --> timestamp
    - totale_punti --> numerico non nullo */



/* 5. Creare una relazione "rider" con i seguenti attributi: 
    - id --> numerico, chiave primaria 
    - id_compagnia --> numerico, chiave esterna verso la tabella azienda_consegne*/



/* 6. Creare una relazione "azienda_consegne": 
    - id --> mumerico, chiave primaria 
    - nome_azienda --> varchar
    - tariffa --> decimal*/



/* 7. Modificare la relazione "ordine" aggiugendo il seguente attributo: 
    - "id_rider", intero, chiave eserna verso l'id della relazione "azienda_consegne"*/



/* 8. Modificare la relazione "cliente": 
    - Creare un campo "id_tessera" e renderla chiave esterna verso la relazione "tessera punti" */
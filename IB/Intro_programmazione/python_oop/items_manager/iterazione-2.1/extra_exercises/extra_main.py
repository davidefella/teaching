import csv

def read_from_csv(): 

    # Sostituire qui il tuo percorso al file
    csv_path = 'IB\Intro_programmazione\python_oop\items_manager\iterazione-2.1\extra_exercises\items.csv'

    with open(csv_path, 'r') as f:
        #Scrivere il codice dell'esercizio qui di seguito al posto dell'istruzione pass
        pass

def is_integer(num): 
    #Scrivere il codice dell'esercizio qui di seguito al posto dell'istruzione pass
    pass
    

    
#Dopo aver completato le due funzioni, eseguire lo script e confrontare i risultati degli output con quelli attesi

print('Output atteso: False. Output ottenuto: ' + str(is_integer('3.0')))
print('Output atteso: False. Output ottenuto: ' + str(is_integer('Franco')))
print('Output atteso: False. Output ottenuto: ' + str(is_integer('3.0')))
print('Output atteso: True.  Output ottenuto: ' + str(is_integer(4)))

'''
Output atteso dal metodo read_from_csv()

{'name': 'Phone', 'price': '100.5', 'quantity': '1'}
{'name': 'Cable', 'price': '10', 'quantity': '5'}
{'name': 'Mouse 2', 'price': '50', 'quantity': '5'}
{'name': 'Keyboard', 'price': '75', 'quantity': '5'}
'''
read_from_csv()
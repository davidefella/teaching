'''
Queste che seguono sono alcune nozioni utili che vale la pena ricorda per capire i decorator. 

1. In python possiamo definire funzioni dentro altre funzioni
2. In Python una funzione può essere passata come parametro ad un'altra funzione (e ritornata)
'''

#ESEMPIO: aggiungiamo un messaggio di benvenuto alla stringa
def messageWithWelcome(str):
  
    # funzione annidata
    def addWelcome():
        return "Welcome to "
  
    # Ritorna una concatenazione di addWelcome e di una stringa
    return addWelcome() + str
  
# Per leggere il nome del site dove è il messaggio è stato aggiunto
def site(site_name):
    return site_name
  
print( messageWithWelcome(site("GeeksforGeeks")) ) 

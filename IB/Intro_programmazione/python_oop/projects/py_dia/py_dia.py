from partita import Partita

class PyDia: 

    MESSAGGIO_DI_BENVENUTO = "Benvenuto nel py_dia!"
    ELENCO_COMANDI = ["vai <direzione>", "aiuto", "guarda", "fine"]

    def __init__(self):
        self.partita = Partita()

    def gioca(self): 
        esci = False

        while (esci == False): 
            comando = input('Inserisci comando: ')

            if (self.processaIstruzione(comando) == True): 
                esci = True

    def processaIstruzione(self, istruzione): 
        if (istruzione == "fine"): 
            return self.fine()
        elif (istruzione == "aiuto"): 
            return self.aiuto()
        elif (istruzione == "guarda"): 
            return self.guarda()
        elif (istruzione[0:4] == "vai "): 
            return self.cambia_stanza(istruzione[4: len(istruzione)])
        else: 
            print("Inserisci un comando valido!")
            return False
        
    def aiuto(self): 
        print("Hai a disposizione i seguenti comandi:")
        print(*self.ELENCO_COMANDI, sep = ", ") 
        return False

    def fine(self): 
        print("Grazie per aver giocato!")
        return True

    def guarda(self): 
        print(f"Ti trovi in {self.partita.stanzaCorrente.nome}, hai ancora {self.partita.pv} punti vita!") 

        if(self.partita.stanzaCorrente.stanza_vincente): 
            print("Evviva! Hai trovato il manuale di Python!") 
            return True
        else: 
            return False

    def cambia_stanza(self, direzione): 
        if direzione == "nord" and self.partita.stanzaCorrente.nord != None: 
            self.partita.stanzaCorrente = self.partita.stanzaCorrente.nord
        elif direzione == "sud" and self.partita.stanzaCorrente.sud != None: 
            self.partita.stanzaCorrente = self.partita.stanzaCorrente.sud
        elif direzione == "est" and self.partita.stanzaCorrente.est != None: 
            self.partita.stanzaCorrente = self.partita.stanzaCorrente.est
        elif direzione == "ovest" and self.partita.stanzaCorrente.ovest != None: 
            self.partita.stanzaCorrente = self.partita.stanzaCorrente.ovest
        else: 
            print(f"{direzione} non esistente, inserisci una direzione valida!")
            return False
        
        self.partita.pv = self.partita.pv - 1

        if self.partita.pv == 0: 
            print("Hai finito i tuoi punti vita. Game over!")      
        
        print(f"Hai cambiato stanza, ti rimangono {self.partita.pv} punti vita")


pyDia = PyDia()
pyDia.gioca()

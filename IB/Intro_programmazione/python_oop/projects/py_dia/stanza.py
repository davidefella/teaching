class Stanza: 

    NUMERO_MASSIMO_DIREZIONI = 4

    def __init__(self, nome): 
        self.nome = nome 
        self.nord = None
        self.sud = None
        self.est = None
        self.ovest = None
        self.stanza_vincente = None

    def impostaStanzaNord(self, stanza): 
        self.nord = stanza

    def impostaStanzaSud(self, stanza): 
        self.sud = stanza

    def impostaStanzaOvest(self, stanza): 
        self.ovest = stanza

    def impostaStanzaEst(self, stanza): 
        self.est = stanza

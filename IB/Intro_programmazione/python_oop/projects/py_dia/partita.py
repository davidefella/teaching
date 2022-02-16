from stanza import Stanza 

class Partita: 
    
    def __init__(self): 
        self.stanzaVincente = None
        self.stanzaCorrente = None
        self.pv = 10 

        self.creaStanza()

    def creaStanza(self): 
        parcheggio = Stanza('parcheggio') 
        area_relax = Stanza('area relax') 
        segreteria = Stanza('segreteria') 
        aula_gialla = Stanza('aula gialla') 
        aula_azzurra = Stanza('aula azzurra') 
        presidenza = Stanza('presidenza') 

        parcheggio.impostaStanzaNord(area_relax)

        area_relax.impostaStanzaSud(parcheggio)
        area_relax.impostaStanzaNord(segreteria)

        segreteria.impostaStanzaSud(area_relax)
        segreteria.impostaStanzaNord(aula_gialla)

        aula_gialla.impostaStanzaSud(segreteria)
        aula_gialla.impostaStanzaNord(aula_azzurra)
        
        aula_azzurra.impostaStanzaSud(aula_gialla)
        aula_azzurra.impostaStanzaNord(presidenza)
        
        presidenza.impostaStanzaSud(aula_azzurra)

        self.stanzaCorrente = parcheggio
        presidenza.stanza_vincente = True

        print('mappa inizializzata')

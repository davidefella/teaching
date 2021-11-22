#Questo è un algoritmo base per il calcolo del codice fiscale. Come 
#esercizio modificarlo per completare le parti mancanti 

def prendiConsonanti(s):
    numero_caratteri = 0
    risultato = ""
    for lettera in s: 
        if lettera not in "aeiou " and numero_caratteri <=3: 
            risultato = risultato + lettera
            numero_caratteri = numero_caratteri + 1

    return risultato

def calcolaMese(m): 
    if(m == "gennaio"): 
        return "A"
    elif(m == "febbraio"): 
        return "B"
    if(m == "marzo"): 
        return "C"
    if(m == "aprile"): 
        return "D"
    if(m == "maggio"): 
        return "E"
    if(m == "giugno"): 
        return "H"
    if(m == "luglio"): 
        return "L"
    if(m == "agosto"): 
        return "M"
    if(m == "settembre"): 
        return "P"
    if(m == "ottobre"): 
        return "R"
    if(m == "novembre"): 
        return "S"
    if(m == "dicembre"): 
        return "T"

nome = input("Inserisci il nome")
cognome = input("Inserisci il cognome")
annoNascita = input("Inserisci anno di nascita")
meseDiNascita = input("Inserisci il mese di nascita")

nome = nome.lower()
cognome = cognome.lower()

codicefiscale = prendiConsonanti(nome)
codicefiscale = codicefiscale + prendiConsonanti(cognome)
codicefiscale = codicefiscale + annoNascita[2:4]
codicefiscale = codicefiscale + calcolaMese(meseDiNascita)

print(codicefiscale)
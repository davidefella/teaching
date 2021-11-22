#01 Stampare i primi 10 numeri naturali usando prima un ciclo while e poi un ciclo for
def stampaPrimi10NumeriNaturali(): 
    for i in range(1,11):
        print(i)
    
    i = 1; 
    while(i<11): 
        print(i)
        i = i+1


# 02  Scrivere un programma che stampi 100 volte a video il tuo nome, con un ciclo while e poi con un ciclo for
def stampa100VolteTuoNome(): 
    for i in range(1,101):
        print(str(i) + ". Davide")
    
    i = 1; 
    while(i<101): 
        print(print(str(i) + ". Davide"))
        i = i+1


# 03 - Calcolare la somma di tutti i numeri da 1 al numero dato in input
def calcolaSommaDiTuttiNumeri():
    somma = None
    n = int(input("Inserisci un numero "))
    for i in range(1, n + 1):
        somma += i
    print("\n")
    print("La somma totale è: ", somma)


# 04 - Scrivere un programma per stampare la relativa tabella di moltiplicazione
def calcolaTabellinaDiMoltiplicazione():
    n = int(input("Inserisci un numero "))
    
    n = 2
    for i in range(1, 11):
        # 2 *i (numero corrente)
        product = n * i
        print(product)


# 05 - Scrivere un programma che calcola la lunghezza di una stringa di input
def calcolaLunghezzaStringa(): 
    stringa = "davide"
    counter = 0

    for c in stringa: 
        counter = counter + 1
    
    print(counter)


# 06 - Scrivere un programma che data una stringa in input, la stampi prima tutti in UpperCase e successivamente in lowercase
def stampaInUpperCase(): 
    s = input("Inserisci una stringa ")
    
    print(s.upper())
    print(s.lower())


# 07 - Scrivere un programma che data una stringa in input, stampi solo le lettere in posizione pari
def stampaSoloPosizioniPari(): 
    s = input("Inserisci una stringa ")
    
    for i in range(len(s)):
        if i % 2 == 0:
            print(s[i])


# 08 - crivi una funzione Python per ottenere una stringa composta da 4 copie degli ultimi due caratteri di 
# una stringa specificata (la lunghezza deve essere almeno 2)
def copiaUltimiDueCaratteri(): 
    s = input("Inserisci una stringa ")
    
    sub_str = s[-2:]
    print(sub_str * 4)


# 09 - Scrivere un programma che presa in input una stringa, ritorni True oppure False se la stringa è un multiplo di 4
def multiploDiQuattro():
    s = input("Inserisci una stringa ")

    if len(s) % 4 == 0:
        print(True)
    else: 
        print(False)

# 10 - Scrivere un programma Python per ordinare una stringa in ordine lessicografica
def ordina_lessicografico():
    s = input("Inserisci una stringa ")

    print(sorted(sorted(s), key=str.upper))


# 11 - Scrivere una funzione Python che controlla se una stringa inizia un carattere passato in input. 
def controllaInizioStringa(): 
    s = input("Inserisci una stringa ")
    c = input("Inserisci un carattere ")

    if s[0] == c: 
        print("True")
    else: 
        print("False")


# 12 - Scrivere una funzione Python che stampi al massimo fino ai primi due numeri dopo la virgola di un numero decimale.
def formattaDecimale(): 
    num = float(input("Inserisci il numero float "))

    print("\nOriginal Number: ", num)
    print("Formatted Number: "+"{:.2f}".format(num))


#13 - Scrivere un programma Python per stampare i seguenti numeri interi con zeri a sinistra della larghezza  specificata
def aggiungiZeri(): 
    num = int(input("Inserisci il numero"))  
    result = "";
    numeroInStringa = str(num)  

    for i in range(0, len(numeroInStringa)):
        result = result + "0"

    print(result + numeroInStringa)

#14 - Scrivere un programma che restituisca False se la parola contiene almeno una 'e', True altrimenti
def niente_e(parola): 
    for lettera in parola:
        if lettera == 'e':
            return "False"
    
    return "True"
 

#17 - Dato il punto 16, stampare la somma dei numeri pari e la somma dei numeri dispari
def stampa_somma_numeri_paridispari(): 
    n = 10 
    pari = []
    dispari = []

    for i in range(0,n+1): 
        if (i % 2 == 0): 
            pari.append(i)
        else: 
            dispari.append(i)
    
    contatore = 0
    somma_pari = 0
    while(contatore<len(pari)): 
        somma_pari = somma_pari + pari[contatore]
        contatore += 1

    contatore = 0
    somma_dispari = 0
    while(contatore<len(dispari)): 
        somma_dispari = somma_dispari + dispari[contatore]
        contatore += 1

    print(somma_dispari)
    print(somma_pari)


    #print(pari)
    #print(dispari)


# 18 - Popolare una lista di n elementi con i primi n numeri pari. Dopo averli inseriti visualizzare 
# in output i valori memorizzati nella lista e la loro posizione.
def is_pari(n):
    if n%2 == 0: 
        return True 
    else: 
        return False

n = int(input("Inserisci un numero")) 

lista_pari = []
for i in range(0,n+1): 
    if is_pari(i): 
        lista_pari.append(i)

contatore = 0
for numero_pari in lista_pari: 
    print ("Elemento in posizione " + str(contatore) + ": " + str(numero_pari))
    contatore = contatore +1
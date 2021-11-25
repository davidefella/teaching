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


#19 -Prendere in input 10 numeri dal terminale e inserirli in una lista. Stampare la sommatoria di questa lista
lista_numeri = []
sommatoria = 0

while( len(lista_numeri) < 11): 
    n = int(input("Inserisci numero"))
    lista_numeri.append(n)

for numero in lista_numeri: 
    sommatoria = sommatoria + numero

#print(sommatoria)


#20 - Date in input due liste di elementi da terminale, tornare una lista in output che sia la differenza della prima
#con la seconda
#    es:      ["a", "b", "c", "d"]
#             ["a", "b"]
#    output    ["c", "d"]
l1 = int(input("Inserisci lunghezza lista 1: "))
lista1 = []
l2 = int(input("Inserisci lunghezza lista 2: "))
lista2 = []

lista_result = []

for i in range(0, l1):
    s = input("Inserisci elemento in posizione " + str(i) + ": ")
    lista1.append(s)

for i in range(0, l2):
    s = input("Inserisci elemento in posizione " + str(i) + ": ")
    lista2.append(s)

#SOLUZIONE 1 
for element_l1 in lista2: 
    while element_l1 in lista1: 
        lista1.remove(element_l1)

#SOLUZIONE 2
for element_l1 in lista1: 
    if element_l1 not in lista2: 
        lista_result.append(element_l1)


#21 Scrivi un programma Python per trovare l'elenco di parole più lunghe di n da un 
# determinato elenco di parole.
def long_words(n, str):
    word_len = []
    txt = str.split(" ")
    for x in txt:
        if len(x) > n:
            word_len.append(x)
    return word_len	
print(long_words(3, "The quick brown fox jumps over the lazy dog"))

#22 Scrivi un programma Python per convertire un elenco di caratteri in una stringa
def convertListToString(): 
    s = ['a', 'b', 'c', 'd']
    str1 = ''.join(s)
    print(str1)

    #oppure 
    input_list = []
    while (len(input_list)<4): 
        input_list.append(input("inserisci input"))

    s = ""
    for carattere in input_list: 
        s = s + carattere


#23 Scrivi un programma Python per estrarre un dato numero di elementi selezionati casualmente da una data lista.
import random
def random_select_nums(n_list, n):
        return random.sample(n_list, n)
n_list = [1,1,2,3,4,4,5,1]
selec_nums = 3
result = random_select_nums(n_list, selec_nums)


#24 Scrivere un programma Python per creare una lista multidimensionale (liste di liste) con zeri.
def multidimensional(list_element):
    nums = []
    for i in range(3):
        nums.append([])
        for j in range(list_element):
            nums[i].append(0)

    return nums

#n = int(input("Quanti elementi per sottolista?")) 
#print(multidimensional(n)) 

#25 Scrivi un programma Python per creare una griglia 3X3 con numeri.
def matrix_3_for_3(): 
    nums = []
    for i in range(3):
        nums.append([])
        for j in range(1, 4):
            nums[i].append(j)
    print("3X3 grid with numbers:")
    print(nums)



#26 Scrivere un programma Python per aggiungere un elemento preso in input in una tupla
tuplex = (4, 6, 2, 8, 3, 1) 
#tuples are immutable, so you can not add new elements
#using merge of tuples with the + operator you can add an element and it will create a new tuple
tuplex = tuplex + (9,)
#adding items in a specific index
tuplex = tuplex[:5] + (15, 20, 25) + tuplex[:5]
#converting the tuple to list
listx = list(tuplex) 
#use different ways to add items in list
listx.append(30)
tuplex = tuple(listx)


#27 Scrivi un programma Python per trovare gli elementi ripetuti di una tupla
tuplex = (2, 4, 5, 6, 2, 3, 4, 4, 7)
#return the number of times it appears in the tuple.
count = tuplex.count(4)

#28 Scrivi un programma Python per rimuovere un elemento da una tupla7
tuplex = ("w", 3, "r", "s", "o", "u", "r", "c", "e")
print(tuplex)
#tuples are immutable, so you can not remove elements
#using merge of tuples with the + operator you can remove an item and it will create a new tuple
tuplex = tuplex[:2] + tuplex[3:]
print(tuplex)

#29 - Scrivere un programma Python per invertire una tupla di elementi presi in input
x = ("w3resource")
# Reversed the tuple
y = reversed(x)
print(tuple(y))
#create another tuple
x = (5, 10, 15, 20)
# Reversed the tuple
y = reversed(x)



#30 Scrivere una funzione python per aggiungere una chiave presa in input da terminale ad un dizionario 
d = {0:10, 1:20}
print(d)
d.update({2:30})
print(d)

#31
def iteraterate_overdictionary():
    d = {'x': 10, 'y': 20, 'z': 30} 
    for dict_key, dict_value in d.items():
        print(dict_key,'->',dict_value)
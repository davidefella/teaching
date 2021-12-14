#21 sostituire ultimo valore di tuple in una lista
l = [(10,20,30),(40,50,60),(70,80,90)]
for element in l: 
    print( element[:-1] + (0,)) 

#Soluzione b



#18 - inversione
t = ("Sono una stringa da invertire")
t_reversed = reversed(t)
print(tuple(t_reversed))


#16 - Tupla -> Dizionario
t = ( (1,"a"), (2, "b"))
print( dict(t) )

#se voglio invertire key-value
print(dict((y,x) for x,y in t))

#14 - Indice di un elemento di una tupla
t = tuple("Sono una bellissima tupla") #con il costruttore tuple()
index = t.index("S")
print(index)






#12 - rimozione elemento
# a) slice 
# b) conversione tupla-lista-tupla
t = "a", "b", "a", "a", "c", "d"
t = t[:2] + t[3:]

#oppure conversione in lista, .remove() e poi in tupla


#10 - elemente presente in tupla
t = "a", "b", "a", "a", "c", "d"
print("f" in t)

#9 - elementi ripetuti 
t = "a", "b", "a", "a", "c", "d"
count_element = t.count("a")
print(count_element)

#punto 7 - 4° elemento da sinistra e da destra
t = ('a', 'b', 'c', 'd', 'e', 'f', 'g','h')
item = t[3]
item_2 = t[-4]

 
#punto 6 - Conversione in stringa
t_string = ''.join(t)

#punto 5 - Aggiungere elementi 
# a) Con la concatenazione t = t + (8,)
t = (0,1,2,3,4,5)
t = t + (6,)

# b) Con lo slicing 
t = t[:2] + (1,1,1,1) + t[2:6]

# c) Conversione da tupla a lista e poi di 
#    nuovo a tupla (list() e tuple() )
list_t = list(t)
list_t.append(7)
t = tuple(list_t)


#punto 4 (unpack)
tuplex = 4, 8, 3
#print(tuplex)
element1, n2, item3 = tuplex
#print(n1)
#print(n2)
#print(n3)
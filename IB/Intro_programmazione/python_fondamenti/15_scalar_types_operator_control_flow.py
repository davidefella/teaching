'''
Python incorpora una serie di tipi di dati come i tipi scalari primitivi che possono essere utilizzati come elementi 
costitutivi per la creazione di tipi di dati più complessi.

I tipi scalari di base che esamineremo sono:

int — signed, unlimited precision integers
float — IEEE 754 floating-point numbers
None — è un tipo particolare che rappresenta l'assenza di valore 
bool — true/false boolean values


- int: Gli interi Python hanno il segno e una precisione illimitata. Ciò significa che non esiste un limite predefinito 
alla grandezza dei valori che possono contenere.

Possiamo anche costruire interi tramite una chiamata al costruttore int che può convertire da altri tipi numerici, 
come float, a interi:

int(3.5)   --> 3
int(-3.5)  --> 3
int(3.5)   --> 3
int("496") --> 496


- None: Python ha uno speciale valore nullo chiamato None, scritto con la N maiuscola. 
None è spesso usato per rappresentare l'assenza di un valore. Python REPL non stampa mai risultati None, quindi digitare None nel REPL non ha alcun effetto:

a = None
a is None --> True

- bool: Il tipo bool rappresenta gli stati logici e svolge un ruolo importante in molte delle strutture del flusso di 
controllo di Python, come vedremo tra poco. Come ci si aspetterebbe, ci sono due valori bool, True e False, entrambi in 
maiuscolo. 

bool(0)   --> False
bool(0.0) --> False
bool("")  --> False
bool([])  --> False

bool(42)      --> True 
bool("False") --> True







Equality 

if - statment 

    if condition: 
        expression 1
    else: 
        expression 2



For loop, while-loops 

while expression, expression viene convertito dinamicamente in una condizione booleana 

c = 5
while c != 0: 
    print(c)
    c -= 1

posso scriverlo più compatto: 
while c: 
    print(c)

Questo perché bool(0) è False

Break statment 
'''
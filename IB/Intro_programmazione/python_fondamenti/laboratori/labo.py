
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



































import random
def random_select_nums(n_list, n):
        return random.sample(n_list, n)


n_list = [1,1,2,3,4,4,5,1]
selec_nums = 3
result = random_select_nums(n_list, selec_nums)
print(result)

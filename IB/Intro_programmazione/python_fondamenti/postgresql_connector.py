import psycopg2

con = psycopg2.connect(database="gestione_biblioteca", user="postgres", password="postgres", host="127.0.0.1", port="5432")

print(con)
cur = con.cursor()

nome = "'Alfredo'"
cognome = "'Fella'"
#query = '''INSERT INTO public."Utente" (nome, cognome) VALUES (''' + nome + ''', ''' + cognome + ''' );'''



cur.execute('''SELECT * FROM public."Utente"''')
rows = cur.fetchall()

for row in rows: 
    print(row)
    print(row[0])
    print(row[1])
    print(row[2])





con.close()

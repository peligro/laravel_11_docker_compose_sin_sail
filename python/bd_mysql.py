from conectar import database, cursor

 

 

#listar 
cursor.execute("select * from migrations;")
datos = cursor.fetchall()
for dato in datos:
    print(f"id={dato[0]} | migration = {dato[1]}")

 
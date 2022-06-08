import smtplib
import mysql.connector
import os
from email.message import EmailMessage

#Credenciais do BD
conn =mysql.connector.connect(host='localhost',database='form-api',user='root',password='251095') 

 #este bloco busca a query que você deseja e coloca todas as linhas no comando cursor.fetchall()
cursor = conn.cursor()
query = "SELECT * FROM `form-api`.usuarios;"
cursor.execute(query)
rows = cursor.fetchall()

 #Vai printar de teste todos os dados do MySQL
for row in rows:
    print(row)

#Config Email
Email = 'apitestar40@gmail.com'
Email_senha = 'unijorge2022'

#Criar email
msg = EmailMessage()
msg['Subject'] = 'Informações do banco de dados'
msg['From'] = "apitestar40@gmail.com"
msg['To'] = "201001737@unijorge.com.br"
msg.set_content('Esses são os usuarios cadastrados' + str(rows))

#Enviar o e-mail
with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp:
    smtp.login(Email, Email_senha)
    smtp.send_message(msg)
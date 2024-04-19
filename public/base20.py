import sys
import xlsxwriter
import pandas as pd
import sys
import mysql.connector
import os
from dotenv import load_dotenv
from datetime import date

today = date.today()
load_dotenv()

#configurar la conexion a la base de datos
DB_USERNAME = os.getenv('DB_USERNAME')
DB_DATABASE = os.getenv('DB_DATABASE')
DB_PASSWORD = os.getenv('DB_PASSWORD')
DB_PORT = os.getenv('DB_PORT')
DB_HOST=os.getenv('DB_HOST')

# Conectar a DB
cnx = mysql.connector.connect(user=DB_USERNAME,
                              password=DB_PASSWORD,
                              host=DB_HOST,
                              port=DB_PORT,
                              database=DB_DATABASE,
                              use_pure=False)

encuestas=pd.read_sql("""select * from respuestas20""",cnx)
encuestas.to_excel('storage/reporte_individual_act2014.xlsx');
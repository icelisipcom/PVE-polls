import sys
import xlsxwriter
import pandas as pd
import sys
import psycopg2
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
# Conectar a PostgreSQL
try:
    cnx = psycopg2.connect(
        user=DB_USERNAME,
        password=DB_PASSWORD,
        host=DB_HOST,
        port=DB_PORT,
        database=DB_DATABASE
    )
    print("Conexión exitosa")
except psycopg2.Error as e:
    print("Ocurrió un error al conectar a la base de datos:", e)

egresados=pd.read_sql("""select egresados.* from  egresados inner join respuestas20 on egresados.cuenta=respuestas20.cuenta where muestra = 3 and status <=2 and status >0 and completed=1""",cnx)
print('len de egresados',len(egresados))
correos=pd.read_sql('select * from correos',cnx)
writer = pd.ExcelWriter('storage/correos_contestadas.xlsx', engine='xlsxwriter')

workbook = writer.book
a_color='#173d83'
#estilos----------------
negro_b = workbook.add_format({
    'bold': 2,
    'border': 0,
    'align': 'center',
    'valign': 'vcenter',
    'font_color': 'black',
    'font_size':13}) 
header_format = workbook.add_format({
    'bold': True,
    'bg_color': a_color,
    'text_wrap': True,
    'valign': 'top',
    'align': 'center',
    'border_color':'white',
    'font_color': 'white',
    'border': 1,
    'font_size':12})
blue_content = workbook.add_format({
    'border': 1,
    'align': 'center',
    'valign': 'vcenter',
    'font_color': 'black',
    'font_size':10,
    'border_color':a_color})
date_content = workbook.add_format({
    'border': 1,
    'align': 'center',
    'valign': 'vcenter',
    'font_color': 'black',
    'font_size':10,
    'border_color':a_color,
    'num_format': 'dd/mm/yy'})
date_content_bold = workbook.add_format({
    'align': 'center',
    'valign': 'vcenter',
    'font_color': 'black',
    'font_size':12,
    'bold': True,
    'num_format': 'dd/mm/yy'})
worksheet = workbook.add_worksheet()
worksheet.merge_range('C2:H3', 'PROGRAMA DE VINCULACION A EGRESADOS UNAM', negro_b)
worksheet.merge_range('C4:H4', 'EGRESADOS QUE COMPLETARON LA ENCUESTA DE SEGUIMIENTO 2020', negro_b)
worksheet.insert_image("A1", "img/logoPVE.png",{"x_scale": 0.2, "y_scale": 0.2})
worksheet.merge_range('G6:H6',today, date_content_bold)

worksheet.write('B8','Nombre',header_format)
worksheet.write('C8','Paterno',header_format)
worksheet.write('D8','Materno',header_format)
worksheet.write('E8','Numero de cuenta',header_format)
worksheet.write('F8','Fecha en que realizó',header_format)
worksheet.write('G8','mode de aplicacion',header_format)
worksheet.write('H8','Correo 1',header_format)
worksheet.write('I8','Correo 2',header_format)
worksheet.write('J8','Correo 3',header_format)
worksheet.write('K8','Correo 4',header_format)

for i in range(0,len(egresados)):
    correos_eg=correos.loc[correos['cuenta']==egresados['cuenta'].values[i]]
    # print(egresados['cuenta'].values[i],len(correos_eg))
    worksheet.write('B'+str(i+9),egresados['nombre'].values[i],blue_content)
    worksheet.write('C'+str(i+9),egresados['paterno'].values[i],blue_content)
    worksheet.write('D'+str(i+9),egresados['materno'].values[i],blue_content)
    worksheet.write('E'+str(i+9),egresados['cuenta'].values[i],blue_content)
    worksheet.write('F'+str(i+9),str(egresados['updated_at'].values[i])[0:10],blue_content)
    if(egresados['status'].values[i]==1):
        aplica='TELEFONICA'
    else:
        aplica='INTERNET'
    worksheet.write('G'+str(i+9),aplica,blue_content)
    
    for j in range(len(correos_eg)):
        worksheet.write(i+8,7+j,correos_eg['correo'].values[j],blue_content)
    
   


worksheet.set_column('B:D',17)
worksheet.set_column('E:E',20)
worksheet.set_column('F:M',28)
worksheet.set_landscape()
worksheet.set_paper(9)
worksheet.fit_to_pages(1, 1)  
workbook.close()
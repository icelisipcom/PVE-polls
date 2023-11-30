import smtplib

from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import sys

import os
def AvisoPrivacidad(nombre,you):
    me = "vinculacionexalumnos@exalumno.unam.mx"
# Create message container - the correct MIME type is multipart/alternative.
    msg = MIMEMultipart('alternative')
    msg['Subject'] = "Invitacion PVEAJU UNAM"
    msg['From'] = me
    msg['To'] = you

   # Create the body of the message (a plain-text and an HTML version).
    text = ""
    html = """\
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
       /* Add custom classes and styles that you want inlined here */
    </style>
  </head>
  <body class="bg-light">
    <div class="container">
      <div class="card my-10">
        <div class="card-body">
        <div class="row">
           <div class="col" >
                <img class="img-fluid" src="https://www.pveu.unam.mx/images/logoPVE.png" alt="Some Image" style="width: 25.0vw"/>
          </div>
             <div class="col-8" >
             <h1 class="h3 mb-2">PROGRAMA DE VINCULACION A EGRESADOS Y ACADEMICOS JUBILADOS DE LA UNAM</h1>
          </div>
          </div>
          <h5 class="text-teal-700">Here is a very simple email using Bootstrap Email</h5>
          <hr>
          <div class="space-y-3">
            <p class="text-gray-700">Click the "Render" button at the top of the page every time you want to rebuild the email.</p>
            <p class="text-gray-700">
              We hope you enjoy using Bootstrap Email. This is our Online Editor that allows you to edit emails
              and have them render directly in the browser. The outputted HTML will be in the "HTML" tab in the top
              and that is the HTML you want to use to send emails. All the styles and responsive CSS are self contained in the
              HTML that is generated making is very portable needing no external CSS files.
            </p>
            <p class="text-gray-700">
              You can use the "Test" button to email yourself the outputted code to test in your inbox and email client.
            </p>
            <p class="text-gray-700">
              Check out the <a href="https://bootstrapemail.com/docs/introduction" target="_blank">Documentation</a> for syntax and usage of writing emails with Bootstrap Email.
            </p>
          </div>
          <hr>
          <a class="btn btn-primary" href="https://app.bootstrapemail.com/templates" target="_blank">Get More Email Templates</a>
        </div>
      </div>
    </div>
  </body>
</html>
"""

# Record the MIME types of both parts - text/plain and text/html.
    part1 = MIMEText(text, 'plain')
    part2 = MIMEText(html, 'html')

# Attach parts into message container.
# According to RFC 2046, the last part of a multipart message, in this case
# the HTML message, is best and preferred.
    msg.attach(part1)
    msg.attach(part2)
# Send the message via local SMTP server.
    mail = smtplib.SMTP('smtp.gmail.com', 587)

    mail.ehlo()

    mail.starttls()

    mail.login('vinculacionexalumnos@exalumno.unam.mx', 'programa')
    mail.sendmail(me, you, msg.as_string())
    mail.quit()
nombre=str(sys.argv[1])
email=str(sys.argv[2])

AvisoPrivacidad(nombre,email)
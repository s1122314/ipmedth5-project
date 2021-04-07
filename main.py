import mysql.connector


import serial
import os
import time
mydb = mysql.connector.connect(
    host="localhost",
    user="laravel",
    passwd="radiot12",
    database="laravel"
)
port = serial.Serial("/dev/ttyUSB0", baudrate=9600, timeout=3.0)

mycursor = mydb.cursor()
while True:
    mycursor.execute("SELECT * FROM led;")
    for x in mycursor:
        print(x[1])
    if x[1] == 'aan':
        print(x[1])
        port.write("l1")
    else:
        port.write("l0")
        
    rcv = port.readline().strip()
    if (rcv == 'b'):
        os.system("python update.py")
    time.sleep(1)
    mydb.commit()

mydb.close()
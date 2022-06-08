import serial
import time
import os

file_name = "data.json" # Once created, open this file in a browser.

# Adapt serial port nr. & baud rate to your system.
serial_port = 'COM10'
baudrate = 9600


s = serial.Serial(serial_port,baudrate) # Open serial port.
s.dtr = 0 # Reset Arduino.
s.dtr = 1
print("Waiting for data...");
time.sleep(2) # Wait for Arduino to finish booting.
s.reset_input_buffer() # Delete any stale data.

while 1:
    data_str = s.readline().decode() # Read data & convert bytes to string type.
    print(data_str)
    data_str = data_str.replace('\r','') # Remove return.
    data_str = data_str.replace('\n','') # Remove new line.
    time.sleep(2)
    requete = 'curl -X PUT -H "Content-Type: application/json" -d ' + "'" + data_str + "'" + ' http://192.168.112.124/PUT_max.php'
    print (requete)
    os.system(requete)
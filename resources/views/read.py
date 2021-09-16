#!/usr/bin/env python

import signal
import time
import sys

from pirc522 import RFID

run = True
rdr = RFID()
util = rdr.util()
util.debug = True

def end_read(signal,frame):
    global run
    print("\nCtrl+C captured, ending read.")
    run = False
    rdr.cleanup()
    sys.exit()

signal.signal(signal.SIGINT, end_read)


while run:
    rdr.wait_for_tag()

    (error, data) = rdr.request()
    
    (error, uid) = rdr.anticoll()
    if not error:
        uid = hex(uid[1])[2:] + hex(uid[2])[2:] + hex(uid[3])[2:]  
        print(uid)

     
        time.sleep(1)

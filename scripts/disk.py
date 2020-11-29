#!/usr/bin/python3
# -*- coding: utf-8 -*-

import re
import subprocess
from graficas import graficar

process = subprocess.Popen(
    "df -m | tail +2",
    stdout=subprocess.PIPE,
    stderr=subprocess.PIPE,
    shell=True
)
process.wait()

dic = dict()

disk_info = process.stdout.read().decode()
disk_info = re.sub(" +", " ", disk_info)
cadena = ""
line = disk_info.split("\n")

for i in range(len(line)-1):

    array = line[i].split(" ")
    separador = array[5].rindex("/")
    hijo = array[5][separador+1:]
    padre = array[5][:separador+1]

    if(padre in dic):
        dic[padre] += hijo + " " + array[2] + " " + array[3]
    else:
        dic[padre] = [hijo + " " + array[2] + " " + array[3]] 

    cadena += "['" + hijo + "', '" + padre + "', " + array[2] + ", " + array[3] + "], \n"

for key in dic:
    if not "'" + key + "'" in cadena:
        value = dic[key]
        
        separador = key.rindex("/")
        padre = key[:separador+1]

        for item in value:
            a = item.split(" ")
            usado += int(a[1])
            libre += int(a[2])
        

        cadena += "['" + key + "', '" + padre + "', " + usado + ", " + libre + "], \n"
        


graficar('treemap-disk.js', cadena)

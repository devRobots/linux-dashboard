#!/usr/bin/python3
# -*- coding: utf-8 -*-

import re
import subprocess
from graficas import graficar

process = subprocess.Popen(
    "top -n1 -b | head -10 | tail -3",
    stdout=subprocess.PIPE,
    stderr=subprocess.PIPE,
    shell=True
)
process.wait()

salida = ''
pro = process.stdout.read().decode()
pro = re.sub(" +", " ", pro)

lista = pro.split("\n")
for i in range(len(lista)-1):
    linea = lista[i].split(' ')
    salida += "["
    for j in range(len(linea)):
        if linea[j].strip():
            salida += "'" + linea[j] + "'"
            if j < len(linea) - 1:
                salida += ","
    salida += "],\n\t\t"


graficar("table-process.js", salida)

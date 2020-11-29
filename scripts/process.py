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
    for j in range(1, len(linea)):
        salida += "'" + linea[j] + "'"
        if j < len(linea):
            salida += ","
    salida += "],\n\t\t"


graficar("table-process.js", salida)

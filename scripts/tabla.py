#!/usr/bin/python3
# -*- coding: utf-8 -*-
#
# title: ram.sh
# description: Este script obtiene el porcentaje de uso de la RAM.
# author: Yesid Shair Rosas Toro
# author: Luisa Fernanda Cotte Sanchez
# author: Cristian Camilo Quiceno Laurente
# version: 1.0

import subprocess
from graficas import graficar

process = subprocess.Popen(
    "cat /etc/passwd",
    stdout=subprocess.PIPE,
    stderr=subprocess.PIPE,
    shell=True
)
process.wait()

salida = ''
usuarios = process.stdout.read().decode()

lista = usuarios.split("\n")
for i in range(len(lista)-1):
    linea = lista[i].split(':')
    if int(lista[2]) >= 1000:
        salida += "["
        for j in range(len(linea)):
            if j != 1:
                salida += "'" + linea[j] + "'"
                if j < len(linea):
                    salida += ","
        salida += "],"
    

graficar("table-user.js", salida)

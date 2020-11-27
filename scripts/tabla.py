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
    "getent passwd {1000..2000}",
    stdout=subprocess.PIPE,
    stderr=subprocess.PIPE,
    shell=True
)
process.wait()

salida = ""
usuarios = process.stdout.read().decode()

lista = usuarios.splitlines()
for info in lista:
    linea = info.split(':')
    salida += "["
    for cosa in linea:
        salida += "'"+ cosa +"',"
    salida += "],"

graficar("table-user.js", salida)
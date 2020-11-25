#!/usr/bin/python3
# -*- coding: utf-8 -*-
#
# title: ram.sh
# description: Este script obtiene el porcentaje de uso de la RAM.
# author: Yesid Shair Rosas Toro
# author: Luisa Fernanda Cotte Sanchez
# author: Cristian Camilo Quiceno Laurente
# version: 1.0

import re
import subprocess
from graficas import graficar

process = subprocess.Popen(
    "free | head -2 | tail -1",
    stdout=subprocess.PIPE,
    stderr=subprocess.PIPE,
    shell=True
)
process.wait()

mem_info = process.stdout.read().decode()
mem_info = re.sub(" +", " ", mem_info).split()[1:3]

mem_total = float(mem_info[0])
mem_used = float(mem_info[1])
mem_free = mem_total - mem_used

used_avg = (mem_used*100)/mem_total
free_avg = (mem_free*100)/mem_total

used_info = ['Usada: %dk' % mem_used, used_avg]
free_info = ['Libre: %dk' % mem_free, free_avg]

output = "{0},\n\t\t{1}".format(used_info, free_info)

graficar("donut-ram.js", output)

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
    cadena += "['" + array[5] + "', 'Disco', " + \
        array[3] + ", " + array[2] + "], \n\t\t"

graficar('treemap-disk.js', cadena)

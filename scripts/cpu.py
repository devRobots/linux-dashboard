#!/usr/bin/python3
# -*- coding: utf-8 -*-

import subprocess
from graficas import graficar

process = subprocess.Popen(
    "cat /proc/loadavg",
    stdout=subprocess.PIPE,
    stderr=subprocess.PIPE,
    shell=True
)
process.wait()

cpu_info = process.stdout.read().decode().split(" ")
cpu_final = float(cpu_info[0]) * 10
cpu_final1 = float(cpu_info[1]) * 10
cpu_final2 = float(cpu_info[2]) * 10

cadena = """['1 minuto', %f],
        ['5 minuto', %f],
        ['15 minuto', %f]""" % (cpu_final, cpu_final1, cpu_final2)

graficar("gauge-cpu.js", cadena)

#!/usr/bin/python3
# -*- coding: utf-8 -*-

def graficar(file_name, content):
    try:
        with open("./js/" + file_name, "w") as grafica:
            with open("./templates/" + file_name, "r") as template:
                archivo = template.read().replace("$value_here$", content)
            grafica.write(archivo)
    except:
        pass

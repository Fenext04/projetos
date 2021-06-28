import numpy
import random

class GeradorCpf:
    def __init__(self):
        self.digitos = numpy.empty(11)
    def gerar_cpf(self):
        resposta = "não"
        while (resposta == "não"):
            soma_1 = 0
            m_1= 10
            cpf = numpy.array([random.randint(0,9),random.randint(0,9),random.randint(0,9),random.randint(0,9),random.randint(0,9),random.randint(0,9),random.randint(0,9),random.randint(0,9),random.randint(0,9),random.randint(0,9),random.randint(0,9)])
            for c in range (9):
                soma_1 += cpf[c] * m_1
                m_1 -= 1

            if (soma_1 % 11) >= 2:
                modulo = soma_1 % 11
                digito_Verificador1 = 11 - modulo
            else:
                digito_Verificador1 = 0

            soma_2= 0
            m_2 = 11
            for c in range(10):
                soma_2 += cpf[c] * m_2
                m_2 -= 1
            if soma_2 % 11 >= 2:
                modulo = soma_2 % 11
                digito_Verificador2 = 11 - modulo
            else:
                digito_Verificador2 = 0
            if digito_Verificador1 == cpf[9] and digito_Verificador2 == cpf[10]:
                resposta = "sim"
                self.digitos = cpf

            else:
                resposta = "não"

    def converter_cpf_em_texto(self):
        texto = ""
        texto += f"{str(self.digitos)}" + "\n"
        texto = texto.replace(" ", "")
        texto = texto.replace("[", "")
        texto = texto.replace("]", "")
        return texto
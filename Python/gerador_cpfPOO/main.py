from gerador_cpf import GeradorCpf

cpf = GeradorCpf()

contador = int(input("Informe a quantidade de cpfs válidos que vc deseja gerar: "))
with open("Cpfs.txt","w") as arquivo:
    for c in range(contador):
        cpf.gerar_cpf()
        arquivo.write(cpf.converter_cpf_em_texto())

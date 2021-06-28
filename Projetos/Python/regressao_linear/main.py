import pandas
import seaborn as sns
import matplotlib.pyplot as plt
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LinearRegression
from sklearn.ensemble import RandomForestRegressor
from sklearn import metrics
import numpy as np


tabela = pandas.read_csv("dados/advertising.csv")
print(tabela)

#vendo a correlação entre cada um dos itens

sns.pairplot(tabela)
plt.show()
sns.heatmap(tabela.corr(), cmap ='Wistia', annot =True)
plt.show()
#Podemos observar a corelação entre os anuncios de televisão e os aumentos de venda

#Separando em dados de treino e dados de teste. 70% para treino e o resto para teste
x = tabela.drop('Vendas', axis=1)
y = tabela['Vendas']
x_train, x_test, y_train, y_test = train_test_split(x,y,test_size=0.3, random_state=1)

#usarei 2 métodos para resolver e no final mostrarei o mais efetivo: Regressão Linear e RandomForest (Árvore de Decisão)
# treino AI
lin_reg = LinearRegression()
lin_reg.fit(x_train, y_train)

rf_reg = RandomForestRegressor()
rf_reg.fit(x_train, y_train)

#Avaliação do Melhor Modelo
#Usando o R² -> diz o % que o nosso modelo consegue explicar o que acontece
# O MSE (Erro Quadrático Médio) diz o erro quando tenta fazer uma previsão

# teste IA
test_pred_lin = lin_reg.predict(x_test)
test_pred_rf = rf_reg.predict(x_test)

r2_lin = metrics.r2_score(y_test, test_pred_lin)
mse_lin = metrics.mean_squared_error(y_test, test_pred_lin)
print(f"R² da Regressão Linear: {r2_lin}")
print(f"MSE da Regressão Linear: {mse_lin}")
r2_rf= metrics.r2_score(y_test, test_pred_rf)
mse_rf = metrics.mean_squared_error(y_test, test_pred_rf)
print(f"R² do Random Forest: {r2_rf}")
print(f"MSE do Random Forest: {mse_rf}")

#o modo randomforest demostrou ter tido os resultados mais próximos dos dados reais de teste
tabela_resultado = pandas.DataFrame()
# tabela_resultado.index = x_test
tabela_resultado['Vendas Reais'] = y_test
tabela_resultado['Arvores de Decisão'] = test_pred_rf
tabela_resultado['Regressão Linear'] = test_pred_lin
# display(tabela_resultado)
tabela_resultado = tabela_resultado.reset_index(drop=True)
plt.figure(figsize=(15, 5))
sns.lineplot(data=tabela_resultado)
plt.show()
print(tabela_resultado)

#importancia das 3 variáveis para a venda
plt.figure(figsize=(15, 5))
sns.barplot(x=x_train.columns, y=rf_reg.feature_importances_)
plt.show()

print(tabela[["Radio", "Jornal"]].sum())
#se pudermos conferir a empresa investe mais em jornal do que  a rádio, mesmo ela sendo menos influente
############socket servidor ###################


#!/usr/bin/python3
import socket
MEU_IP = ''  
# Endereco IP do Servidor, '' = significa que ouvira em todas as interfaces

MINHA_PORTA = 8080  
#Porta que o Servidor vai ouvir 

tcp = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
#socket.AF_INET = INET (exemplo IPv4)sockets, #socket.SOCK_STREAM=usaremos TCP

#x = 1
testa_mensagem = ''
ultima_lida = ''
MEU_SERVIDOR = (MEU_IP, MINHA_PORTA) 
tcp.bind(MEU_SERVIDOR)
# faz o bind do ip e a porta para que possa comecar a ouvir
while 1:
 tcp.listen(1) 
#comeca a ouvir

 conexao, docliente =tcp.accept()
# print ("o cliente = ", docliente, " se conectou")
#pega o ip do cliente que conectou

 while 1:
  Mensagem_Recebida = conexao.recv(1024)
 #Mensagem recebida do cliente 
  if testa_mensagem != Mensagem_Recebida and ultima_lida!=Mensagem_Recebida:
   ultima_lida=Mensagem_Recebida;
   if ultima_lida!='':
    stringmensagem=str(Mensagem_Recebida)  
    if len(stringmensagem)>2:
 #aqui verifica se exite mensagem nova
     cocacola=stringmensagem.split('usuario')[1]  
  #print ("Recebi = ",Mensagem_Recebida," , Do cliente", docliente)
     print ("Login=",cocacola.split('&')[0]," ,  ", cocacola.split('&')[1])
  break

# else:
#  tcp.listen(1)
#  conexao, docliente =tcp.accept()
#conexao.close()
#fim do socket

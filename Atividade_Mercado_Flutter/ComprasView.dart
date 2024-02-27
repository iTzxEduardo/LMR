// Classe que representa a tela principal da lista de tarefas
import 'package:atividade_somativa/ComprasController.dart';
import 'package:flutter/material.dart';
import 'package:provider/provider.dart';

class ListaComprasScreen extends StatelessWidget {
  // Controlador para o campo de texto de nova tarefa
  final TextEditingController _controller = TextEditingController();

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      // Barra superior do aplicativo
      appBar: AppBar(
        title: Text('Lista de Compras'),
      ),
      // Corpo principal do aplicativo
      body: Column(
        children: [
          // Campo de texto para adicionar nova compra
          Padding(
            padding: const EdgeInsets.all(8.0),
            child: TextField(
              controller: _controller,
              decoration: InputDecoration(
                labelText: 'Adicione o item na lista',
                // Ícone para adicionar compra ao pressionar o botão
                suffixIcon: IconButton(
                  onPressed: () {
                    try {
                      // Chamando o método adicionarTarefa do Provider para atualizar o estado
                      Provider.of<ListaComprasModel>(context, listen: false)
                          .adicionarCompra(_controller.text, Colors.green);

                      // Limpar o campo de texto após adicionar a tarefa
                      _controller.clear();
                    } catch (e) {
                      // Handle the exception (display a message, log, etc.)
                      ScaffoldMessenger.of(context).showSnackBar(
                        SnackBar(
                          content: Text(
                            e.toString().replaceAll('Exception: ', ''),
                            textAlign: TextAlign.center, // Center the text
                          ),
                          backgroundColor:
                              Colors.red, // Customize the background color
                          behavior: SnackBarBehavior
                              .floating, // Customize the behavior
                          duration:
                              Duration(seconds: 3), // Customize the duration
                        ),
                      );
                    }
                  },
                  icon: Icon(Icons.add),
                ),
              ),
            ),
          ),

          // Lista de compras usando um Consumer do Provider para atualização automática
          Expanded(
            child: Consumer<ListaComprasModel>(
              builder: (context, model, child) {
                return ListView.builder(
                  itemCount: model.compras.length,
                  itemBuilder: (context, index) {
                    return ListTile(
                      // Exibição do texto da compra
                      title: Row(
                        children: [
                          Text(model.compras[index].descricao),
                          SizedBox(
                              width:
                                  10), // Espaço entre a descrição e os botões de quantidade
                          Row(
                            children: [
                              IconButton(
                                icon: Icon(Icons.remove),
                                onPressed: () {
                                  // Reduz a quantidade quando o botão de remoção é pressionado
                                  if (model.compras[index].quantidade > 1) {
                                    model.atualizarQuantidade(index,
                                        model.compras[index].quantidade - 1);
                                  }
                                },
                              ),
                              Text(
                                  '${model.compras[index].quantidade}'), // Exibição da quantidade
                              IconButton(
                                icon: Icon(Icons.add),
                                onPressed: () {
                                  // Aumenta a quantidade quando o botão de adição é pressionado
                                  model.atualizarQuantidade(index,
                                      model.compras[index].quantidade + 1);
                                },
                              ),
                            ],
                          ),
                        ],
                      ),
                      // Exibição da data e hora da tarefa
                      subtitle: Text(
                        '${model.compras[index].dataHora.day}/${model.compras[index].dataHora.month}/${model.compras[index].dataHora.year} ${model.compras[index].dataHora.hour}:${model.compras[index].dataHora.minute}',
                      ),
                      // Checkbox para marcar a tarefa como concluída
                      trailing: Checkbox(
                        value: model.compras[index].concluida,
                        onChanged: (value) {
                          // Chamando o método marcarComoConcluida do Provider para atualizar o estado
                          model.marcarComoConcluida(index);
                        },
                      ),
                      onLongPress: () {
                        // Exibir um AlertDialog para confirmar a exclusão
                        showDialog(
                          context: context,
                          builder: (BuildContext context) {
                            return AlertDialog(
                              title: Text('Confirmar exclusão'),
                              content: Text(
                                'Tem certeza de que deseja excluir esta tarefa?',
                              ),
                              actions: [
                                TextButton(
                                  onPressed: () {
                                    Navigator.of(context)
                                        .pop(); // Fechar o AlertDialog
                                  },
                                  child: Text('Cancelar'),
                                ),
                                TextButton(
                                  onPressed: () {
                                    // Chamando o método excluirTarefa do Provider para atualizar o estado
                                    model.excluirTarefa(index);
                                    Navigator.of(context)
                                        .pop(); // Fechar o AlertDialog após a exclusão

                                    // Exibir um SnackBar informando que a tarefa foi excluída
                                    ScaffoldMessenger.of(context).showSnackBar(
                                      SnackBar(
                                        content: Text(
                                          'Tarefa excluída com sucesso',
                                          textAlign: TextAlign
                                              .center, // Center the text
                                        ),
                                      ),
                                    );
                                  },
                                  child: Text('Confirmar'),
                                ),
                              ],
                            );
                          },
                        );
                      },
                    );
                  },
                );
              },
            ),
          ),
        ],
      ),
    );
  }
}

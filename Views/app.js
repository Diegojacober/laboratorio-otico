
$(document).ready(() => {

  $('#competencia').on('change', e => {

    let competencia = $(e.target).val()

    $.ajax({
      //objeto literal
      //metodo,url,dados,sucesso,erro
      type: 'GET',
      url: '../Controllers/app.php',
      data: `competencia=${competencia}`,//x-www-form-urlencoded
      dataType: 'json',
      success: dados => {
        
        $('#totalDeVendas').html(dados.total_de_vendas)
        $('#nmrDevendas').html(dados.numero_de_vendas)
        $('#clientesativos').html(dados.clientes_ativos)
        $('#clientesinativos').html(dados.clientes_inativos)
        $('#total_despesas').html(dados.total_de_despesas)
        $('#totaldeprodutos').html(dados.total_de_produtos)
      },
      error: erro => { console.log(erro) }

    })
  })

  $('#id_cliente').on('change', e => {

    let id_cliente = $(e.target).val()

    $.ajax({
      //objeto literal
      //metodo,url,dados,sucesso,erro
      type: 'GET',
      url: '../Controllers/cliente_service.php',
      data: `recuperarum&id_cliente=${id_cliente}`,//x-www-form-urlencoded
      dataType: 'json',
      success: dados => {
        
        $('#razao').val(dados[0].nome)
        $('#cnpj').val(dados[0].cnpj)
        $('#nomef').val(dados[0].nome_fantasia)
      
      },
      error: erro => { console.log(erro) }

    })
  })

})

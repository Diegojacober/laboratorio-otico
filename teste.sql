DROP TABLE tb_vendas,tb_clientes,tb_produtos;
CREATE TABLE `tb_clientes` (
  `id_cliente` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nome_fantasia` varchar(80) UNIQUE,  
    cnpj varchar(50) UNIQUE,
   `nome` varchar(50) UNIQUE DEFAULT NULL,
  `telefone` varchar(50)  DEFAULT NULL,
  `cidade` varchar(50)  DEFAULT NULL,
  `cliente_ativo` boolean DEFAULT true
)ENGINE=InnoDB;

CREATE TABLE `tb_produtos` (
  `id_produto` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `valor` float(10,2) UNIQUE NOT NULL,
  `descricao` varchar(80) UNIQUE NOT NULL
)ENGINE=InnoDB;


CREATE TABLE `tb_vendas` (
  `idvenda` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `valor_da_venda` float(10,2),
  `nome_cliente` varchar(50),
   `nome_fantasia` varchar(80),
    cnpj varchar(50),
  `produto` varchar(80),
  `id_produto` int(11),
  `id_cliente` int(11),
  `data_venda` datetime DEFAULT current_timestamp(),
  `os` varchar(20) NOT NULL,
  FOREIGN KEY (nome_cliente) REFERENCES tb_clientes (nome),
    FOREIGN KEY (nome_fantasia) REFERENCES tb_clientes (nome_fantasia),
     FOREIGN KEY (id_cliente) REFERENCES tb_clientes (id_cliente),
    FOREIGN KEY (id_produto) REFERENCES tb_produtos (id_produto),
    FOREIGN KEY (produto) REFERENCES tb_produtos (descricao),
    FOREIGN KEY (valor_da_venda) REFERENCES tb_produtos (valor),
    FOREIGN KEY (cnpj) REFERENCES tb_clientes (cnpj)
    ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB;



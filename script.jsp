let carrinho = [];

function adicionarAoCarrinho(nome, preco) {
  carrinho.push({ nome, preco });
  atualizarCarrinho();
}

function atualizarCarrinho() {
  const itensDiv = document.getElementById('itens-carrinho');
  const totalDiv = document.getElementById('total');
  const contador = document.getElementById('contador');

  if (carrinho.length === 0) {
    itensDiv.innerHTML = 'Nenhum imóvel selecionado.';
    totalDiv.textContent = 'Valor total estimado: R$ 0,00';
    contador.textContent = '0';
    return;
  }

  let html = '<ul>';
  let total = 0;

  carrinho.forEach(item => {
    html += `<li>${item.nome} - R$ ${item.preco.toLocaleString('pt-BR')}</li>`;
    total += item.preco;
  });

  html += '</ul>';
  itensDiv.innerHTML = html;
  totalDiv.textContent = `Valor total estimado: R$ ${total.toLocaleString('pt-BR')}`;
  contador.textContent = carrinho.length;
}

function toggleCarrinho() {
  const carrinho = document.getElementById('carrinho');
  carrinho.style.display = (carrinho.style.display === 'block') ? 'none' : 'block';
}

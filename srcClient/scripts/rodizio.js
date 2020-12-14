var rodizioSelected = 0;

function CreateDivRodizio(nameRodizio, priceRodizio, descRodizio, tagString){
    var divRodizio = document.createElement('div');
	var divTitle = document.createElement('div');
    var pName = document.createElement('p');
    var pPrice = document.createElement('p');
    var divLine = document.createElement('div');
    var divDesc = document.createElement('div');
    var pDesc = document.createElement('p');
    var btn = document.createElement('button');
    var breakline = document.createElement('text');
	
    divRodizio.className = 'divRodizio';
    divTitle.className = 'divTitle';
    pName.className = 'rodizioName';
    pPrice.className = 'rodizioPreco';
    divLine.className = 'line';
    divDesc.className = 'divDescRodizio';
    pDesc.className = 'descRodizio';
    btn.className = 'btn btn-success btn-sm btnRodizio';
    
    btn.type = 'button';
    btn.onclick = function() { SelectRodizio(tagString); };
	
	pName.innerHTML = nameRodizio;
    pDesc.innerHTML = descRodizio;
	pPrice.innerHTML = 'R$ ' + priceRodizio;
    btn.innerHTML = 'Selecionar Rodízio';
    breakline.innerHTML = '<br>';

	document.getElementById('rodizioDiv').appendChild(divRodizio);
    divRodizio.appendChild(divTitle);
    divTitle.appendChild(pName);
    divTitle.appendChild(pPrice);
    divRodizio.appendChild(divLine);
    divRodizio.appendChild(divDesc);
    divDesc.appendChild(pDesc);
    divDesc.appendChild(btn);
    divRodizio.appendChild(breakline);
}

function SelectRodizio(tagString){
    rodizioSelected = 1;
    
    var tags = tagString.split('~');
    var cardapioDivs = document.getElementsByClassName('cardapioItemDiv');
   
    for(var i = 0; i < cardapioDivs.length; i++){
        var contains = false;
        var cardapioTags = cardapioDivs[i].children[3].children[0].innerHTML.split('\n');
        
        for(var j = 0; j < (cardapioTags.length-1); j++){
            
            for(var k = 0; k < (tags.length-1); k++){
                if(cardapioTags[j] == tags[k]){
                    contains = true;
                }
            }
        }
        if(contains)
            cardapioDivs[i].style.display = 'block';
        else
            cardapioDivs[i].style.display = 'none';
    }
    
    OpenCardapioTab('navCardapio');
}

function OpenCardapioTab(tabName) {
  var i, tabContent, navButton;
  tabContent = document.getElementsByClassName("tabContent");
  for (i = 0; i < tabContent.length; i++) {
    tabContent[i].style.display = "none";
  }
  navButton = document.getElementsByClassName("navButton");
  for (i = 0; i < navButton.length; i++) {
    navButton[i].className = navButton[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  document.getElementById('cardapioTab').className += " active";
  
  if(document.getElementById("navBarID").className != "navBar")
	OpenNavMobile();
}
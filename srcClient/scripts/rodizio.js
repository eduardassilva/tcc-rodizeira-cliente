var rodizioSelected = 0;

function CreateDivRodizio(nameRodizio, priceRodizio, descRodizio, tagString){
    var divPanel = document.createElement('div');
	var divPanelHeading = document.createElement('div');
    var hTitle = document.createElement('h4');
    var aRodName = document.createElement('a');
    var divPanelCollapse = document.createElement('div');
    var divPanelBody = document.createElement('div');
    var pRodDesc = document.createElement('p');
    var pRodPrice = document.createElement('p');
    var buttonSelect = document.createElement('button');
	
    divPanel.className = 'panel-default';
    divPanelHeading.className = 'panel-heading';
    hTitle.className = 'panel-title';
    aRodName.className = 'tituloRodizio accordion-toggle collapsed';
    divPanelCollapse.className = 'panel-collapse collapse';
    divPanelBody.className = 'panel-body';
    pRodDesc.className = 'descRodizio';
    pRodPrice.className = 'precoRodizio';
    buttonSelect.className = 'pedirRodizio btn btn-success';
    
    aRodName.setAttribute('data-toggle', 'collapse');
    aRodName.setAttribute('data-parent', '#accordion');
    aRodName.href = '#' + nameRodizio.replace(/\s/g,'');
    
    divPanelCollapse.id = nameRodizio.replace(/\s/g,'');
    
    //buttonSelect.id = nameRodizio;
    buttonSelect.type = 'button';
    buttonSelect.onclick = function() { SelectRodizio(tagString); };
	
	aRodName.innerHTML = nameRodizio;
    pRodDesc.innerHTML = descRodizio;
	pRodPrice.innerHTML = 'R$ ' + priceRodizio;
    buttonSelect.innerHTML = 'Selecionar Rodízio';

	document.getElementById('accordion').appendChild(divPanel);
    divPanel.appendChild(divPanelHeading);
    divPanelHeading.appendChild(hTitle);
    hTitle.appendChild(aRodName);
    divPanel.appendChild(divPanelCollapse);
    divPanelCollapse.appendChild(divPanelBody);
    divPanelBody.appendChild(pRodDesc);
    divPanelBody.appendChild(pRodPrice);
    divPanelBody.appendChild(buttonSelect);
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
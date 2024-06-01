function OnJson(json, afferenza) {
    console.log('json ricevuto');
    console.log(json);
    const sezione = document.querySelector('#visualizza_prodotti_mulino');
    sezione.innerHTML = '';
    const lunghezza = json.length;
    console.log(lunghezza);
    
    for (let i = 0; i < lunghezza; i++) {
        const titolo = document.createElement('p');
        const container = document.createElement('div');
        const image = document.createElement('img');
        const link = document.createElement('a');
        const cuores = document.createElement('img');
        console.log('Creazione immagine cuores per prodotto ' + i);

        cuores.classList.add('immagine_cuore');
        const cuoreBianco = "https://static.craftelier.com/media/catalog/product/cache/mtda/858x858/c/a/captura_de_pantalla_2022-01-18_a_las_11.46.50.webp";
        const cuoreRosso = "https://i.etsystatic.com/41797045/r/il/60d999/4702436168/il_794xN.4702436168_1qmn.jpg";
        
        // Controlla se il prodotto è nella tabella afferenza
        if (afferenza.includes(json[i].Id)) {
            cuores.src = cuoreRosso;
        } else {
            cuores.src = cuoreBianco;
        }

        cuores.addEventListener('click', function() {
            if (cuores.src === cuoreBianco) {
                cuores.src = cuoreRosso;
                fetch('modifica_afferenza.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        id_prodotto: json[i].Id,
                        x: 1,
                    })
                });
            } else if (cuores.src === cuoreRosso) {
                cuores.src = cuoreBianco;
                fetch('modifica_afferenza.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        id_prodotto: json[i].Id,
                        x: 0,
                    })
                });
            }
        });

        link.appendChild(cuores);
        titolo.textContent = json[i].Nome;
        console.log(titolo);
        image.src = json[i].Url_immagine;
        image.classList.add('immagine_prodotto');
        container.classList.add('div_da_visualizzare_prodotti');
        
        container.appendChild(link);
        container.appendChild(image);
        container.appendChild(titolo);
        sezione.appendChild(container);
    }
}

function OnResponse(response) {
    return response.json();
}

fetch("fornisci_prodotti.php")
    .then(OnResponse)
    .then(function(json) {
        
        fetch("ottieni_afferenza.php")
            .then(OnResponse)
            .then(function(afferenza) {
                
                OnJson(json, afferenza);
            });
    });

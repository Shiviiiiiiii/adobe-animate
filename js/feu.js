let feuDepart = {
            h1: document.getElementsByTagName('h1')[0],
            start: document.getElementById('strt'),
            stop: document.getElementById('stp'),
            reset: document.getElementById('rst'),
            audioOBJ: new Audio('https://lasonotheque.org/UPLOAD/ogg/0437.ogg'), //son de départ
            audioOBJ2: new Audio('http://192.168.112.124/ogg/La_Purge.ogg'),     //son de fin
            ms: 0,
            sec: 0,
            min: 0,
            t: null,  

            play: () => {
                feuDepart.audioOBJ.play(); //son depart
            },

            play2: () => {
                feuDepart.audioOBJ2.play(); //son de fin
            },

            // fonction tick va calculer les ms arriver a 999 va mettre +1 au seconde jusqu a 59s et a 60s va mettre +1 au min

            tick: () => {
                feuDepart.ms += 5;
                if (feuDepart.ms >= 999) {
                    feuDepart.ms = 0;
                    feuDepart.sec++;
                    if (feuDepart.sec >= 60) {
                        feuDepart.sec = 0;
                        feuDepart.min++;
                        if (feuDepart.min == 5) {
                            feuDepart.play2();
                            if (feuDepart.min >= 60) {
                                feuDepart.min = 0;
                            }
                        }
                    }
                }
            },
            
            // fonction add va faire en sorte que si les ms, les secondes ou les min, sont a 9 alors le prochain chiffre suivant a afficher est 0

            add: () => {
                feuDepart.tick();
                feuDepart.h1.textContent = (feuDepart.min > 9 ? feuDepart.min : "0" + feuDepart.min) +
                    ":" + (feuDepart.sec > 9 ? feuDepart.sec : "0" + feuDepart.sec) +
                    ":" + (feuDepart.ms > 9 ? feuDepart.ms : "0" + feuDepart.ms);
                feuDepart.timer();
            },

            // fonction timer c est a vitesse du temps durant lequel il va s ecoulerl

            timer: () => {
                feuDepart.t = setTimeout(feuDepart.add, 1);
            },
            
        };
        
        // Ajout d un parametre stopped sur les couleurs du feu, lors du clique sur la page, cela va enlever tous les stoppe et va executer les setTimeout du sonde depart et du feu
        // pour que ceux-ci se lance en meme temps que l affichage de la couleur verte du feu

window.addEventListener('load', () => {
    document.addEventListener('click', () => {
        setTimeout(feuDepart.play, 9000);
        setTimeout(feuDepart.timer, 9000);
        for(let e of document.querySelectorAll('.stopped')) {
            e.classList.remove('stopped');
        }
    });
});

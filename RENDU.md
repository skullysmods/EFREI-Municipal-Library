# Sécurisation de l’application *« Bibliothèque »*

## Authentification 48h
Lors d'une connexion le 10/10/2025 à 23h17 (heure française UTC+2), le cookie de session à pour date d'expiration le 12/10/2025 à 21h17 (UTC) donc cela donc 23h17 en heure française UTC+2.  
L'authentification est donc valide durant 48h
![img.png](assets/img/auth_48h.png)

## *Cookie* du mode affichage
Lors d'un clic sur le bouton "Switch Theme Mode", le cookie de couleur du theme change de light à dark et inversement
![cookie_light.png](assets/img/cookie_light.png)

![cookie_dark.png](assets/img/cookie_dark.png)

## Protection CSRF

- *Screenshot*

## Vulnérabilités des dépendances
Deux commande native sont disponibles pour vérifier les vulnérabilités présentes dans les dépendances
```bash
symfony check:security
```
ou
```bash
composer audit
```
Sur les dépots GitHub, il est possible de configurer Dependabot pour alerter en cas de vulnérabilité dans les dépendances et propose de mise à jour de celle ci.

## Difficultés rencontrées et solutions
À compléter

## Bilan des acquis
- À compléter
- À compléter
- À compléter
- Etc. 

## Remarques complémentaires
À compléter, si besoin.  

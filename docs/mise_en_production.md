Mise en production du theme Euterpia Radio 4
==

Mettre à jour toutes les extensions et tous les thèmes

Activer le thème

Créer les menus :
- RSS : http://euterpiaradio.yma/feed/podcast/euterpia-radio
- iTunes : https://itunes.apple.com/fr/podcast/euterpia-radio-le-podcast/id1196279853?mt=2
- Stitcher : http://www.stitcher.com/s?fid=134781&refid=stpr
- Miro : http://www.miroguide.com/audio/16392
- TuneIn : http://tunein.com/radio/Euterpia-Radio-s155092/

Désactiver PowerPress

Activer SSP Migrate

Activer SSP et SSS

Créer les séries (ER et ER:R) dans SSP
- Image de couverture ;
- Catégories et titres.

Transférer tous les articles dans la catégorie "Blog"

Lancer la migration vers SSP

Faire de "Blog" la catégorie par défaut

Supprimer les catégories inutiles

Inclure les podcasts dans le blog

Ajouter ceci dans .htaccess :
```
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^category/euterpia-radio/feed$ feed/podcast/euterpia-radio [L,R=301]
RewriteRule ^category/euterpia-radio-rock/feed$ feed/podcast/euterpia-radio-rock [L,R=301]
</IfModule>
```

Vérifier que le 301 fonctionne :
http://euterpiaradio.yma/category/euterpia-radio/feed
http://euterpiaradio.yma/category/euterpia-radio-rock/feed

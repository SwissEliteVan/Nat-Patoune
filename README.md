# Nat-Patoune - Thème WordPress

Thème WordPress personnalisé pour Nat-Patoune, service de garde de chats à domicile à Lausanne et environs.

## Optimisations et fonctionnalités

Ce thème a été optimisé pour offrir une expérience utilisateur de qualité, des performances optimales et une bonne compatibilité avec les standards du web.

### Accessibilité

Le thème respecte les bonnes pratiques d'accessibilité :

- **Skip link** : Permet aux utilisateurs de clavier de sauter directement au contenu principal
- **Navigation clavier** : Menu principal et mobile entièrement navigables au clavier
- **Focus visible** : Styles de focus améliorés pour tous les éléments interactifs
- **Contraste** : Couleurs optimisées pour un contraste suffisant (WCAG AA)
- **Labels** : Tous les formulaires ont des labels correctement associés
- **ARIA** : Attributs ARIA utilisés pour améliorer la navigation et la compréhension
- **Textes alternatifs** : Support pour les textes alternatifs sur toutes les images

### Performance

Le thème est optimisé pour de bonnes performances :

- **Images WebP** : Support des images au format WebP avec fallback
- **Dimensions d'images** : Tailles d'images prédéfinies pour éviter le CLS (Cumulative Layout Shift)
- **Lazy loading** : Chargement différé des images non critiques
- **Async/Defer** : Scripts chargés de manière asynchrone quand possible
- **Minification** : CSS et JS minifiés pour la production
- **Cache** : Compatible avec les plugins de cache

### Sécurité

Plusieurs mesures de sécurité ont été implémentées :

- **Échappement** : Toutes les données sont correctement échappées avant affichage
- **Nonces** : Utilisés pour les actions sensibles
- **Validation** : Validation des entrées utilisateur dans les formulaires
- **Sanitization** : Nettoyage des données avant utilisation
- **Protection contre les injections** : Requêtes préparées pour les interactions avec la base de données

### Robustesse

Le thème est conçu pour être robuste et éviter les erreurs :

- **Fallbacks** : Des valeurs par défaut pour toutes les options et champs ACF
- **Template parts** : Utilisation de `locate_template()` pour une meilleure gestion des templates
- **Vérifications** : Vérification de l'existence des fichiers et fonctions avant utilisation
- **Débogage** : Configuration WP_DEBUG_LOG pour faciliter le diagnostic des problèmes

## Configuration et utilisation

### Réglages WordPress recommandés

1. **Pages statiques** :
   - Page d'accueil : "Accueil"
   - Page des articles : "Blog"

2. **Permaliens** :
   - Structure recommandée : `/%postname%/`

3. **Menus** :
   - Créer et assigner un menu à l'emplacement "Menu Principal (Header)"
   - Créer et assigner un menu à l'emplacement "Menu Footer"

### Personnalisation

Le thème offre plusieurs options de personnalisation via le Customizer WordPress :

1. **Informations de contact** :
   - Téléphone
   - Email
   - Activation WhatsApp

2. **CTA Principal** :
   - Texte du bouton
   - URL du bouton

3. **CTA Fin d'Article** :
   - Titre, texte et bouton personnalisables

4. **Bannière Cookies** :
   - Activation/désactivation
   - Texte personnalisable
   - Lien vers la politique de cookies

## Diagnostic et débogage

Pour activer le mode débogage :

1. Ouvrir le fichier `functions.php`
2. Décommenter la section "Configuration de débogage"
3. Les erreurs seront enregistrées dans `wp-content/debug.log`

## Compatibilité

- WordPress 6.0+
- PHP 7.4+
- Navigateurs modernes (Chrome, Firefox, Safari, Edge)
- Responsive design (mobile, tablette, desktop)

## Crédits

Développé par Swiss Elite Van
# 📋 Documentation des URLs et Slugs - INOVIXORA

## 🏠 Pages Principales

| Page | URL | Description |
|------|-----|-------------|
| Accueil | `/` | Page d'accueil du site |
| À propos | `/a-propos` | Présentation de l'agence |
| Réalisations | `/realisations` | Portfolio des projets |
| Formations | `/programmes` | Liste des formations |
| Blog | `/blog` | Articles de blog |
| Contact | `/contact` | Formulaire de contact + FAQ |

---

## 🎯 Pages Services (Single)

### Services SR (Stratégie & Réalisation)

| Service | Slug | URL Complète |
|---------|------|--------------|
| Création de site web | `creation-site-web` | `/service/creation-site-web` |
| Marketing Digital | `marketing-digital` | `/service/marketing-digital` |
| Automatisation & IA | `automatisation-ia` | `/service/automatisation-ia` |

### Services GL (Gestion & Logistique)

| Service | Slug | URL Complète |
|---------|------|--------------|
| Formation Informatique | `formation-informatique` | `/service/formation-informatique` |
| Conseils & Audit | `conseils-audit` | `/service/conseils-audit` |

---

## 💼 Pages Projets (Single)

| Projet | Slug | URL Complète |
|--------|------|--------------|
| Automatisation OPCO & Qualiopi | `automatisation-opco-qualiopi` | `/projet/automatisation-opco-qualiopi` |

> **Note:** Actuellement, un seul projet est configuré. Vous pouvez ajouter d'autres projets dans `routes/web.php`

---

## 🎓 Pages Formations (Single)

| Formation | Slug | URL Complète |
|-----------|------|--------------|
| Conception Graphique | `conception-graphique` | `/formation/conception-graphique` |

> **Note:** Actuellement, une seule formation est configurée. Vous pouvez ajouter d'autres formations dans `routes/web.php`

---

## 🧪 URLs à Tester

### ✅ URLs Fonctionnelles

```bash
# Pages principales
http://localhost/
http://localhost/a-propos
http://localhost/realisations
http://localhost/programmes
http://localhost/blog
http://localhost/contact

# Services
http://localhost/service/creation-site-web
http://localhost/service/marketing-digital
http://localhost/service/automatisation-ia
http://localhost/service/formation-informatique
http://localhost/service/conseils-audit

# Projets
http://localhost/projet/automatisation-opco-qualiopi

# Formations
http://localhost/formation/conception-graphique
```

### ❌ Test Page 404

```bash
# Ces URLs devraient afficher la page 404 personnalisée
http://localhost/page-inexistante
http://localhost/service/slug-invalide
http://localhost/projet/projet-inexistant
http://localhost/formation/formation-inexistante
```

---

## 🔧 Comment Ajouter de Nouveaux Slugs

### Ajouter un Service

Éditer `routes/web.php` et ajouter dans le tableau `$services` :

```php
'nouveau-service' => [
    'title' => 'Titre du Service',
    'description' => 'Description...',
    // ... autres données
]
```

### Ajouter un Projet

Éditer `routes/web.php` et ajouter dans le tableau `$projects` :

```php
'slug-du-projet' => [
    'title' => 'Titre du Projet',
    'hero_image' => 'URL de l\'image',
    // ... autres données
]
```

### Ajouter une Formation

Éditer `routes/web.php` et ajouter dans le tableau `$trainings` :

```php
'slug-formation' => [
    'title' => 'Titre de la Formation',
    'image' => 'URL de l\'image',
    // ... autres données
]
```

---

## 🎨 Fonctionnalités Spéciales

### Navigation
- Menu desktop avec dropdown Services
- Menu mobile responsive
- Bouton CTA "Consultation Gratuite"
- Curseur personnalisé (point bleu qui suit la souris)

### Animations
- AOS (Animate On Scroll) sur toutes les pages
- Transitions fluides
- Effets hover élégants

### Multilingue
- Français (par défaut)
- Anglais
- Changement de langue via le sélecteur 🌐

---

## 📝 Notes Importantes

1. **Slugs sensibles à la casse** : Utilisez toujours des minuscules avec des tirets
2. **Format des slugs** : `mot-mot-mot` (pas d'espaces, pas de caractères spéciaux)
3. **404 personnalisée** : Toute URL invalide affiche une belle page 404
4. **Responsive** : Toutes les pages sont optimisées mobile/tablette/desktop

---

## 🚀 Commandes Utiles

```bash
# Démarrer le serveur de développement
php artisan serve

# Compiler les assets
npm run dev

# Build production
npm run build

# Vider le cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
```

---

**Dernière mise à jour :** Mars 2026
**Version :** 1.0

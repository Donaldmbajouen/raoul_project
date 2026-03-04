# 🎯 ADMIN - Spécifications Fonctionnelles

## Vue d'ensemble
Documentation des fonctionnalités essentielles pour la partie administration du site INOVIXORA.

---

## 1. 📝 BLOG

### Fonctionnalités CRUD
- ✅ Créer un article
- ✅ Modifier un article
- ✅ Supprimer un article
- ✅ Liste des articles avec filtres

### Champs requis
| Champ | Type | Obligatoire |
|-------|------|-------------|
| Titre | Texte | Oui |
| Slug | Texte (auto-généré) | Oui |
| Contenu | WYSIWYG | Oui |
| Image principale | Upload | Oui |
| Extrait | Textarea | Non |
| Catégorie | Select | Oui |
| Tags | Multi-select | Non |
| Auteur | Select | Oui |
| Date de publication | Date | Oui |
| Statut | Select (brouillon/publié) | Oui |

### SEO
- Meta title
- Meta description
- Meta keywords
- URL canonique

### Fonctionnalités avancées
- Éditeur WYSIWYG (TinyMCE ou CKEditor)
- Upload d'images dans le contenu
- Prévisualisation avant publication
- Planification de publication
- Gestion des catégories
- Gestion des tags

---

## 2. 🛠️ SERVICES

### Fonctionnalités CRUD
- ✅ Créer un service
- ✅ Modifier un service
- ✅ Supprimer un service
- ✅ Réorganiser l'ordre d'affichage

### Champs requis
| Champ | Type | Obligatoire |
|-------|------|-------------|
| Titre | Texte | Oui |
| Slug | Texte (auto-généré) | Oui |
| Catégorie | Select (SR/GL) | Oui |
| Description courte | Textarea | Oui |
| Description complète | WYSIWYG | Oui |
| Image principale | Upload | Oui |
| Icône | Upload/Select | Non |
| Prix de base | Nombre | Non |
| Ordre d'affichage | Nombre | Oui |
| Actif | Boolean | Oui |

### Sections dynamiques
- **Avantages** (liste répétable)
  - Titre
  - Description
  - Icône
  
- **Processus** (étapes)
  - Numéro
  - Titre
  - Description

- **FAQ du service**
  - Question
  - Réponse

### Fonctionnalités avancées
- Drag & drop pour réorganiser
- Duplication de service
- Activation/désactivation rapide
- Filtrage par catégorie (SR/GL)

---

## 3. 🎓 FORMATIONS

### Fonctionnalités CRUD
- ✅ Créer une formation
- ✅ Modifier une formation
- ✅ Supprimer une formation
- ✅ Gérer les inscriptions

### Champs requis
| Champ | Type | Obligatoire |
|-------|------|-------------|
| Titre | Texte | Oui |
| Slug | Texte (auto-généré) | Oui |
| Description courte | Textarea | Oui |
| Description complète | WYSIWYG | Oui |
| Image principale | Upload | Oui |
| Durée | Texte | Non |
| Niveau | Select | Non |
| Prix | Nombre | Non |
| Actif | Boolean | Oui |

### Sections dynamiques
- **Features** (liste répétable)
  - Texte de la feature
  
- **Solutions** (liste répétable)
  - Titre
  - Description
  - Icône SVG path

- **Packs tarifaires** (liste répétable)
  - Nom du pack
  - Prix
  - Features (liste)
  - Icône SVG path
  - Mis en avant (boolean)

- **Services associés** (relation)
  - Sélection multiple de services

### Gestion des inscriptions
- Liste des demandes d'inscription
- Statut (en attente, confirmé, annulé)
- Informations du candidat
- Export CSV

---

## 4. 💼 PROJETS/RÉALISATIONS

### Fonctionnalités CRUD
- ✅ Créer un projet
- ✅ Modifier un projet
- ✅ Supprimer un projet
- ✅ Gérer la galerie

### Champs requis
| Champ | Type | Obligatoire |
|-------|------|-------------|
| Titre | Texte | Oui |
| Slug | Texte (auto-généré) | Oui |
| Client | Texte | Non |
| Date du projet | Date | Oui |
| Localisation | Texte | Non |
| Domaine/URL | Texte | Non |
| Catégorie | Select | Oui |
| Description courte | Textarea | Oui |
| Contexte | WYSIWYG | Oui |
| Résumé | WYSIWYG | Oui |
| Image hero | Upload | Oui |
| Mis en avant | Boolean | Non |
| Actif | Boolean | Oui |

### Catégories de projets
- Automatisation & Agent IA
- Conception Graphique
- Création De Site Web
- Marketing Digital

### Sections dynamiques
- **Features** (liste répétable)
  - Texte de la feature
  
- **Bénéfices** (liste répétable)
  - Icône emoji
  - Texte

- **Public cible** (liste répétable)
  - Texte

- **Galerie** (multi-upload)
  - Images (6-12 images)
  - Ordre d'affichage

---

## 5. 📄 CMS - PAGES STATIQUES

### Page Accueil
**Hero Section**
- Titre principal
- Sous-titre
- Texte du badge
- Boutons CTA (texte + liens)
- Vidéo background (URL)

**Section À propos**
- Titre
- Description (3 paragraphes)
- Features (6 items)
- Image

**Section Services**
- Titre
- Sélection des 3 services à afficher

**Section Portfolio**
- Titre
- Sélection des 2 projets à afficher

**Section Témoignages**
- Sélection des témoignages à afficher (carousel)

### Page À propos
- Titre hero
- Badge
- Contenu principal (WYSIWYG)
- Images (principale + secondaire)
- Statistiques (4 chiffres clés)
- Features (6 items)

### Page Contact
- Informations de contact
  - Email
  - Téléphone
  - Adresse
  - Réseaux sociaux (liens)
- FAQ (liste répétable)
  - Question
  - Réponse

### Footer
- Texte de présentation
- Liens rapides (gestion)
- Réseaux sociaux
- Copyright

---

## 6. ⚡ ESSENTIELS SUPPLÉMENTAIRES

### 📧 CONTACTS/LEADS

**Fonctionnalités**
- Liste des demandes de contact
- Détail d'une demande
- Changement de statut
- Réponse par email
- Export CSV
- Notifications email admin

**Champs capturés**
- Nom
- Email
- Téléphone
- Sujet
- Message
- Date de soumission
- Statut (nouveau, en cours, traité, archivé)
- Notes internes

---

### ⭐ TÉMOIGNAGES

**Fonctionnalités CRUD**
- Créer un témoignage
- Modifier un témoignage
- Supprimer un témoignage
- Activer/désactiver

**Champs requis**
| Champ | Type | Obligatoire |
|-------|------|-------------|
| Nom du client | Texte | Oui |
| Entreprise | Texte | Oui |
| Poste | Texte | Non |
| Témoignage | Textarea | Oui |
| Note | Select (1-5 étoiles) | Oui |
| Photo | Upload | Non |
| Icône | Upload/Select | Oui |
| Couleur de fond | Color picker | Oui |
| Ordre d'affichage | Nombre | Oui |
| Actif | Boolean | Oui |

---

### 🖼️ MÉDIATHÈQUE

**Fonctionnalités**
- Upload simple/multiple
- Glisser-déposer
- Prévisualisation
- Recherche par nom
- Filtrage par type (image, document, vidéo)
- Tri par date
- Suppression
- Informations du fichier (taille, dimensions, date)
- Utilisation du fichier (où est-il utilisé)

**Types de fichiers acceptés**
- Images : JPG, PNG, GIF, SVG, WEBP
- Documents : PDF
- Vidéos : MP4 (si nécessaire)

---

### 👥 UTILISATEURS & RÔLES

**Rôles**
1. **Super Admin**
   - Accès total
   - Gestion des utilisateurs
   - Paramètres système

2. **Admin**
   - Gestion du contenu
   - Pas de gestion utilisateurs

3. **Éditeur**
   - Création/modification contenu
   - Pas de suppression
   - Pas d'accès paramètres

**Fonctionnalités**
- CRUD utilisateurs
- Attribution des rôles
- Gestion des permissions
- Historique des connexions
- Réinitialisation mot de passe

---

### ⚙️ PARAMÈTRES GÉNÉRAUX

**Informations entreprise**
- Nom du site
- Logo (upload)
- Favicon (upload)
- Email principal
- Téléphone
- Adresse complète
- Horaires d'ouverture

**Réseaux sociaux**
- Facebook (URL)
- Twitter (URL)
- LinkedIn (URL)
- Instagram (URL)
- YouTube (URL)

**SEO Global**
- Meta title par défaut
- Meta description par défaut
- Google Analytics ID
- Google Tag Manager ID
- Facebook Pixel ID

**Email**
- Email de réception des formulaires
- Email de notification
- Configuration SMTP

**Maintenance**
- Mode maintenance (on/off)
- Message de maintenance
- IP autorisées

---

### 📊 STATISTIQUES & DASHBOARD

**Dashboard principal**
- Nombre total de visites (30 derniers jours)
- Demandes de contact (nouveau/total)
- Articles publiés
- Projets actifs
- Formations actives
- Graphique des visites
- Dernières demandes de contact
- Derniers articles publiés

**Analytics**
- Pages les plus visitées
- Sources de trafic
- Appareils utilisés
- Localisation des visiteurs

---

### 🔍 SEO AVANCÉ

**Par page/article**
- Meta title
- Meta description
- Meta keywords
- Open Graph (Facebook)
  - og:title
  - og:description
  - og:image
- Twitter Card
  - twitter:title
  - twitter:description
  - twitter:image

**Global**
- Génération automatique du sitemap.xml
- Gestion du robots.txt
- Redirections 301
- Canonical URLs

---

## 🏗️ ARCHITECTURE TECHNIQUE RECOMMANDÉE

### Stack suggérée

**Option 1 : Laravel Filament** ⭐ (Recommandé)
- ✅ Gratuit et open-source
- ✅ Interface moderne et intuitive
- ✅ Rapide à mettre en place
- ✅ Très personnalisable
- ✅ Communauté active
- ✅ Widgets et dashboard
- ✅ CRUD automatique

**Option 2 : Laravel Nova**
- ✅ Interface élégante
- ✅ Très puissant
- ❌ Payant ($99/site)
- ✅ Support officiel Laravel

**Option 3 : Admin Custom avec Livewire**
- ✅ Contrôle total
- ✅ Gratuit
- ❌ Plus long à développer
- ✅ Pas de dépendances externes

### Packages recommandés
```bash
# Admin
composer require filament/filament

# Éditeur WYSIWYG
composer require filament/spatie-laravel-media-library-plugin

# SEO
composer require spatie/laravel-sitemap
composer require artesaos/seotools

# Analytics
composer require spatie/laravel-analytics

# Slugs
composer require spatie/laravel-sluggable

# Permissions
composer require spatie/laravel-permission
```

---

## 📋 PRIORITÉS DE DÉVELOPPEMENT

### Phase 1 - MVP (Minimum Viable Product)
1. ✅ Authentification admin
2. ✅ Dashboard basique
3. ✅ CRUD Blog
4. ✅ CRUD Projets/Réalisations
5. ✅ Gestion des contacts/leads
6. ✅ Médiathèque basique

### Phase 2 - Contenu
1. ✅ CRUD Services
2. ✅ CRUD Formations
3. ✅ CRUD Témoignages
4. ✅ CMS Pages statiques (Accueil, À propos, Contact)
5. ✅ Paramètres généraux

### Phase 3 - Avancé
1. ✅ Gestion utilisateurs & rôles
2. ✅ SEO avancé
3. ✅ Statistiques & Analytics
4. ✅ Notifications email
5. ✅ Export de données

### Phase 4 - Optimisation
1. ✅ Cache management
2. ✅ Optimisation images
3. ✅ Backup automatique
4. ✅ Logs & monitoring
5. ✅ Performance dashboard

---

## 🎨 DESIGN DE L'ADMIN

### Principes
- Interface claire et intuitive
- Navigation simple
- Responsive (mobile-friendly)
- Thème cohérent avec le site
- Couleur principale : #3B7BF8

### Sections principales
1. **Dashboard** - Vue d'ensemble
2. **Contenu** - Blog, Projets, Formations, Services
3. **Médias** - Bibliothèque
4. **Contacts** - Leads et demandes
5. **Utilisateurs** - Gestion des admins
6. **Paramètres** - Configuration générale
7. **SEO** - Optimisation
8. **Statistiques** - Analytics

---

## 🔐 SÉCURITÉ

### Mesures essentielles
- ✅ Authentification à deux facteurs (2FA)
- ✅ Limitation des tentatives de connexion
- ✅ Logs des actions admin
- ✅ Validation des uploads
- ✅ Protection CSRF
- ✅ Sanitization des inputs
- ✅ Backup régulier de la base de données
- ✅ HTTPS obligatoire
- ✅ Permissions granulaires

---

## 📝 NOTES IMPORTANTES

1. **Base de données** : Prévoir les migrations pour toutes les tables
2. **Seeders** : Créer des données de test pour le développement
3. **API** : Prévoir une API REST si besoin d'une app mobile future
4. **Multilingue** : Structure prête pour FR/EN dans l'admin
5. **Versionning** : Git avec branches (main, develop, feature/*)
6. **Documentation** : Documenter le code et créer un guide utilisateur

---

**Date de création :** Mars 2026  
**Version :** 1.0  
**Statut :** Spécifications initiales

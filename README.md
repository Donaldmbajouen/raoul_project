# Raoul Projet - Site Vitrine

Site web fullstack Laravel Blade pour Raoul Projet, inspiré d'Inovixora avec la charte graphique KOBE.

## 🎨 Design

- **Inspiration principale** : Inovixora.com (structure et animations)
- **Couleurs** : Charte KOBE Corporation (#3B7BF8)
- **Typographie** : Poppins (titres) + Inter (corps)

## 🚀 Installation & Lancement

### Prérequis
- PHP 8.2+
- Composer
- Node.js 18+
- SQLite (déjà configuré)

### Installation

```bash
# 1. Installer les dépendances PHP
composer install

# 2. Installer les dépendances JavaScript
npm install

# 3. Copier le fichier d'environnement (déjà fait)
# cp .env.example .env

# 4. Générer la clé d'application (déjà fait)
# php artisan key:generate

# 5. Créer la base de données
touch database/database.sqlite
php artisan migrate
```

### Lancement en développement

**Option 1 : Deux terminaux séparés**

Terminal 1 - Serveur Laravel :
```bash
php artisan serve
```

Terminal 2 - Vite (assets en temps réel) :
```bash
npm run dev
```

**Option 2 : Build des assets puis serveur**

```bash
npm run build
php artisan serve
```

Le site sera accessible sur : **http://localhost:8000**

## 📁 Structure du Projet

```
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php          # Layout principal
│   ├── partials/
│   │   ├── navigation.blade.php   # Navigation responsive
│   │   └── footer.blade.php       # Footer
│   └── home.blade.php             # Page d'accueil avec Hero
├── css/
│   └── app.css                    # Styles KOBE (variables CSS)
└── js/
    └── app.js                     # Scripts

lang/
├── fr.json                        # Traductions françaises
└── en.json                        # Traductions anglaises
```

## ✅ Fonctionnalités Actuelles

- [x] Hero section avec image de fond et overlay
- [x] Navigation responsive avec menu mobile
- [x] Système multilingue (FR/EN)
- [x] Animations AOS (Animate On Scroll)
- [x] Design adapté aux couleurs KOBE
- [x] Footer avec liens sociaux
- [x] Routes de base

## 🎯 Prochaines Étapes

### Pages à créer
- [ ] Services (avec segmentation GL/SR)
- [ ] À propos
- [ ] Réalisations/Portfolio
- [ ] Formations
- [ ] Réservations
- [ ] Postuler
- [ ] Programme (inspiré de Kobe Corporation)
- [ ] Processus (inspiré de Kobe Corporation)
- [ ] Blog/Actualités
- [ ] Contact

### Fonctionnalités
- [ ] Changement de langue fonctionnel (bouton actif)
- [ ] Menu déroulant Services
- [ ] Section Partenaires (20+)
- [ ] Section Témoignages
- [ ] Formulaires (contact, réservation, candidature)
- [ ] Dashboard admin (optionnel)

## 🎨 Charte Graphique

Voir `kobe-charte-graphique.html` pour la référence complète.

### Couleurs principales
- **Primary Blue** : `#3B7BF8`
- **Primary Hover** : `#2563EB`
- **Heading** : `#0A0A0A`
- **Body** : `#4B5563`
- **Muted** : `#9CA3AF`

### Polices
- **Titres** : Poppins Bold/ExtraBold (600-900)
- **Corps** : Inter (400-600)

## 📝 Notes

- L'image de fond de la hero est actuellement une image Unsplash placeholder
- Les liens sociaux dans le footer sont des placeholders
- La langue par défaut est le français (configurable dans `.env`)

## 🔧 Configuration

Pour changer la langue par défaut, modifiez dans `.env` :
```env
APP_LOCALE=fr  # ou 'en' pour anglais
```

## 📚 Documentation

- [Laravel 11](https://laravel.com/docs/11.x)
- [Tailwind CSS 4](https://tailwindcss.com/docs)
- [Vite](https://vitejs.dev/)
- [AOS (Animate On Scroll)](https://michalsnik.github.io/aos/)

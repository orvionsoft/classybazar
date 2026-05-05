#!/bin/bash

# ============================================
# CLASSYBAZAR - COMPLETE RENAME SCRIPT
# OrvionShop3 to ClassyBazar - Single File Solution
# ============================================

echo ""
echo "=========================================="
echo "   Changing OrvionShop3 to ClassyBazar   "
echo "=========================================="
echo ""

# Backup create (optional)
echo "📦 Creating backup..."
cp -r . ../classybazar-backup-$(date +%Y%m%d) 2>/dev/null
echo "✅ Backup created in parent directory"
echo ""

# Main replacement function
replace_in_files() {
    echo "🔄 Replacing: $1 -> $2"
    find . -type f \
        -not -path "./vendor/*" \
        -not -path "./node_modules/*" \
        -not -path "./.git/*" \
        -not -path "./storage/*" \
        -not -path "./bootstrap/cache/*" \
        -exec sed -i "s/$1/$2/g" {} \; 2>/dev/null
}

# 1. Replace all variations
echo "📝 Step 1: Replacing text in all files..."
replace_in_files "OrvionShop3" "ClassyBazar"
replace_in_files "orvionshop3" "classybazar"
replace_in_files "OrvionSoft" "ClassyBazar"
replace_in_files "orvionsoft" "classybazar"
replace_in_files "Orvion Shop" "Classy Bazar"
replace_in_files "orvion shop" "classy bazar"
replace_in_files "ORVIONSHOP3" "CLASSYBAZAR"
echo "✅ Text replacement complete"
echo ""

# 2. Update .env
echo "⚙️ Step 2: Updating .env file..."
if [ -f .env ]; then
    sed -i 's/APP_NAME=.*/APP_NAME=ClassyBazar/' .env
    sed -i 's/APP_URL=.*/APP_URL=https:\/\/classybazar.com/' .env
    echo "APP_NAME=ClassyBazar" >> .env 2>/dev/null
    echo "APP_URL=https://classybazar.com" >> .env 2>/dev/null
    echo "✅ .env updated"
else
    echo "⚠️ .env file not found, creating..."
    cp .env.example .env 2>/dev/null
    echo "APP_NAME=ClassyBazar" > .env
    echo "APP_URL=https://classybazar.com" >> .env
    echo "✅ .env created and updated"
fi
echo ""

# 3. Update config files
echo "🔧 Step 3: Updating config files..."
[ -f config/app.php ] && sed -i "s/'name' => env('APP_NAME', '.*')/'name' => env('APP_NAME', 'ClassyBazar')/" config/app.php
[ -f config/database.php ] && sed -i 's/orvionshop/classybazar/g' config/database.php 2>/dev/null
echo "✅ Config files updated"
echo ""

# 4. Update composer.json
echo "📦 Step 4: Updating composer.json..."
if [ -f composer.json ]; then
    sed -i 's/"name": ".*\/.*"/"name": "classybazar\/classybazar"/' composer.json
    sed -i 's/"description": ".*"/"description": "ClassyBazar - Premium E-Commerce Platform"/' composer.json
    echo "✅ composer.json updated"
fi
echo ""

# 5. Update package.json
echo "📦 Step 5: Updating package.json..."
if [ -f package.json ]; then
    sed -i 's/"name": ".*"/"name": "classybazar"/' package.json
    sed -i 's/"description": ".*"/"description": "ClassyBazar - Premium E-Commerce Platform"/' package.json
    echo "✅ package.json updated"
fi
echo ""

# 6. Update views
echo "🎨 Step 6: Updating view templates..."
find resources/views -type f -name "*.blade.php" -exec sed -i 's/OrvionShop3/ClassyBazar/g' {} \; 2>/dev/null
find resources/views -type f -name "*.blade.php" -exec sed -i 's/orvionshop3/classybazar/g' {} \; 2>/dev/null
find resources/views -type f -name "*.blade.php" -exec sed -i 's/OrvionSoft/ClassyBazar/g' {} \; 2>/dev/null
echo "✅ View templates updated"
echo ""

# 7. Update routes
echo "🛣️ Step 7: Updating routes..."
[ -f routes/web.php ] && sed -i 's/orvionshop/classybazar/g' routes/web.php 2>/dev/null
[ -f routes/api.php ] && sed -i 's/orvionshop/classybazar/g' routes/api.php 2>/dev/null
echo "✅ Routes updated"
echo ""

# 8. Update database seeders
echo "💾 Step 8: Updating database files..."
find database -type f -name "*.php" -exec sed -i 's/OrvionShop/ClassyBazar/g' {} \; 2>/dev/null
find database -type f -name "*.php" -exec sed -i 's/orvionshop/classybazar/g' {} \; 2>/dev/null
echo "✅ Database files updated"
echo ""

# 9. Update README
echo "📖 Step 9: Creating new README..."
cat > README.md << 'EOF'
# ClassyBazar - Premium E-Commerce Website

## Live Demo
- **Website:** https://classybazar.com
- **Admin Panel:** https://classybazar.com/mypanel

## Admin Login
- **Email:** admin@classybazar.com
- **Password:** 12345678

## Features

### User Features
- Product browsing and search
- Category-based filtering
- Product details page
- Shopping cart management
- Secure checkout
- User authentication
- Order history tracking
- Responsive mobile design

### Admin Features
- Dashboard analytics
- Product CRUD operations
- Category management
- Order processing
- Customer management
- Site settings

## Tech Stack
- **Backend:** Laravel 10+
- **Frontend:** Blade, Bootstrap 5, JavaScript
- **Build Tools:** Vite, Laravel Vite Plugin
- **Styling:** Sass, PostCSS

## Installation

```bash
git clone https://github.com/classybazar/classybazar.git
cd classybazar
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve